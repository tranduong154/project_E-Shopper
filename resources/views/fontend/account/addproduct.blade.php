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
                        <input type="text" placeholder="Name"  name="name" />
                        <input type="text" placeholder="Price"  name="price" />
                        <select name="category" id="carsaa">
                            <?php
                                        foreach($data as $value){
                                            ?>
                                                <option value="{{$value->id}}"><?php echo $value->name ?> </option>     
                                            <?php
                                        }

                                    ?>
                          </select>
                          
                          <select name="brand" id="carsa">
                            <?php
                            foreach($dataa as $value){
                                ?>
                                        <option value="{{$value->id}}" ><?php echo $value->name ?></option>     
                                <?php
                            }

                             ?>
                          </select>
                          <select name="sale" id="carss">
                            <option  value="0">New</option>
                            <option  value="1">Sale</option>
                          </select>
                          <input style="display:none" class="sale-1" type="text" placeholder="0"  name="salee" />
                          <input type="text" placeholder="Company Profile"  name="company" />
                          <textarea id="w3review" placeholder="Detail" rows="4" cols="50" name="detail" ></textarea>

                          
                            <label for="files">Select files:</label>
                            <input type="file" id="files" name="files[]" multiple>

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