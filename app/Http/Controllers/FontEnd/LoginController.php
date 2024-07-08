<?php

namespace App\Http\Controllers\FontEnd;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MemberLoginRequest;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fontend.taikhoan.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/fontend/login');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $pass = $request->pass;
        // $password = bcrypt($pass);
        // dd($password);
        $login =[
            'email' => $email,
            'password' =>  $pass,
            'level' => 0
        ];    
        $loginn =[
            'email' => $email,
            'password' =>  $pass,
            'level' => 1
        ]; 

        $remember = false;
        if($request->remember){
            $remember = true;
        }
      
        if($this->doLogin($loginn, $remember)){
                return redirect('/fontend/home')->with('success',('Logged in successfully.'));
        } 
        else if($this->doLogin($login, $remember))
        {
            return redirect('/admin/dashboard')->with('success',('Logged in successfully.'));
        }       
        else{
            return redirect()->back()->withErrors('Email or password is not correct.');
            }
    }
    protected function doLogin($attempt, $remember)
    {
        if (Auth::attempt($attempt, $remember)) {
            session(['isAdmin' => $attempt]);
            return true;
        } else {
            return false;
        }
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
        //
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
