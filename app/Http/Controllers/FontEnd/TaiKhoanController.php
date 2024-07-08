<?php

namespace App\Http\Controllers\FontEnd;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('fontend.taikhoan.register');
    }
    public function addregister(RegisterRequest $request)
    {
        // dd($data);
        $name = $request->name ;
        $email = $request->email ;
        $pass=  $request->pass;
        $password = bcrypt($pass);
        // dd($password);
        $avatar = $request->avatar->getClientOriginalName();
        $phone = $request->phone ;
        $address = $request->address ;
        // dd($avatar);
        $file = $request->avatar;
        $file->move('upload/user/avatar', $file->getClientOriginalName());
        DB:: table('users')->insert(
            [
                'name'=> $name, 
                'email' => $email,
                'avatar' => $avatar,
                'password' => $password, 
                'phone' => $phone, 
                'address' => $address, 
                'level' => 1,
            ] 
       );
       return redirect('/fontend/login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
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
