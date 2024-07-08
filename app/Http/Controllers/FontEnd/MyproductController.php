<?php

namespace App\Http\Controllers\FontEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Intervention\Image\Laravel\Facades\Image;
class MyproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = DB::table('product')->get()->toArray();
        return view('fontend.account.my_product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = DB::table('category')->get()->toArray();
        $brand = DB::table('brand')->get()->toArray();
        $getData = DB::table('product')->where('id',$id)->get()->toArray();
        $data = $getData[0];
      
    //    echo $getData;
        return view ('fontend.account.editproduct',compact('data', 'cate', 'brand'));
    }
    public function update(Request $request ,$id)
    {
        // $data = $request->hasfile('hinhxoa');
        $getData = DB::table('product')->where('id',$id)->get()->toArray();
        $dataa = $getData[0];


        $img = $request->hinhxoa;
        // dd($img);
     
// dd($arr);

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
        $image = json_decode($dataa->avatar, true);
        // dd($image);
        if(isset($img)){
            foreach($image as $key => $value){
                if(in_array($value, $img )){
                   unset($image[$key]);
                }
           }
        }
        
           $arr = array_values($image);
           $tongimg = array_merge($arr ,$data);

        // $imagee=json_encode($data);
        foreach($tongimg as $key => $value){
        }
        if($key <= 2){
            DB::table('product')
            ->where('id', $id)
            ->update([
                'avatar' =>  $tongimg,
            ]);
        }else{
            DB::table('product')
            ->where('id', $id)
            ->update([
                'avatar' =>  $arr,
            ]);
        }



        // $imagee=json_encode($img );
        // $Images =  DB::table('product')->whereIn('avatar',  $imagee)->get();
        // DB::table('product')->whereIn('avatar',  $imagee)->delete();

        // DB::table('product')->whereIn('id', $img)->delete();
        // DB::table('product')->pluck('avatar')->whereIn('id', $img)->delete();
        // dd($img);

        $id_user = Auth::id();
        $name = $request->name;
        $price = $request->price;
        $id_category = $request->category;
        $id_brand = $request->brand;
        $sale = $request->sale;
        $salee = $request->salee;
        $company = $request->company;
        $detail= $request->detail;
        DB::table('product')
        ->where('id', $id)
        ->update([
            'id_user' => $id_user,
            'name' => $name,
            'price' => $price,
            'id_category' => $id_category, 
            'id_brand' => $id_brand, 
            'sale' => $sale,
            'salee' => $salee,
            'company' => $company, 
            'detail' => $detail, 
        ]);

      
        
        return redirect('fontend/account/myproduct');
    }
    public function delete($id)
    {
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect()->back();  
      }      
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
