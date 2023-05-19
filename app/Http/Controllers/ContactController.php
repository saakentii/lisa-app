<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{

    public function index()
    {
        return view('resume.contact');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'subject'=>'required|max:255',
            'message'=>'required',
        ]);

        $contact=new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save($validated);

        $contacts=Contact::all();
        $toEmail = "danialdiana600@gmail.com";
        Mail::to($toEmail)
            ->send(new SendMail($contacts));



        return back()->with('message','Хабарлама жіберілді.');
    }


    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
