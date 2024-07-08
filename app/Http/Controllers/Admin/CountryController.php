<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
class CountryController extends Controller
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
        $data = DB::table('Country')->get()->toArray();
        // $value = $data[0];
        // dd($value);
        return view('shopadmin.layout.country',compact('data'));
    }
    public function addcountry()
    {
       return view('shopadmin.layout.addcountry');
    }
    public function add(CountryRequest $request){
            $name = $request->name ;
                DB:: table('Country')->insert(
                    [
                        'name'=> $name, 
                    ] 
       );
       return redirect('/admin/country');
    }
    public function edit($id)
    {
        $getData = DB::table('Country')->where('id',$id)->get()->toArray();
        $value = $getData[0];
    //    echo $getData;
            // dd($getData);
        return view ('shopadmin.layout.editcountry',compact('value'));
    }   
    public function update(Request $request ,$id)
    {
        $name = $request->name;
        DB::table('Country')
        ->where('id', $id)
        ->update([
            'name' => $name,
        ]);
        return redirect('/admin/country');
    }
    public function delete($id)
    {
        DB::table('Country')->where('id', '=', $id)->delete();
        return redirect()->back();  
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
