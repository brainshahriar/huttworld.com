@extends('frontend.frontend-master')

@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
    <!-- Booking -->
    <section class="contact py-5">
        <div class="container py-lg-5 py-sm-3">
                <h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Get In Touch with us</h2>
                <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                    <li class="col-md-4 col-sm-6 adress-w3pvt-info">
                        <div class=" adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
    
                        <h6>Location</h6>
                        <p>HU TOURS & TRAVELS
                            <br>k-9/1,Bashundhora Road,Jamuna Future Park,Dhaka,Bangladesh</p>
                    </li>
    
                    <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                        <div class="adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <h6>Phone & Email</h6>
                        <p>+8801933057219</p>
         
                        <a href="mailto:info@example.com" class="mail">support@huttworld.com</a>
                    </li>
                    <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">
    
                        <div class="adress-icon">
                            <span class="fa fa-comments-o"></span>
                        </div>
    
                        <h6>Stay In Touch</h6>
                        <ul class="social_section_1info mt-2">
                            <li class="mb-2 facebook"><a target="_blank" href="https://www.facebook.com/HU-tours-and-Travels-1533169800300705"><span class="fa fa-facebook"></span></a></li>
                            <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </li>
                </ul>
                
                <div class="contact-grids mt-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 contact-left-form">
                            <form action="#" method="post">
                                <div class=" form-group contact-forms">
                                  <input type="text" class="form-control" placeholder="Name" required="">
                                </div>
                                <div class="form-group contact-forms">
                                  <input type="email" class="form-control" placeholder="Email" required="">
                                </div>
                                <div class="form-group contact-forms">
                                  <input type="text" class="form-control" placeholder="Phone" required=""> 
                                </div>
                                <div class="form-group contact-forms">
                                  <textarea class="form-control" placeholder="Message" rows="3" required=""></textarea>
                                </div>
                                <button class="btn btn-block sent-butnn">Send</button>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 contact-right pl-lg-5">
                            <h4>Do you have any questions about us? write to us.</h4>
                            <p class="mt-md-4 mt-2">World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience.</p>
                            <h5 class="mt-lg-5 mt-3">Office Hours</h5>
                            <p class="mt-3">Sunday to Thursday : 09 am to 06 pm</p>
                            <p>Saturday : 10 am to 04 pm</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<!-- //Booking -->
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->
@endsection