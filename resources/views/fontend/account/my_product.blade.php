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
            <div class="col-sm-9">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">image</td>
                                <td class="description">name</td>
                                <td class="price">price</td>
                                
                                <td class="total">action</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($data as $value){
                                    $image =  $value->avatar;
                                    // dd($image);
                                    $imageArray = explode(',', trim($image, '[]'));
                                    $newArray = array_map(function($item) {
                                        return str_replace('"', '', $item);
                                    }, $imageArray);
                                    // $img = substr($imageArray, 1, -1);
                                    // dd($newArray );
                                    ?>
                                         <tr>
                                            <td class="cart_product">
                                                <a href=""><img  src="{{asset('upload/user/product/hinh50_'.$newArray[0] )}}" alt=""></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><?php  echo $value->name  ?></h4>
                                                
                                            </td>
                                            <td class="cart_price">
                                                <p>$ <?php  echo $value->price  ?> </p>
                                            </td>
                                            
                                            <td class="cart_total">
                                                <a href="{{url('/fontend/account/edit/'.$value->id)}}" style="padding-right: 5px">Edit</a>
                                                <a href="{{url('/fontend/account/delete/'.$value->id)}}"> Delete</a>
                                            </td>
                                            
                                        </tr>
                                    <?php
                                }
                            ?>
                            
                           
                            


                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection