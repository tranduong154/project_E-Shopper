<!DOCTYPE html>
<html>
  <head>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta content="" name="copyright">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="ja" http-equiv="Content-Language">
    <meta content="text/css" http-equiv="Content-Style-Type">
    <meta content="text/javascript" http-equiv="Content-Script-Type">
    <meta id="viewport" name="viewport" content="" />
    <script>
        if(screen.width <= 736){
            document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
        }
    </script>
    <title>Ohana</title>
    <link type="text/css" rel="stylesheet" href="css/rate.css">
   
  </head>
  <body>
       <body>
        <!-- begin header --> 
       

                    
    <div class="rate">
        <div class="vote">
            <div class="star_1 ratings_stars"><input value="1" type="hidden"></div>
            <div class="star_2 ratings_stars"><input value="2" type="hidden"></div>
            <div class="star_3 ratings_stars"><input value="3" type="hidden"></div>
            <div class="star_4 ratings_stars"><input value="4" type="hidden"></div>
            <div class="star_5 ratings_stars"><input value="5" type="hidden"></div>
            <span class="rate-np">4.5</span>
        </div> 
    </div>
                           
            <script src="js/jquery-1.9.1.min.js"></script>
    <script>


        // - controller detail:
        //     + lay all rate cua blog nay ra
        //     + tinh tbc va làm tron (round php)
        //     + truyen diem nay qua view va hien thi ra (4 => hien thi 4 ngoi sao)
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

            $('.ratings_stars').click(function(){

                // // goi php vao 
                // var checkLogin = "{{Auth::Check()}}";
                // alert()


                // if(checkLogin){
                    // var rate =  $(this).find("input").val();
                    // alert(rate);
                    if ($(this).hasClass('ratings_over')) {
                        $('.ratings_stars').removeClass('ratings_over');
                        $(this).prevAll().andSelf().addClass('ratings_over');
                    } else {
                        $(this).prevAll().andSelf().addClass('ratings_over');
                    }

                    // phan tich xem rate co gi? de tao table co đung?
                    // id, rate, id_blog, id_user
                    // dung ajax gui qua controller va insert table rate
                    //  $.ajax({
                    //    type:'POST',
                    //    url:'{{url("/blog/rate/ajax")}}', 
                    //    data:{
                    //     rate:rate,
                    //     id_blog:...
                    //     },
                    //    success:function(data){
                    //       console.log(data.success);
                    //    }
                    // });


                // }else{
                //     alert("vui long logi de rate");
                // }
                
            });
        });
    </script>         
 </body>
</html>