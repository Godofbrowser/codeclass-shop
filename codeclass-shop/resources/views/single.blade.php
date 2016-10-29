@extends('layouts.master')
@section('page-title', 'Products')
@section('content')
<div class="login">
  <div class="wrap">

            <div class="rsidebar span_1_of_left">
                   <section class="sky-form">
                      <h4>Category</h4>
                        <div style="overflow: hidden; padding: 0px; width: 273px;" class="row row1 scroll-pane">
                            
                        <div style="width: 273px; height: 200px;" class="jspContainer"><div style="padding: 20px; top: 0px; left: 0px; width: 233px;" class="jspPane"><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>Flats (70)</label>
                            </div><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Athletic Shoes (48)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Athletic Shoes (48)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Heels (38)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Other (1)</label>
                            </div></div></div></div>
                </section>
                <section class="sky-form">
                    <h4>Brand</h4>
                    <div style="padding: 20px; top: 0px; left: 0px; width: 233px;" >
                                <label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>Adidas by Stella McCartney</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Asics</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Bloch</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Bloch Kids</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Capezio</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Capezio Kids</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Nike</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Zumba</label>
                    </div>
               </section>

               <section class="sky-form">
                    <h4>Price</h4>
                        <div style="overflow: hidden; padding: 0px; width: 273px;" class="row row1 scroll-pane">
                            
                            
                        <div style="width: 273px; height: 200px;" class="jspContainer"><div style="padding: 20px; top: 0px; left: 0px; width: 233px;" class="jspPane"><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>$50.00 and Under (30)</label>
                            </div><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>$100.00 and Under (30)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>$200.00 and Under (30)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>$300.00 and Under (30)</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>$400.00 and Under (30)</label>
                            </div></div></div></div>
               </section>
               <section class="sky-form">
                    <h4>Colors</h4>
                        <div style="overflow: hidden; padding: 0px; width: 273px;" class="row row1 scroll-pane">
                            
                            
                        <div style="width: 273px; height: 200px;" class="jspContainer"><div style="padding: 20px; top: 0px; left: 0px; width: 233px;" class="jspPane"><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" checked="" type="checkbox"><i></i>Red</label>
                            </div><div class="col col-4">
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Green</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Black</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Yellow</label>
                                <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Orange</label>
                            </div></div></div></div>
               </section>
        </div>




<div class="cont span_2_of_3">
        <div class="labout span_1_of_a1">
        <!-- start product_slider -->
             <ul id="etalage">
              <li>
                <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="images/t1.jpg" />
                  <img class="etalage_source_image" src="images/t2.jpg" />
                </a>
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t2.jpg" />
                <img class="etalage_source_image" src="images/t2.jpg" />
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t3.jpg" />
                <img class="etalage_source_image" src="images/t3.jpg" />
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t4.jpg" />
                <img class="etalage_source_image" src="images/t4.jpg" />
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t5.jpg" />
                <img class="etalage_source_image" src="images/t5.jpg" />
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t6.jpg" />
                <img class="etalage_source_image" src="images/t6.jpg" />
              </li>
              <li>
                <img class="etalage_thumb_image" src="images/t1.jpg" />
                <img class="etalage_source_image" src="images/t1.jpg" />
              </li>
            </ul>
          
          
      <!-- end product_slider -->
      </div>
      <div class="cont1 span_2_of_a1">
        <h3 class="m_3">Lorem ipsum dolor sit amet</h3>
        
        <div class="price_single">
                <span class="reducedfrom">$66.00</span>
                <span class="actual">$12.00</span><a href="#">click for offer</a>
              </div>
        <ul class="options">
          <h4 class="m_9">Select a Size</h4>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <div class="clear"></div>
        </ul>
        <div class="btn_form">
           <form>
           <input type="submit" value="buy now" title="">
          </form>
        </div>
        <ul class="add-to-links">
             <li><img src="images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
          </ul>
          <p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          
                <div class="social_single"> 
           <ul> 
            <li class="fb"><a href="#"><span> </span></a></li>
            <li class="tw"><a href="#"><span> </span></a></li>
            <li class="g_plus"><a href="#"><span> </span></a></li>
            <li class="rss"><a href="#"><span> </span></a></li>   
           </ul>
          </div>
      </div>
      <div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
      <li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
      <li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
      <li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
      <li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
      <li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
     </ul>

     <!---- details-product-slider  -->
        <!-- Include the Etalage files -->
          <link rel="stylesheet" href="css/etalage.css">
          <script src="js/jquery.etalage.min.js"></script>
        <!-- Include the Etalage files -->
        <script>
            jQuery(document).ready(function($){
      
              $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                  alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
              });
              // This is for the dropdown list example:
              $('.dropdownlist').change(function(){
                etalage_show( $(this).find('option:selected').attr('class') );
              });

          });
        </script>
        <!-- - -//details-product-slider- -->
      <script type="text/javascript">
     $(window).load(function() {
      $("#flexiselDemo1").flexisel();
      $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 3
            }
          }
        });
    
      $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
            portrait: { 
              changePoint:480,
              visibleItems: 1
            }, 
            landscape: { 
              changePoint:640,
              visibleItems: 2
            },
            tablet: { 
              changePoint:768,
              visibleItems: 3
            }
          }
        });
        
    });
  </script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
   <div class="toogle">
      <h3 class="m_3">Product Details</h3>
      <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>         
   <div class="toogle">
      <h3 class="m_3">Product Reviews</h3>
      <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     </div>
     <div class="clear"></div>
  </div>
</div>
@endsection
        