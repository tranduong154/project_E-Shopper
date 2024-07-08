<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width , initial-scale = 1">
    <title></title>
    <link href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('fontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('fontend/css/responsive.css')}}" rel="stylesheet">
   </head>
   <body>
    <div>
        {{-- <h2>Xin chào {{$auth->name}}</h2> --}}
        <p style="font-size: 25px ;">Bạn đã đặt hàng tại hệ thống của chúng tôi , vui lòng kiểm tra lại thông tin đơn hàng</p>
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
                  foreach ($data['body'] as $value) {
                      $image = json_decode( $value->avatar, true);
                      $tongprice = Session::get('cart')[$value->id]*$value->price;
                      $total  =  $total  + $tongprice;
                      $tongqty =  Session::get('cart')[$value->id] +  Session::get('cart')[$value->id]
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
                                      <input class="cart_quantity_input" type="text" name="quantity" value="{{Session::get('cart')[$value->id]}}" autocomplete="off" size="2">
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
                  <td colspan="4">&nbsp;</td>
                  <td colspan="2">
                      <table class="table table-condensed total-result">
                         
                          <tr>
                              <td>Exo Tax</td>
                              <td>$2</td>
                          </tr>
                          <tr class="shipping-cost">
                              <td>Shipping Cost:</td>
                              <td>Free</td>										
                          </tr>
                          <tr>
                              <td>Total</td>
                              <td><span>$<?php echo $total ?></span></td>
                          </tr>
                      </table>
                  </td>
              </tr>
          </tbody>
            </table>
   </div>
   </body>
</html>





