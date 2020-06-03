<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //      if($user=User::where('phone' , $request->phone)->get()){
//            $user=User::where('phone','=',$request->phone)->first()->get();
        $user=User::where('phone' , $request->phone)->first();
//        $id=$user->id;
        if(!$request->name){ $request->name = $user->name;}
        $contact =new Contact();
        $contact['name'] = $request->name;
        $contact['phone'] = $request->phone;

        $user->contact()->save($contact);
//         return   dd(User::where('phone' , $request->phone)->usercontact()->get());
        Auth::user()->contacts()->attach($contact->id);

        return redirect(route('messages.index'));
//      }else{
//          $msg='این کاربر نا معتبر است';
//          return redirect(route('messages.index'))->with('error',$msg);
//      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
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
        Auth::user()->contacts()->dettach($contact->id);
        $contact->delete();
    }
}
