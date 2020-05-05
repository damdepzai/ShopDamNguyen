<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContact;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends FontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getContact(Request $request){
        return view('contact.index');
    }
    public function postContact(RequestContact $request){
        $contact = new Contact();
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->address=$request->address;
        $contact->content=$request->content_text;
        $contact->title=$request->title;
        $contact->save();
        return redirect()->back();
    }
    public function  aboutus(){
        return view('contact.about_us');
    }
}
