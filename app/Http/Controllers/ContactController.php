<?php
/**
 * Created by PhpStorm.
 * User: HTcoding
 * Date: 5/6/2021
 * Time: 7:02 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {


    public function contact(){
        return view('site.contact');
    }


    // INSERT
    public function contactForm(ContactRequest $request){
//        dd($request->all());
//        dd($request->input('first_name'));

//        $request->validate([
//            'name' => 'required|min:5|max:15',
//            'subject' => 'required|min:20',
//        ]);


        //
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->subject = $request->input('subject');

        if($request->hasFile('avatar')) {
            // $img_org_name = $request->file('avatar')->getClientOriginalName();
            $img_org_name = $request->file('avatar')->hashName();
            $img_destination_path = 'public/images/upload';
//            $request->file('avatar')->move(public_path() . $img_destination_path, $img_org_name);
            $request->file('avatar')->storeAs($img_destination_path,$img_org_name);
        }else {
            $img_org_name = 'default.png';
        }
        $contact->image = $img_org_name;
        $contact->save();

        return redirect()->route('home')->with('success','Your message has been successfully sent.');

    }

    //SELECT
    public function selectData() {
        $contact = new Contact();
//        dd($contact->all());
//        dd(Contact::all());
//        ['data' => Contact::all()]
//        ['data' => $contact->all()]
//        ['data' => $contact->inRandomOrder()->get()]
//        ['data' => $contact->orderBy('id','desc')->get()]
//        ['data' => $contact->orderBy('id','asc')->take(2)->get()]
//        ['data' => $contact->orderBy('id','asc')->skip(1)->take(2)->get()]
//        ['data' => $contact->where('subject' , '=', 'Database: Migrations')->get()]
//        ['data' => $contact->where('id', 1)->get()]
        return view('site.messages', ['data' => $contact->all()]);
    }

    // Show only One data(message)
    public function showOneData($id) {
        $contact = new Contact();
        return view('site.message', ['data' => $contact->find($id)]);
    }

    // Update data(message)
    public function updateOneData($id) {
        $contact = new Contact();
        return view('site.update_message', ['data' => $contact->find($id)]);
    }
    public function updateOneDataSubmit($id,ContactRequest $request) {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->subject = $request->input('subject');

        if($request->hasFile('avatar')) {
            $img_org_name = $request->file('avatar')->hashName();
            $img_destination_path = 'public/images/upload';
            $request->file('avatar')->storeAs($img_destination_path,$img_org_name);
        }else {
            $img_org_name = 'default.png';
        }

        $contact->image = $img_org_name;

        $contact->save();

        return redirect()->route('contact-data-show-one',$id)->with('success','Your message has been successfully update.');
    }

    // Delete data (message)
    public function updateOneDataDelete($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data',$id)->with('success','Your message has been deleted.');
    }



}