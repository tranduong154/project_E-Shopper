<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\MailNotify;
class MailController extends Controller
{
    public function index(){
        $cart = Session::get('cart');
        if(isset($cart )){
            $id_product = array_keys($cart);
        $product =  DB::table('product')->whereIn('id', $id_product)->get();
        }
       
        $data = [
            'subject' => 'Cambo Tutorial Mail',
            'body' => $product
        ];
        try{
            Mail::to('duongtrann1504@gmail.com')->send(new MailNotify($data));
            return response()->json(['Greak check mail your box']);
        }catch(Exception $th){
            return response()->json(['sorry']);
        }
    }
}
