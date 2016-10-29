<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> @yield('page-title') | laravel e-commerce tutorial - CodeClass.com.ng</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
  <div class="header-top">
     <div class="wrap"> 
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
        <div class="cssmenu">
           <ul>
             <li class="active"><a href="register.html">Sign up & Save</a></li> 
             <li><a href="shop.html">Store Locator</a></li> 
             <li><a href="login.html">My Account</a></li> 
             <li><a href="checkout.html">CheckOut</a></li> 
           </ul>
        </div>
        <ul class="icon2 sub-icon2 profile_img">
            <li><a class="active-icon c2" href="#"> </a>
                <ul class="sub-icon2 list">
                    <li><h3>Products</h3><a href=""></a></li>
                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                </ul>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
   </div>
<div class="header-bottom">
    <div class="wrap">
        <!-- start header menu -->
        <ul class="megamenu skyblue">
            <li><a class="color1" href="#">Home</a></li>            
            <li><a class="color7" href="#">Products</a></li>                
            <li><a class="color10" href="#">Accessories</a></li>
            <li><a class="color11" href="#">Blog</a></li>
            <li><a class="color12" href="#">Contact Us</a></li>
           </ul>
           <div class="clear"></div>
        </div>
       </div>

       
        @yield('content')

      


        <div class="footer">
          <div class="footer-top">
            <div class="wrap">
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                     <ul class="f_list">
                        <li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
                     </ul>
                   </div>
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
                     </ul>
                   </div>
                   <div class="col_1_of_footer-top span_1_of_footer-top">
                    <ul class="f_list">
                        <li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
                     </ul>
                   </div>
                  <div class="clear"></div>
             </div>
         </div>
         <div class="footer-middle">
            <div class="wrap">
                <div class="section group">
                <div class="col_1_of_middle span_1_of_middle">
                    <dl id="sample" class="dropdown">
                    <dt><a href="#"><span>Please Select a Country</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                            <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                            <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                            <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                            <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                            <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                        </ul>
                     </dd>
                    </dl>
                 </div>
                <div class="col_1_of_middle span_1_of_middle">
                    <ul class="f_list1">
                        <li><span class="m_8">Sign up for email and Get 15% off</span>
                        <div class="search">      
                            <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                            <input type="submit" value="Subscribe" id="submit" name="submit">
                            <div id="response"> </div>
                        </div><div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="wrap">
                <div class="section group">
                <div class="col_1_of_5 span_1_of_5">
                    <h3 class="m_9">Shop</h3>
                    <ul class="sub_list">
                        <li><a href="shop.html">Men's Clothing</a></li>
                            <li><a href="shop.html">Women's Clothing</a></li>
                            <li><a href="shop.html">Kids Clothing</a></li>
                            <li><a href="shop.html">Adidas NEO Clothing</a></li>
                        </ul>
                </div>
                <div class="col_1_of_5 span_1_of_5">
                    <h3 class="m_9">Sports</h3>
                    <ul class="list1">
                        <li><a href="shop.html">Basketball</a></li>
                        <li><a href="shop.html">Football</a></li>
                        <li><a href="shop.html">Football Boots</a></li>
                        <li><a href="shop.html">Predator</a></li>
                     </ul>
                </div>
                <div class="col_1_of_5 span_1_of_5">
                    <h3 class="m_9">Product Types</h3>
                    <ul class="list1">
                        <li><a href="shop.html">Shirts</a></li>
                        <li><a href="shop.html">Pants & Tights</a></li>
                        <li><a href="shop.html">Shirts</a></li>
                        <li><a href="shop.html">Jerseys</a></li>
                    </ul>
                </div>
                <div class="col_1_of_5 span_1_of_5">
                    <h3 class="m_9">Support</h3>
                    <ul class="list1">
                       <li><a href="shop.html">Store finder</a></li>
                       <li><a href="shop.html">Customer Service</a></li>
                       <li><a href="shop.html">FAQ</a></li>
                       <li><a href="shop.html">Online Shop Contact Us</a></li>                      
                    </ul>
                </div>
                <div class="col_1_of_5 span_1_of_5">
                    <h3 class="m_9">Company Info</h3>
                    <ul class="list1">
                       <li><a href="shop.html">About Us</a></li>
                       <li><a href="shop.html">Careers</a></li>
                       <li><a href="shop.html">Press</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            </div>
         </div>
         <div class="copy">
           <div class="wrap">
              <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
           </div>
         </div>
       </div>



    <!-- start menu -->     
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!-- end menu -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function(e) {
                e.preventDefault();
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function(e) {
                e.preventDefault();
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!-- top scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>