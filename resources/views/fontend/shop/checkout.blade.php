@extends('fontend.layout.master')
@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->
    
            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
                <h3>New User</h3>
                <p>Checkout options</p>
                <ul class="nav">
                    <li>
                        <label><input type="checkbox"> Register Account</label>
                    </li>
                    <li>
                        <label><input type="checkbox"> Guest Checkout</label>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-times"></i>Cancel</a>
                    </li>
                </ul>
            </div><!--/checkout-options-->
    
        
            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>
    
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $tongqty = 0;
                        // dd($product);
                            foreach ($product as $value) {
                                $image = json_decode( $value->avatar, true);
                                $tongprice = Session::get('cart')[$value->id]*$value->price;
                                $total  =  $total  + $tongprice;
                                $tongqty =  Session::get('cart')[$value->id] +  Session::get('cart')[$value->id];
                                ?>
                            <form action="/fontend/cart/delete/{{$value->id}}" method="POST">
                                <tbody>
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="{{asset('upload/user/product/hinh50_'.$image[1] )}}" alt=""></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""><?php  echo $value->name ?></a></h4>
                                            <p>Web ID: <?php  echo $value->id ?></p>
                                        </td>
                                        <td class="cart_price">
                                            <p>$<?php  echo $value->price ?></p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href=""> + </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="{{Session::get('cart')[$value->id]}}" autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href=""> - </a>
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">$ <?php echo $tongprice  ?></p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="/fontend/cart/delete/{{$value->id}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    
                            </tbody>
                          
                            </form>
                                <?php
                            }
                        // var_dump($total);
                            
                        ?>
                          <tr>
                            <td colspan="3">&nbsp;</td>
                            <td colspan="3">
                                <table class="table table-condensed total-result">
                                   
                                    <tr>
                                        <td>Exo Tax</td>
                                        <td>$2</td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Shipping Cost</td>
                                        <td>Free</td>										
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td><span>$<?php echo $total -2 ?></span></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>
                                            <form action="{{url('/vnpayy')}}"  method="POST" >
                                            @csrf
                                            <button type="submit" name="redirect" class="btn btn-primary">Thanh Toán Vnpay</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                </table>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
                
            </div>
            {{-- <div class="payment-options">
                    <span>
                        <label><input type="checkbox"> Direct Bank Transfer</label>
                    </span>
                    <span>
                        <label><input type="checkbox"> Check Payment</label>
                    </span>
                    <span>
                        <label><input type="checkbox"> Paypal</label>
                    </span>
                </div>
                <div class="register-req">
                    <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
                </div><!--/register-req-->
         --}}
                <div class="shopper-informations">
                    <div class="row">
                       
                        <div class="col-sm-8 clearfix">
                            <div class="bill-to">
                                <p>Bill To</p>
                                <div class="form-one">
                                    <form>
                                        <input type="text" placeholder="Company Name">
                                        <input type="text" placeholder="Email*">
                                        <input type="text" placeholder="Title">
                                        <input type="text" placeholder="First Name *">
                                        <input type="text" placeholder="Middle Name">
                                        <input type="text" placeholder="Last Name *">
                                        <input type="text" placeholder="Address 1 *">
                                        <input type="text" placeholder="Address 2">
                                    </form>
                                </div>
                                <div class="form-two">
                                    <form>
                                        <input type="text" placeholder="Zip / Postal Code *">
                                        <select>
                                            <option>-- Country --</option>
                                            <option>United States</option>
                                            <option>Bangladesh</option>
                                            <option>UK</option>
                                            <option>India</option>
                                            <option>Pakistan</option>
                                            <option>Ucrane</option>
                                            <option>Canada</option>
                                            <option>Dubai</option>
                                        </select>
                                        <select>
                                            <option>-- State / Province / Region --</option>
                                            <option>United States</option>
                                            <option>Bangladesh</option>
                                            <option>UK</option>
                                            <option>India</option>
                                            <option>Pakistan</option>
                                            <option>Ucrane</option>
                                            <option>Canada</option>
                                            <option>Dubai</option>
                                        </select>
                                        <input type="password" placeholder="Confirm password">
                                        <input type="text" placeholder="Phone *">
                                        <input type="text" placeholder="Mobile Phone">
                                        <input type="text" placeholder="Fax">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="shopper-info">
                                <p>Shopper Information</p>
                                <form method="POST" >
                                    <input type="text" placeholder="Display Name" value="<?php echo $user->name ?>">
                                    <input type="text" placeholder="User Name" value="<?php echo $user->email ?>">
                                    <input type="text" placeholder="Phone" value="<?php echo $user->phone ?>">
                                    <input type="text" placeholder="Address" value="<?php echo $user->address ?>">
                                    {{-- <button  class="btn btn-primary" href="">Get Quotes</button> --}}
                                    <a href="/fontend/checkout/email"  class="btn btn-primary">Check Mail</a>
                                    
                                </form>

                            @if(session('success'))
                            <script>
                                alert("{{ session('success') }}");
                            </script>
                        @endif
                      
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
    </section> 
<!--/#cart_items-->

@endsection