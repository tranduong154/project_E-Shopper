<?php

namespace App\Http\Controllers\FontEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Intervention\Image\Laravel\Facades\Image;
class AddproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('category')->get()->toArray();
        $dataa = DB::table('brand')->get()->toArray();
        return view('fontend.account.addproduct', compact('data' , 'dataa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $data = [];
        if($request->hasfile('files'))
        {
            
            foreach($request->file('files') as $xx)
            {

                $image = Image::read($xx);
                // dd($image);
                $name = $xx->getClientOriginalName();
                $name_2 = "hinh50_".$xx->getClientOriginalName();
                $name_3 = "hinh200_".$xx->getClientOriginalName();

                //$image->move('upload/product/', $name);
                
                
                $path = public_path('upload/user/product/' . $name);
                $path2 = public_path('upload/user/product/' . $name_2);
                $path3 = public_path('upload/user/product/' . $name_3);

                $image->save($path);
                $image->resize(85, 84)->save($path2);
                $image->resize(329, 380)->save($path3);
                
                // lấy từng tên hình ảnh đưa vào mảng
                $data[] = $name;
            }
        }
        $imagee=json_encode($data);
        // dd($imagee);
         $id_user = Auth::id();
        $name = $request->name;
        $price = $request->price;
        $id_category = $request->category;
        $id_brand = $request->brand;
        $sale = $request->sale;
        $salee = $request->salee;
        $company = $request->company;
        $detail= $request->detail;
        // $data = $request->all;
        // dd($categorydata);
        DB:: table('product')->insert([
            'id_user' => $id_user,
            'name' => $name,
            'price' => $price,
            'id_category' => $id_category, 
            'id_brand' => $id_brand, 
            'sale' => $sale,
            'salee' => $salee,
            'company' => $company, 
            'detail' => $detail, 
            'avatar' => $imagee,
         ]);

        // json_encode:chuyen mảng sang chuỗi
       
        return redirect()->back();  
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
