<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('category')->get()->toArray();
        // $value = $data[0];
        // dd($value);
        return view('shopadmin.layout.category',compact('data'));
    }
    public function addcategory()
    {
       return view('shopadmin.layout.addcategory');
    }
    public function add(CountryRequest $request){
            $name = $request->name ;
                DB:: table('category')->insert(
                    [
                        'name'=> $name, 
                    ] 
       );
       return redirect('/admin/category');
    }
    public function edit($id)
    {
        $getData = DB::table('category')->where('id',$id)->get()->toArray();
        $value = $getData[0];
    //    echo $getData;
            // dd($getData);
        return view ('shopadmin.layout.editcategory',compact('value'));
    }   
    public function update(Request $request ,$id)
    {
        $name = $request->name;
        DB::table('category')
        ->where('id', $id)
        ->update([
            'name' => $name,
        ]);
        return redirect('/admin/category');
    }
    public function delete($id)
    {
        DB::table('category')->where('id', '=', $id)->delete();
        return redirect()->back();  
      }      

 
}
