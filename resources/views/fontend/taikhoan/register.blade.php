@extends('fontend.layout.master')
@section('content')

<section id="form" ><!--form-->
    <div class="container" style=" text-align: center; width: 400px ";>
        <div >
            <div class="signup-form"><!--sign up form-->
                <h2>New User Signup!</h2>
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <input type="text" placeholder="Name" name='name'/>
                    <input type="email" placeholder="Email Address" name='email'/>
                    <input type="password" placeholder="Password" name='pass'/>
                    <input type="phone" placeholder="Phone" name='phone'/>
                    <input type="file" name ="avatar" placeholder="image"/>
                    <input type="address" placeholder="Address" name='address'/>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @enderror
            </div><!--/sign up form-->
            </div>
           
        </div>
    </div>
</section><!--/form-->

@endsection