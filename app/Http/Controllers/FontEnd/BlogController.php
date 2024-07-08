<?php

namespace App\Http\Controllers\FontEnd;
use App\Models\Blogs;
use App\Models\DanhGia;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Auth;
use App\Http\Requests\RequestCmt;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blogs::all()->toArray();
        $data = Blogs::paginate(3);
        return view('fontend.blog.blog',compact('data'));
    }


    public function detail($id)
    {
        $userId = Auth::id();
        // $user = Admin::findOrFail($userId)->get()->toArray();
        // $userr = $user[0];
        //  dd($userr);
        $cmt = DB::table('binhluann')->get()->toArray();
        //  $binhluan = $cmt[0];
        //  dd($cmt);
         
        $data = Blogs::where('id',$id)->get()->toArray();
        $value = $data[0];

        $getData = DB::table('danhgia')->where('id_blog',$id)->avg('rate');
         $danhgia = round($getData);
        return view('fontend.blog.blog-detail',compact('value', 'danhgia', 'cmt'));
    }
    public function rate(Request $request)
    {
            $rate = $_POST['rate'];
            $id_blog = $_POST['id_blog'];
            $id_user = $_POST['id_user'];
            DB:: table('danhgia')->insert(
                [
                    'rate'=> $rate, 
                    'id_blog'=> $id_blog, 
                    'id_user'=> $id_user, 
                ] 
            );
    }
    public function cmt(RequestCmt $request , $id)
    {
        $id_user = Auth::id();
        $userr = Admin::findOrFail($id_user)->get()->toArray();
        // dd($userr);
        $message = $request->message;
        $id_blog = $id;
        $name =  $userr[0]['name'];
        // echo $name;
        $avatar =  $userr[0]['avatar'];
        //  dd($avatar);

        DB:: table('binhluann')->insert([
                'cmt' => $message,
                'name' => $name,
                'id_blog' => $id_blog,
                'id_user' => $id_user, 
                'avatar' => $avatar, 
                'level' => 0,
        ]);
        return redirect()->back();  
    }
    public function repcmt(RequestCmt $request , $id)
    {
        // echo $lv;
        $id_user = Auth::id();
        $userr = Admin::findOrFail($id_user)->get()->toArray();
        // dd($userr);
        $message = $request->message;
        $id_blog = $id;
        $name =  $userr[0]['name'];
        // echo $name;
        $avatar =  $userr[0]['avatar'];
        //  dd($avatar);
        $lv = $request->level;
        DB:: table('binhluann')->insert([
                'cmt' => $message,
                'name' => $name,
                'id_blog' => $id_blog,
                'id_user' => $id_user, 
                'avatar' => $avatar, 
                'level' => $lv,
        ]);
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
