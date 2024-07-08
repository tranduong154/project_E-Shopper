<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blogs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestBlog;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
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
        $data = Blogs::all()->toArray();
        // dd($data);
        return view('shopadmin.blogs.blog',compact('data'));
    }
    public function addblog()
    {
        return view('shopadmin.blogs.addblog');
    }
    public function Postblog(RequestBlog $request){
        $image = $request->image->getClientOriginalName();
        $title = $request->title ;
        $ghichu = $request->ghichu ;
        // dd($ghichu);

        $file = $request->image;
        $file->move('upload/user/blog', $file->getClientOriginalName());
        
        DB:: table('blogs')->insert(
            [
                'image'=> $image, 
                'title' => $title,
                'ghichu' => $ghichu, 
            ] 
       );
        return redirect('/admin/blog/list');
    }
    public function edit($id)
    {
        $data = Blogs::where('id',$id)->get()->toArray();
        // $data= Blogs::findOrFail($id);
        $value = $data[0];
       
        return view ('shopadmin.blogs.editblog',compact('value'));
    }   
    public function update(RequestBlog $request ,$id)
    {
        $title = $request->title ;
        $image = $request->file('image')->getClientOriginalName();
        $ghichu = $request->ghichu ;

        
        $file = $request->image;
        $file->move('upload/user/blog', $file->getClientOriginalName());
        DB::table('blogs')
        ->where('id', $id)
        ->update([
            'title' => $title,
            'image' => $image,
            'ghichu' => $ghichu, 
        ]);
        return redirect('/admin/blog/list');

        // $user = Blogs::findOrFail($id);
        // //  dd($user);
        // $data = $request->all();
        // // dd($data);
      
        // $file = $request->avatar;
        // if(!empty($file)){
        //     $data['avatar'] = $file->getClientOriginalName();
        // }
       
        // if ($user->update($data)) {
        //     if(!empty($file)){
        //         $file->move('upload/user/avatar', $file->getClientOriginalName());
        //     }
        //     return redirect()->back()->with('success', __('Update profile success.'));
        // } else {
        //     return redirect()->back()->withErrors('Update profile error.');
        // }
    }
    public function delete($id)
    {
        $data = Blogs::all()->toArray();
        // dd($data);
        Blogs::where('id',$id)->delete();
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
