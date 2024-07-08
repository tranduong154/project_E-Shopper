@extends('fontend.layout.master')
@section('content')

<section id="form" ><!--form-->
    <div class="container" style=" text-align: center; width: 400px ";>
        <div >
            <div >
                <!-- resources/views/dashboard.blade.php -->

                <div class="login-form"><!--login form-->
                    @if (session('success'))
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h2>Login to your account</h2>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="email" placeholder="Email Address"  name="email"/>
                        <input type="password" placeholder="Password" name="pass"/>
                        <span>
                            <input type="checkbox" name="remember" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button  type="submit" class="btn btn-default">Login</button>
                    </form>
                    <a href="{{url('/fontend/register')}}">Register</a>

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                       <ul>
                           @foreach($errors->all() as $error)
                               <li>{{$error}}</li>
                           @endforeach
                       </ul>
                   </div>
                   @enderror
                   
                </div><!--/login form-->
            </div>
           
        </div>
    </div>
</section><!--/form-->

@endsection