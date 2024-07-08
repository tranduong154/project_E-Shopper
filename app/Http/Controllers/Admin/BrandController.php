<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
class BrandController extends Controller
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
        $data = DB::table('brand')->get()->toArray();
        // $value = $data[0];
        // dd($value);
        return view('shopadmin.layout.brand',compact('data'));
    }
    public function addbrand()
    {
       return view('shopadmin.layout.addbrand');
    }
    public function add(CountryRequest $request){
            $name = $request->name ;
                DB:: table('brand')->insert(
                    [
                        'name'=> $name, 
                    ] 
       );
       return redirect('/admin/brand');
    }
    public function edit($id)
    {
        $getData = DB::table('brand')->where('id',$id)->get()->toArray();
        $value = $getData[0];
    //    echo $getData;
            // dd($getData);
        return view ('shopadmin.layout.editbrand',compact('value'));
    }   
    public function update(Request $request ,$id)
    {
        $name = $request->name;
        DB::table('brand')
        ->where('id', $id)
        ->update([
            'name' => $name,
        ]);
        return redirect('/admin/brand');
    }
    public function delete($id)
    {
        DB::table('brand')->where('id', '=', $id)->delete();
        return redirect()->back();  
      }      

 
}
