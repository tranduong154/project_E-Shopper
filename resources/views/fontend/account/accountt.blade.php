@extends('fontend.layout.master')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Account</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{url('/fontend/account')}}">account</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{url('/fontend/account/myproduct')}}">My product</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{url('/fontend/account/addproduct')}}">Add product</a></h4>
                            </div>
                        </div>
                        
                    </div><!--/category-products-->
                
                    
                </div>
            </div>
            <?php
            $usersa = Auth::user()->toArray();   
            // $user = $usersa[0];
            // dd($usersa);
            ?>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Update user</h2>
                     <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="col-md-12">Name</label>
                        <input type="text" placeholder="Name" value="<?php echo  $usersa['name'] ?>" name="name" />
                        <label class="col-md-12">Email</label>
                        <input type="email" placeholder="Email Address" value="<?php echo  $usersa['email'] ?>" name="email"/>
                        <label class="col-md-12">Password</label>
                        <input type="password" name="password"/>
                        <label class="col-md-12">Phone</label>
                        <input type="text" placeholder="Phone" value="<?php echo  $usersa['phone'] ?>" name="phone"/>
                        <label class="col-md-12">Address</label>
                        <input type="text" placeholder="Address" value="<?php echo  $usersa['address'] ?>" name="password"/>
                        <div class="form-group">
                            <label class="col-md-12">Avatar</label>
                            <input type="file" name ="avatar" placeholder="image" name="avatar"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                        
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @enderror
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection