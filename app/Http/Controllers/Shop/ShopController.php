<?php

namespace App\Http\Controllers\Shop;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product')->get()->toArray();
        $data = DB::table('product')->paginate(9);
        return view('fontend.shop.shop', compact('data'));
    }

    // public function home()
    // {
    //     // $cart = Session::get('cart');
    //     // dd($cart);
    //     $data = DB::table('product')->get()->toArray();
    //     $data = DB::table('product')->paginate(6);
    //     return view('fontend.layout.index', compact('data'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $data = DB::table('product')->where('id',$id)->get()->toArray();
        $value = $data[0];
        return view('fontend.shop.product-deltai', compact('value'));
        // dd($value);
    }
   
    public function add_cart(Request $request)
    {   
        $id_product = $request->id_qty;
        $qty =$request->qty;
        // dd($id_product);
        if(is_null(Session::get('cart'))){
            Session::put('cart',[
                $id_product => $qty 
            ]);
            return redirect('/fontend/cart');
        }
        else{
            $cart = Session::get('cart');
            if(Arr::exists($cart, $id_product)){
                $cart[$id_product] = $cart[$id_product] +  $qty ;
                // dd( $cart[$id_product]);
                Session::put('cart',$cart);
                return redirect('/fontend/cart');
            }
            else{
                $cart[$id_product] =  $qty ;
                Session::put('cart',$cart);
                return redirect('/fontend/cart');
            }
        }
    }
    public function cart()
    { 
          // Kiểm tra sự tồn tại của dữ liệu trong session
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $id_product = array_keys($cart);
            $product =  DB::table('product')->whereIn('id', $id_product)->get();

            // Xử lý dữ liệu trong session và trả về view cart
            return view('fontend.shop.cart', compact('product'));
        } else {
            session()->flash('success', 'Giỏ hàng của bạn hiện đang trống.');
            // Xử lý khi không có dữ liệu trong session
            return redirect()->route('fontend');
        }
    }
    public function tangcart($id)
    {
        $cart = Session::get('cart');
        $cart[$id] = $cart[$id] +  1 ;
        // dd($cart[$id]);
            Session::put('cart',$cart);
            // DB::table('product')->where('id', '=', $id)->delete();
            // Session::forget('cart')[$id];
            return redirect()->back();  
    }
    public function giamcart($id)
    {
        $cart = Session::get('cart');
        $cart[$id] = $cart[$id] -  1 ;
        if( $cart[$id] < 1){
            unset($cart[$id]);
        }
        // dd($cart[$id]);
            Session::put('cart',$cart);
            // DB::table('product')->where('id', '=', $id)->delete();
            // Session::forget('cart')[$id];
            return redirect()->back();  
    }
    public function delete($id)
    {
            $cart = Session::get('cart');
            unset($cart[$id]);
            Session::put('cart',$cart);
            // DB::table('product')->where('id', '=', $id)->delete();
            // Session::forget('cart')[$id];
            return redirect()->back();  
    }    

    public function error()
    {
        return view('fontend.shop.error');
        // dd($value);
    }
    public function contact()
    {
        return view('fontend.shop.contact');
        // dd($value);
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
