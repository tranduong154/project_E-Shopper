@extends('fontend.layout.master')
@section('content')
<section>
 
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Sportswear
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Nike </a></li>
                                        <li><a href="">Under Armour </a></li>
                                        <li><a href="">Adidas </a></li>
                                        <li><a href="">Puma</a></li>
                                        <li><a href="">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Mens
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                        <li><a href="">Armani</a></li>
                                        <li><a href="">Prada</a></li>
                                        <li><a href="">Dolce and Gabbana</a></li>
                                        <li><a href="">Chanel</a></li>
                                        <li><a href="">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Womens
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Fendi</a></li>
                                        <li><a href="">Guess</a></li>
                                        <li><a href="">Valentino</a></li>
                                        <li><a href="">Dior</a></li>
                                        <li><a href="">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Kids</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Fashion</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Households</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Interiors</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Clothing</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Bags</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Shoes</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->
                
                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->
                    
                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                             <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                             <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->
                    
                    <div class="shipping text-center"><!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <div class="single-blog-post">
                        <h3><?php echo $value['title']; ?></h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> Mac Doe</li>
                                <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                            </ul>
                            <!-- <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span> -->
                        </div>
                        <a href="">
                            <img src="{{url('upload/user/blog/'.$value['image'] )}}" alt="">
                        </a>
                        <p>
                            <?php echo $value['ghichu']; ?></p> 
                        <div class="pager-area">
                            <ul class="pager pull-right">
                                <li><a href="#">Pre</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div><!--/blog-post-area-->

                <div class="rating-area">
                    <ul class="ratings">
                        <li class="rate-this">Rate this item:</li>
                        <div class="rate">
                            <div class="vote">
                                <div class="star_1 ratings_stars"><input value="1" type="hidden"></div>
                                <div class="star_2 ratings_stars"><input value="2" type="hidden"></div>
                                <div class="star_3 ratings_stars"><input value="3" type="hidden"></div>
                                <div class="star_4 ratings_stars"><input value="4" type="hidden"></div>
                                <div class="star_5 ratings_stars"><input value="5" type="hidden"></div>
                                <span class="rate-np"><?php echo $danhgia ?>  </span>
                            </div> 
                        </div>
                      
                        <li class="color">(6 votes)</li>
                    </ul>
                    <ul class="tag">
                        <li>TAG:</li>
                        <li><a class="color" href="">Pink <span>/</span></a></li>
                        <li><a class="color" href="">T-Shirt <span>/</span></a></li>
                        <li><a class="color" href="">Girls</a></li>
                    </ul>
                </div><!--/rating-area-->

                <div class="socials-share">
                    <a href=""><img src="images/blog/socials.png" alt=""></a>
                </div><!--/socials-share-->

                <!-- <div class="media commnets">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/blog/man-one.jpg" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Annie Davis</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="blog-socials">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <a class="btn btn-primary" href="">Other Posts</a>
                        </div>
                    </div>
                </div> --><!--Comments-->
            
                <div class="response-area">
                <h2>3 RESPONSES</h2>
                <?php 
          
                foreach ($cmt as  $valuee) {
                    // dd($cmt);
                    if($valuee->level == 0){
                        ?>
                    <div class="response-area">
						<ul class="media-list">
							<li class="media">
								
								<a class="pull-left" href="#">
									<img class="media-object" src="images/blog/man-two.jpg" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i><?php echo $valuee->name; ?></li>
										<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
										<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
									</ul>
									<p><?php echo $valuee->cmt; ?></p>
                                    <a class="btn btn-primary" data-id="{{$valuee->id}}"><i class="fa fa-reply" ></i>Replay</a>
                                    <form action="/fontend/blog/cmt/{{$valuee->id}}" method="POST" enctype="multipart/form-data" style="display:none" class="reply-{{$valuee->id}}">
                                        @csrf
                                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                                        <input class="replay"  type="hidden" name="level" value="<?php echo $valuee->id; ?>">
                                        <div class="replay-box">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="text-area">
                                                        <div class="blank-arrow">
                                                            <label>Your Name</label>
                                                        </div>
                                                        <span>*</span>
                                                        <textarea id="cmt"  name="message" rows="3"></textarea>
                                                        <button type="submit" class="cmt" class="btn btn-primary">post comment</button>
                                                        {{-- <a class="btn btn-primary" href=""></a> --}}
                                                        @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/Repaly Box-->
                                    </form>			
								</div>
							</li>
                                   <?php 
                                        foreach($cmt as $valuea){
                                            if($valuee->id == $valuea->level){
                                                ?>
                                                <li class="media second-media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/blog/man-three.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <ul class="sinlge-post-meta">
                                                            <li><i class="fa fa-user"></i><?php echo  $valuea->name ?></li>
                                                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                                        </ul>
                                                        <p><?php echo  $valuea->cmt ?></p>
                                                        <a class="btn btn-primary" data-id="{{$valuee->id}}"><i class="fa fa-reply" ></i>Replay</a>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                        }
                                   ?>
							
						</ul>	
                     	
					</div><!--/Response-area-->
                    
                   <?php 
                    }
                }
              ?>
              			
                </div><!--/Response-area-->
                  
                <form action="/fontend/blog/cmt/{{$value['id']}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <div class="replay-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Leave a replay</h2>
                                
                                <div class="text-area">
                                    <div class="blank-arrow">
                                        <label>Your Name</label>
                                    </div>
                                    <span>*</span>
                                    <textarea id="cmt"  name="message" rows="11"></textarea>
                                    <button type="submit" class="cmt" class="btn btn-primary">post comment</button>
                                    {{-- <a class="btn btn-primary" href=""></a> --}}
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!--/Repaly Box-->
                </form>
               
                            {{-- @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                         @endif --}}
              
            </div>	
        </div>
    </div>
    <?php 
        $id = $value['id'];
        // echo $userr['name'];
        // dd($binhluan);
    ?>
    <script>
        $(document).ready(function(){
            
            $.ajaxSetup({
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //vote
            $('.ratings_stars').hover(
                // Handles the mouseover
                function() {
                    $(this).prevAll().andSelf().addClass('ratings_hover');
                    // $(this).nextAll().removeClass('ratings_vote'); 
                },
                function() {
                    $(this).prevAll().andSelf().removeClass('ratings_hover');
                    // set_votes($(this).parent());
                }
            );
            $('.btn-primary').click(function(){
                var id = $(this).data('id');
                // alert(id);
                var form_replay = '.reply-'+ id;
                $(form_replay).slideDown();

                var checkLogin = "{{Auth::Check()}}";
                if(checkLogin){
                    var Values =  $(this).find("input").val();
                    $.ajax({
                        type:'POST',
                        url:'{{url("/fontend/blog/cmt/{$id}")}}', 
                        data:{
                            cmt:Values,
                            },
                        success:function(data){
                            console.log(data.success);
                        }
                    });
                }else{
                    alert("Vui long logi de cmt");
                }
            });
            $('.cmt').click(function(){
                var id = $(this).data('id');
                // alert(id);
                var form_replay = '.reply-'+ id;
                $(form_replay).slideDown();

                var checkLogin = "{{Auth::Check()}}";
                if(checkLogin){
                    var Values =  $(this).find("input").val();
                    $.ajax({
                        type:'POST',
                        url:'{{url("/fontend/blog/repcmt/{$id}")}}', 
                        data:{
                            lv:id,
                            cmt:Values,
                            },
                        success:function(data){
                            console.log(data.success);
                        }
                    });
                }else{
                    alert("Vui long logi de cmt");
                }
            });
      
            $('.cmt').click(function(){
                var comment = $('#cmt').val();
                console.log(comment);
                var checkLogin = "{{Auth::Check()}}";
                if(checkLogin){
                    var Values =  $(this).find("input").val();
                    $.ajax({
                        type:'POST',
                        url:'{{url("/fontend/blog/cmt/{$id}")}}', 
                        data:{
                            cmt:Values,
                            },
                        success:function(data){
                            console.log(data.success);
                        }
                    });
                }else{
                    alert("Vui long logi de comment");
                }
            });
            $('.ratings_stars').click(function(){
                var checkLogin = "{{Auth::Check()}}";
                var id_blog ="{{ $value['id'] }}";  
                var id_user = "{{Auth::id()}}";
                // alert(checkLogin);   
                // alert( id_blog);
                // alert( id_user);
                if(checkLogin){
                    var Values =  $(this).find("input").val();
                    
                    if ($(this).hasClass('ratings_over')) {
                        $('.ratings_stars').removeClass('ratings_over');
                        $(this).prevAll().andSelf().addClass('ratings_over');
                    } else {
                        $(this).prevAll().andSelf().addClass('ratings_over');
                    }       
                    $.ajax({
                        type:'POST',
                        url:'{{url("/fontend/blog/rate")}}', 
                        data:{
                            rate:Values,
                            id_blog:id_blog,
                            id_user:id_user
                            },
                        success:function(data){
                            console.log(data.success);
                        }
                    });
                }else{
                    alert("Vui long logi de rate");
                }
            });
        });
    </script>
</section>


@endsection
