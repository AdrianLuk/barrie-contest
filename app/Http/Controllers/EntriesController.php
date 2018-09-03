<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Validator;
use App\Entry;
use App\User;
use URL;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::get();
        return view('entries', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enter-now');
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
            'name'  => 'required',
            'email' => 'required|email|unique:entries',
            'phone' => 'required',
            'photo' => 'required|image'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect(URL::previous())->withErrors($validator)->withInput()->with('flash.message', 'There was an error with your entry submission. Please click here to try again.')->with('flash.class', 'danger');
        }else{
            $entry = new Entry;
            $entry->name        = $request->input('name');
            $entry->email       = $request->input('email');
            $entry->phone       = $request->input('phone');
            $entry->category    = $request->input('category');
            $entry->photo       = $request->file('photo')->store('uploads');
            $entry->photo_description = $request->input('photo_description');
            $entry->ip_address  = $request->ip();
            $entry->save();
            return redirect('/')->with('flash.message', 'Entry submitted successfully! Thank you for entering the contest')->with('flash.class', 'success');
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
        //
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
        //
    }
}
