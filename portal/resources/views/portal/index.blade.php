<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To yalla</title>
<Link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="slider/slider.css" type="text/css">
<script src="slider/jquery.min.js"></script>
<script src="slider/jquery.flexslider-min.js"></script>
<link href="normalize.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
    	<div class="header">
    	<div class="logo">
        	<a href="#"><img src="images/logo.png" /></a>
        </div>
        <div id="nav">
        
        	<ul>
            	<li><a class="js-open-modal btn" href="#" data-modal-id="popup1"><span><img src="images/list.png" /></span>Free Listing</a></li>
                <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="js-open-modal btn" href="#" data-modal-id="popup2"><span><img src="images/log.png" /></span>Log In</a></li>
                        <li><a class="js-open-modal btn" href="#" data-modal-id="popup3"><span><img src="images/up.png" /></span>Sign Up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

            	
            </ul>
        </div>
		<div id="popup1" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Free Listing</h3>
  </header>
  <div class="modal-body">
    <div class="contact-lis">
          
        	 <form>
                	
                	
                     <h3>Enter your details below</h3>
                	<p><label>Company Name*</label> <input type="text"  /></p>
                	<p><label>Contact Person</label> <input type="text"  /></p>
                	<p><label>City*</label> <input type="text"  /></p>
                    <p><label>Pin Code*</label> <input type="text"  /></p>
                    <p><label>Email ID*</label> <input type="text"  /></p>
                    <p><label>Landline No*</label> <input type="text"  /></p>
                    <p>&nbsp;</p>
                    <p align="center">Or</p>
                    <p><label>Mobile Number*</label> <input type="text"  /></p>
                    <h2>*Denotes Mandatory Fields</h2>
                   <p><label>&nbsp;</label><input type="submit" value="Submit" class="contact-sub" /></p>
                  </form>
              
               </div>


  </div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
<div id="popup2" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Log In</h3>
  </header>
  <div class="modal-body">
    <div class="contact">
        			<h4><a href="#"><img src="images/login.png" /></a></h4>
        	 <form>
                	
                	<p> <input type="text" placeholder="Your Email" /></p>
                	<p> <input type="text" placeholder="Password" /></p>
              </form>
              <h1>Forgot your Password?</h1>
              <h2><img src="images/tik.png" />Remember?</h2>
               <input type="submit" value="Login" />
               <img src="images/line.png" />
               <h1>Not a registered user yet? <a href="#">Login now!</a></h1>
               
        </div>           
		</div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
<div id="popup3" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Sign Up</h3>
  </header>
  <div class="modal-body">
    <div class="contact">
        			<h4><a href="#"><img src="images/login.png" /></a></h4>
        	 <form>
                	
                	<p> <input type="text" placeholder="First Name" class="contact-half" /> <input type="text" placeholder="Last Name" class="contact-half" style=" margin:0 0 0 2px;" /></p>
                	<p> <input type="text" placeholder="Your Email" /></p>
                	<p> <input type="text" placeholder="Re-enter Your Email" /></p>
                	<p> <input type="text" placeholder="Password" /></p>
               <input type="submit" value="Sign UP" class="contact-sub" />
              </form>
               <h5>or Choose on the following login methods</h5>
               <div class="social-log">
               <a href="#"><img src="images/facebook.png" /></a>
               <a href="#"><img src="images/twitter.png" /></a>
               <a href="#"><img src="images/google+.png" /></a>
               </div>

  </div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
        <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="search">
        	<div class="loc">
            	<img src="images/loc.png" /> Dammam
            </div>
        	<input type="text" placeholder="Search for anything" />
            <input type="submit" value="Search" />
        
        </div>
        <div id="pre">
    	<div class="flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="images/pre.png" /></li>
                    <li><img src="images/pre1.png" /></li>
                    <li><img src="images/pre2.png" /></li>
                    <li><img src="images/pre3.png" /></li>
                </ul>
            </div>
        </div>
        
        <script>
        $(document).ready(function () {
            $('.flexslider').flexslider({
                animation: 'slide',
				autoplay:'true',
                controlsContainer: '.flexslider'
            });
        });
        </script>
        </div>
        <div class="col1">
            <div id="ser">
                <img src="images/hotel.png" />
                <a href="fullcat.html">Hotel</a>
            </div>
            <div class="clear"></div>
            <div class="empty"></div>
            <div id="ser">
                <img src="images/travel.png" />
                <a href="fullcat.html">Travel</a>
            </div>
        </div>
        <div id="empty"></div>
        <div class="col1">
            <div class="ser">
                <img src="images/res.png" />
                <a href="fullcat.html">Restaurants</a>
            </div>
            
        </div>
        <div id="empty"></div>
        <div class="col">
            <div class="ser">
                <img src="images/pack.png" />
                <a href="fullcat.html">Packers And Movers</a>
            </div>
            <div class="clear"></div>
        </div>
        <div id="empty"></div>
        <div class="clear"></div>
        <div class="col1">
            <div id="serr">
                <img src="images/bus.png" />
                <a href="fullcat.html">Bus</a>
            </div>
            <div id="serr">
                <img src="images/flight.png" />
                <a href="fullcat.html">Flight</a>
            </div>
            <div class="empty">&nbsp;</div>
            <div class="clear"></div>
            <div id="serr">
                <img src="images/movie.png" />
                <a href="fullcat.html">Movie </a>
            </div>
            <div id="serr">
                <img src="images/enter.png" />
                <a href="fullcat.html">Entertainment</a>
            </div>
        </div>
        <div id="empty"></div>
        <div class="col1">
            <div class="ser">
                <img src="images/cab.png" />
                <a href="fullcat.html">Cab And Car Rental</a>
            </div>
            
        </div>
        <div id="empty"></div>
        <div class="col">
            <div class="ser">
                <img src="images/shop.png" />
                <a href="fullcat.html">Shop</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col1">
            <div id="ser">
                <img src="images/med.png" />
                <a href="fullcat.html">Medical</a>
            </div>
            <div class="clear"></div>
            <div class="empty"></div>
            <div id="ser">
                <img src="images/doc.png" />
                <a href="fullcat.html">Doctor</a>
            </div>
        </div>
        <div class="col1">
            <div id="ser">
                <img src="images/hos.png" />
                <a href="fullcat.html">Hospital</a>
            </div>
            <div class="clear"></div>
            <div class="empty"></div>
            <div id="ser">
                <img src="images/lab.png" />
                <a href="fullcat.html">Lab</a>
            </div>
        </div>
        <div class="col1">
            <div id="serr">
                <img src="images/groc.png" />
                <a href="fullcat.html">Grocery</a>
            </div>
            <div id="serr">
                <img src="images/flow.png" />
                <a href="fullcat.html">Flowers</a>
            </div>
            <div class="empty">&nbsp;</div>
            <div class="clear"></div>
            <div id="serr">
                <img src="images/auto.png" />
                <a href="fullcat.html">Auto Care </a>
            </div>
            <div id="serr">
                <img src="images/cour.png" />
                <a href="fullcat.html">Courier </a>
            </div>
        </div>
        <div class="col1">
            <div id="serr">
                <img src="images/chem.png" />
                <a href="fullcat.html">Chemist</a>
            </div>
            <div id="serr">
                <img src="images/home.png" />
                <a href="fullcat.html">Home Decor</a>
            </div>
            <div class="empty">&nbsp;</div>
            <div class="clear"></div>
            <div id="serr">
                <img src="images/autom.png" />
                <a href="fullcat.html">Automobile </a>
            </div>
            <div id="serr">
                <img src="images/mobiles.png" />
                <a href="fullcat.html">Mobile </a>
            </div>
        </div>
        <div id="empty"></div>
        <div class="col1">
            <div class="ser">
                <img src="images/book.png" />
                <a href="fullcat.html">Books</a>
            </div>
            
        </div>
        <div id="empty"></div>
        <div class="col">
            <div class="ser">
                <img src="images/baby.png" />
                <a href="fullcat.html">Baby Care</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col1">
            <div id="ser">
                <img src="images/education.png" />
                <a href="fullcat.html">Education</a>
            </div>
            <div class="clear"></div>
            <div class="empty"></div>
            <div id="ser">
                <img src="images/dance.png" />
                <a href="fullcat.html">Dance</a>
            </div>
        </div>
        <div class="col1">
            <div id="ser">
                <img src="images/bride.png" />
                <a href="fullcat.html">Bridegroom Requisites</a>
            </div>
            <div class="clear"></div>
            <div class="empty"></div>
            <div id="ser">
                <img src="images/civil.png" />
                <a href="fullcat.html">Civil Contractors</a>
            </div>
        </div>
        <div class="col1">
            <div id="serr">
                <img src="images/gym.png" />
                <a href="fullcat.html">Gym , Fitness</a>
            </div>
            <div id="serr">
                <img src="images/pet.png" />
                <a href="fullcat.html">Pet Care</a>
            </div>
            <div class="empty">&nbsp;</div>
            <div class="clear"></div>
            <div id="serr">
                <img src="images/catr.png" />
                <a href="fullcat.html">Caterers </a>
            </div>
            <div id="serr">
                <img src="images/bridal.png" />
                <a href="fullcat.html">Bridal Requisites </a>
            </div>
        </div>
        <div class="clear"></div>
        <div id="white">
            <div class="app">
                <a href="#"><img src="images/google.png" /></a>
                <a href="#"><img src="images/app.png" /></a>
                <a href="#"><img src="images/win.png" /></a>
                <a href="#"><img src="images/bb.png" /></a>
            </div>
            <div class="social">
            	<a href="#"><img src="images/fb.png" /></a>
            	<a href="#"><img src="images/tw.png" /></a>
            	<a href="#"><img src="images/g.png" /></a>
            	<a href="#"><img src="images/b.png" /></a>
            	<a href="#"><img src="images/yt.png" /></a>
            </div>
            <div class="ft-nav">
            	<li><a href="#"> We're hiring</a> | </li>     
                <li><a href="#">Customer care</a> | </li>     
                <li><a href="#">Free Listing</a> | </li>     
                <li><a href="#">Advertise</a> | </li>     
                <li><a href="#">About us</a> | </li>     
                <li><a href="#">Media </a> | </li>     
                <li><a href="#">Testimonials</a> | </li>     
                <li><a href="#">Feedback</a>
            </div>
            <div id="ft-nav">
            	<li><a href="#">Shop Online </a> | </li> 
                <li><a href="#">Restaurants </a> | </li> 
                <li><a href="#">Movies </a> | </li> 
                <li><a href="#">Entertainment </a> | </li> 
                <li><a href="#">Deals </a> | </li> 
                <li><a href="#">Offers </a> | </li> 
                <li><a href="#">Travel </a> | </li> 
                <li><a href="#">Flights </a> | </li> 
                <li><a href="#">Bus / Hotel </a> | </li> 
                <li><a href="#">Cab & Car Rental </a> | </li> 
                <li><a href="#">Medical </a> | </li> 
                <li><a href="#">Doctor </a> | </li> 
                <li><a href="#">Hospitals </a> | </li>
				<li><a href="#">Chemists </a> | </li> 
                <li><a href="#">Labs </a> | </li> 
                <li><a href="#">Daily Needs </a> | </li> 
                <li><a href="#">Flowers </a> | </li> 
                <li><a href="#">Bills & Recharge </a> | </li> 
                <li><a href="#">On Demand Services </a> | </li> 
                <li><a href="#">Repairs </a> | </li> 
                <li><a href="#">Personal Care </a> | </li> 
                <li><a href="#">Home Decor </a> | </li> 
                <li><a href="#">Auto Care </a> | </li> 
                <li><a href="#">Pet & Pet Care</a> | </li>
                <li><a href="#">Courier </a> | </li> 
                <li><a href="#">B2b </a> | </li> 
                <li><a href="#">Automobile </a> | </li> 
                <li><a href="#">Baby Care </a> | </li> 
                <li><a href="#">Books </a> | </li> 
                <li><a href="#">Banquets </a> | </li> 
                <li><a href="#">Bridal Requisites </a> | </li> 
                <li><a href="#">Bridegroom Requisites </a> | </li> 
                <li><a href="#">Caterer </a> | </li> 
                <li><a href="#">Civil Contractors </a> | </li> 
                <li><a href="#">Dance & Music Education </a> | </li> 
                <li><a href="#">Emergency </a> | </li> 
                <li><a href="#">Event Organizers </a> | </li> 
                <li><a href="#">Fitness </a> | </li> 
                <li><a href="#">Home Improvements </a> | </li> 
                <li><a href="#">Anything on Hire </a> | </li> 
                <li><a href="#">Industrial Products </a> | </li> 
                <li><a href="#">House Keeping </a> | </li> 
                <li><a href="#">Interior Designers</a> | </li>
                <li><a href="#">Insurance </a> | </li> 
                <li><a href="#">Internet</a> | </li> 
                <li><a href="#">Jewellery</a> | </li> 
                <li><a href="#">Modular Kitchen</a> | </li> 
                <li><a href="#">Loan / Language Classes</a> | </li> 
                <li><a href="#">Packers & Movers</a> | </li> 
                <li><a href="#">Party</a> | </li> 
                <li><a href="#">Pest Control</a> | </li> 
                <li><a href="#">Play Schools</a> | </li> 
                <li><a href="#">Real Estate</a> | </li> 
                <li><a href="#">Security Services / Shopping</a> | </li> 
                <li><a href="#">Sports Coach</a> | </li> 
                <li><a href="#">Sports Goods</a> | </li> 
                <li><a href="#">Training Institute</a> | </li> 
                <li><a href="#">Transporters</a> | </li> 
                <li><a href="#">Wedding</a> </li> 
            </div>
            <div class="clear"></div>
            <div id="city">
            	<li><a href="#">Dammam</a> | </li> 
                <li><a href="#">Jubail</a> | </li> 
                <li><a href="#">Al Hassa</a> | </li> 
                <li><a href="#">Al Khobar</a> | 
                <li><a href="#">Al Tuqba</a> </li> 
            </div>
            <div class="clear"></div>
            
        </div>
        <div id="copy">
        	<div class="copy">
            	Copyrights 2015. All Rights Reserved.   <a href="#">Privacy</a> | <a href="#">Terms</a> | <a href="#">Infringement</a> | <a href="#">Mobile</a> | <a href="#">Classic</a>
            </div>
            <div class="ft-logo">
            	<a href="#"><img src="images/ft_logo.png" /></a>
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    <script src="jquery-1.11.1.min.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
</body>
</html>
