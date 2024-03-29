<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Enquire;
use Mail;
use Storage;

class EnquireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function isa_convert_bytes_to_specified($bytes, $to, $decimal_places = 1) {
        $formulas = array(
            'K' => number_format($bytes / 1024, $decimal_places),
            'M' => number_format($bytes / 1048576, $decimal_places),
            'G' => number_format($bytes / 1073741824, $decimal_places)
        );
        return isset($formulas[$to]) ? $formulas[$to] : 0;
    }
    public function index()
    {
        //Retrieve all enquire

        $enquires=Enquire::latest()->simplePaginate(9);
        return view('enquire.index',['enquires'=>$enquires]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //vslidate data
        $validatedData = $request->validate([
            'full-name' => 'required|string|min:3|max:40',
            'email' => 'required|string|email|max:255',
            'message' =>'required|string|min:30',
        ]);


        if ($request->hasFile('file'))
        {
            //
            $tokeen=uniqid();
            $path = $request->file('file')->store('files');
            $enquire=Enquire::create([
                'name'=>$request->input('full-name'),
                'address'=>$request->input('email'),
                'message'=>$request->input('message'),
                'file'=>$path,
                'token'=>$tokeen,
                'served'=>0,
            ]);

            Mail::send('email',
            array(
                'Thank you for choosing us your issue will be addressed within
                24 hours by our staff who were eager to serve you. Zealous
                together we build a better tomorrow'
            ), function($message) use ($request,$tokeen)
        {
            $message->from('non-reply@zealous.co.tz');
            $message->to($request->input('email'), 'Dear '.$request->input('full-name'))->subject('Issue no '.$tokeen.' feedback');
        });


        } else{
            $enquire=Enquire::create([
                'name'=>$request->input('full-name'),
                'address'=>$request->input('email'),
                'message'=>$request->input('message'),
                'file'=>'no file',
            ]);
        }
        return redirect()->back()->with('status', 'Thank you
        for contacting us we will get in touch with you shortly ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $enquire=Enquire::where('id',$id)->first();
        $bytes = Storage::size($enquire->file);
        $size= $this->isa_convert_bytes_to_specified($bytes, 'K',2);
        if($size>1024){
            $size= $this->isa_convert_bytes_to_specified($bytes, 'M',2);
            if($size>1024){
            $size= $this->isa_convert_bytes_to_specified($bytes, 'G',2);
            $size=$size.' Gb';
            }
            else{
            $size=$size.' Mb';
            }
        }
        else{
        $size=$size.' kb';
        }
        return view('enquire.show',['enquire'=>$enquire,'size'=>$size]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $enquire=Enquire::where('id',$id)->first();
        $Enquire=Enquire::where('id',$enquire->id)->update([
            'served'=>1
            ]);

            if($Enquire){
                return redirect()->route('enquire.show',['enquire'=>$enquire->id])->with('success',
                'issue no '.$enquire->token. ' served');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

      /**
     * download the specified file resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        //
        $enquire=Enquire::where('id');

    }

}
