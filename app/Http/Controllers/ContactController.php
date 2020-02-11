<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /*
    * Mise en place du Middleware
    */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth')->only(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Contact $contact)
    {
        if(!$contact){
        $contact= new Contact();
        }

        $isValidate =request()->validate([
            'name' => [],
            'tel' => [],
            'email' => [],
        ]);

        $contact->name = request('name');
        $contact->tel = request('tel');
        $contact->email = request('email');

        $contact->user_id = auth()->user()->id;
        
        $contact->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $contact->delete();
        return $this->index();
    }
}
