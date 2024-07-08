<?php

namespace App\Http\Controllers\Shop;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;
use App\Mail\MailNotify;
use Mail;
class CheckoutController extends Controller
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
            // Nếu đã đăng nhập, hiển thị trang checkout
          
            if(Auth::check()){
            $userId = Auth::id();
                // dd($userId);
            $user = Admin::findOrFail($userId);
                //  dd($user);
            $cart = Session::get('cart');
            if(Session::has('cart')){
                $id_product = array_keys($cart);
                $product =  DB::table('product')->whereIn('id', $id_product)->get();
                return view('fontend.shop.checkout' , compact('product','user'));
            }else{
                session()->flash('success', 'Giỏ hàng của bạn hiện đang trống nên không thể xem checkout.');
                // Xử lý khi không có dữ liệu trong session
                return redirect()->route('fontend');
            }
        // dd($id_product);
            }    
            else {
                // $cart = Session::get('cart');
                // $id_product = array_keys($cart);
                // $product =  DB::table('product')->whereIn('id', $id_product)->get();
                // // Nếu chưa đăng nhập, chuyển hướng đến trang đăng ký
                // return view('fontend.shop.checkout' , compact('product','user'));
                return redirect('/fontend/login')->with('success', 'Please Login');
            }
       
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
        $user = User::create(
            [
                'name'=> $name, 
                'email' => $email,
                'avatar' => $avatar,
                'password' => $password, 
                'phone' => $phone, 
                'address' => $address, 
                'level' => 0,
            ] 
       );
       
       Auth::login($user);

    //    return redirect()->intended('dashboard');
       return redirect('/fontend/checkout');
    }

    public function email(){
        $cart = Session::get('cart');
        if(isset($cart )){
        $id_product = array_keys($cart);
        $product =  DB::table('product')->whereIn('id', $id_product)->get();

        $total = 0;
                    // var_dump( Session::get('cart'));
        // dd($product);
            foreach ($product as $value) {
                $image = json_decode( $value->avatar, true);
                $tongprice = Session::get('cart')[$value->id]*$value->price;
                $total  =  $total  + $tongprice;
            }
        }
        $phone = Auth::user()->phone;
        $email = Auth::user()->email;
        $id_user = Auth::user()->id;
        $auth = Auth::user()->name;
        $data = [
            'subject' => 'E-SHOPPER',
            'body' => $product ,
        ];
        try{
            Mail::to($email)->send(new MailNotify($data));
            DB:: table('history')->insert([
                'id_user' => $id_user,
                'email' => $email,
                'name' =>  $auth,
                'price' =>  $total,
                'phone' => $phone,
             ]);
             session()->flash('success', 'Greak check mail your box.');
            // Xử lý khi không có dữ liệu trong session
            return redirect()->route('checkout');
        }catch(Exception $th){
            return response()->json(['sorry']);
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
