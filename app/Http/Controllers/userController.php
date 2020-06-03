<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$users=User::all();
        return view('users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:11|min:11',
            'password' => ['string', 'min:8'],
        ] , [
            'name.required' => 'نام نمیتواند خالی باشد',
            'email.required' => 'email نمیتواند خالی باشد',
            'email.email' => 'لطفا در وارد کردن صحیح مقدار ایمیل دقت فرمایید',
            'phone.required' => 'تلفن نمیتواند خالی باشد',
            'phone.max' => 'تلفن نمیتواند بیشتر از 11 کاراکتر باشد',
            'phone.min' => 'تلفن نمیتواند کمتر از 11 کاراکتر باشد',
            'password.min' => 'پسوورد نمیتواند کمتر از 8 کاراکتر باشد',
        ]);







        try {

            $user = User::create([
                'name' => $request['name'],
                'role' => $request['role'],
                'active' => $request['active'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'password' => Hash::make($request['password']),
            ]);

            if ($request->photo){
                $file = $request->file('photo');
                $name = time() . $file->getClientOriginalName();
                $file->move('images/' , $name);
                $user->photo()->Create(['path'=>$name]);
            }
        } catch (Exception $exception) {


            return redirect()->route('user.index')->with('error' , $exception->getMessage() );
        }

        return redirect()->route('user.index')->with('success' , 'عملیات ایجاد با موفقیت انجام گردید');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show' , compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:11|min:11',
        ] , [
            'name.required' => 'نام نمیتواند خالی باشد',
            'email.required' => 'email نمیتواند خالی باشد',
            'email.email' => 'لطفا در وارد کردن صحیح مقدار ایمیل دقت فرمایید',
            'phone.required' => 'تلفن نمیتواند خالی باشد',
            'phone.max' => 'تلفن نمیتواند بیشتر از 11 کاراکتر باشد',
            'phone.min' => 'تلفن نمیتواند کمتر از 11 کاراکتر باشد',
        ]);
        if ($request->photo){
        $user->photo()->delete();
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/' , $name);
        $user->photo()->Create(['path'=>$name]);
        }
        unset($request['photo']);
        try {

            $user->update($request->all());
        } catch (Exception $exception) {


            return redirect()->route('user.index')->with('error' , $exception->getMessage() );
        }

        return redirect()->route('user.index')->with('success' , 'عملیات ویرایش با موفقیت انجام گردید');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::id() !== $user->id){
            try {

                $user->delete();
            } catch (Exception $exception) {


                return redirect()->route('user.index')->with('error' , $exception->getMessage() );
            }

            return redirect()->route('user.index')->with('success' , 'عملیات حذف با موفقیت انجام گردید');


    }
        return redirect()->route('user.index')->with('error' , ' کاربر گرامی ، شما نمیتوانید  خود را از لیست کاربران حذف کنید . لطفا در انجام عملیاتتان بیشتر دقت نمایید.' );
    }

    public function photo(Request $request){
        Auth::user()->photo()->delete();
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/' , $name);
        Auth::user()->photo()->Create(['path'=>$name]);
        return redirect(route('user.index'));
    }
}
