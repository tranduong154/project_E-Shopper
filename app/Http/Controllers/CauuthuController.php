<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CauuthuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $data = DB::table('blogs')->get()->toArray();
    //    dd($data);
        // // return view ('cauthu', compact('info'));
        return view ('cauthu.cauthu',compact('data'));
    }
    
    // public function GetLogin()
    // {
    //     return view('cauthu.CauThuu');
    // }
    // public function PostLogin(Request $request){
    //     $name = $request->name ;
    //     $tuoi = $request->tuoi ;
    //     $quoctich = $request->quoctich ;
    //     $vitri = $request->vitri ;
    //     $luong = $request->luong ;
    //     // echo $request->name."-----";
    //     // echo $request->tuoi."-----";
    //     // echo $request->quoctich."-----";
    //     // echo $request->vitri."-----";
    //     // echo $request->luong;
    //     DB:: table('blogs')->insert(
    //                     [
    //                         'name'=> $name, 
    //                         'age' => $tuoi,
    //                         'quoctich' => $quoctich, 
    //                         'vitri' => $vitri, 
    //                         'luong' => $luong,  
    //                     ] 
    //                );
    //                echo "thanh cong";
    // }

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
