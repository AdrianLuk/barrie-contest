<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Validator;
use App\User;
use App\Inquiry;
use URL;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $inquiries = Inquiry::get();
        return view('landing', compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
            'terms'   => 'accepted'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect(URL::previous())->withErrors($validator)->withInput()->with('flash.message', 'There was an error with your form submission. Please click here to try again.')->with('flash.class', 'danger');
        }else{
            $inquiry = new Inquiry;
            $inquiry->name = $request->input('name');
            $inquiry->email = $request->input('email');
            $inquiry->phone = $request->input('phone');
            $inquiry->message = $request->input('message');
            $inquiry->terms = $request->input('terms');
            $inquiry->ip_address = $request->ip();
            $inquiry->save();
            return redirect('/')->with('flash.message', 'Form submitted successfully! We will contact you shortly.')->with('flash.class', 'success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('landing');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inquiry = Inquiry::find($id);
        $inquiry->delete();
        return redirect('submissions');
    }
}
