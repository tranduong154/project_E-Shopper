<?php

namespace App\Http\Controllers\FontEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TrangChuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('product')->paginate(6);
        return view('fontend.layout.index', compact('data' ));
    }
    public function search(Request $request)
    {
        $min = $request->min;
        $max = $request->max;

        $minn = intval($min);
        $maxx = intval($max);

        // var_dump($minn);
        // var_dump($maxx);
        // $data = DB::table('product')->paginate(6);

        $data =DB::table('product')->whereBetween('price',[$minn, $maxx])->get();
        // dd($results);
        return view('fontend.layout.search', compact('data' ));
    }
    public function timkiem(Request $request)
    {
       
        $keywords = $request->keywords;
        // dd( $qty);
        $dataa = DB::table('product')->paginate(6);

        $data = DB::table('product')->where('name','like','%'.$keywords .'%')->paginate(6);
        return view('fontend.layout.timkiem', compact('data'));
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
