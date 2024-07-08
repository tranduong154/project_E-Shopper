@extends('fontend.layout.master')
@section('content')

<section>
    <head>
        <style>
            .row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            }

            .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
            }

            .image-container img {
            width: 120px;
            height: 100px;
            margin-bottom: 10px;
            }

            .image-container input[type="checkbox"] {
            transform: scale(0.8);
            }
        </style>
    </head>
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
            // $usersa = Auth::user()->get()->toArray();;    
            // $user = $usersa[0];
            // dd($value['avatar']);
            ?>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Creat Product</h2>
                     <div class="signup-form"><!--sign up form-->
                    <h2>New Product</h2>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Name" value="<?php echo $data->name ?> "  name="name" />
                        <input type="text" placeholder="Price"  value="<?php echo $data->price ?> "  name="price" />
                        <select name="category" id="carsaa">
                            <?php
                                        foreach($cate as $value){
                                            ?>
                                                <option value="{{$value->id}}" <?php echo (($value->id == $data->id_category)?'selected' : ' ') ?>><?php echo $value->name ?> </option>     
                                            <?php
                                        }

                                    ?>
                          </select>
                          
                          <select name="brand" id="carsa">
                            <?php
                            foreach($brand as $value){
                                ?>
                                        <option value="{{$value->id}}" <?php echo (($value->id == $data->id_brand)?'selected' : ' ') ?> ><?php echo $value->name ?></option>     
                                <?php
                            }

                             ?>
                          </select>
                          <select name="sale" id="carss">
                            <option  value="0">New</option>
                            <option  value="1">Sale</option>
                          </select>
                          <input style="display:none" class="sale-1" type="text" placeholder="0"  name="salee" />
                          <input type="text" placeholder="Company Profile" value="<?php echo $data->company ?> "   name="company" />
                          <textarea type="text" id="w3review"  rows="4" cols="50"    name="detail" ><?php echo $data->detail ?></textarea>

                          
                            <label for="files">Select files:</label>
                            <input type="file" id="files" name="files[]" multiple><br><br>

                                <div class="row">
                                    <?php
                                           
                                    $image = json_decode( $data->avatar, true);
                                    foreach($image as $valueea){
                                    ?>
                                        <div class="image-container">
                                        <img type="file" src="{{asset('upload/user/product/hinh50_'.$valueea )}}" alt="Image 1">
                                        <input type="checkbox" name="hinhxoa[]" value="<?php  echo $valueea  ?> " >
                                        </div>
                                    <?php
                                            }
                                    ?>
                                  </div>
                        <button type="submit" class="btn btn-default">Signup</button>
                       
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            
            $.ajaxSetup({
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(this).click(function(){
                var id =  $('#carss').val();
                var form_replay = '.sale-'+id;
                $(form_replay).slideDown();
            });
        });
    </script>
</section>


@endsection