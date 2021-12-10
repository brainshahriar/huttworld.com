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
                        <p>The company name
                            <br>Addison Township, IL, USA. </p>
                    </li>
    
                    <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                        <div class="adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <h6>Phone & Email</h6>
                        <p>+(122) 123 456 7890</p>
                        <a href="mailto:info@example.com" class="mail">info@examplemail.com</a>
                    </li>
                    <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">
    
                        <div class="adress-icon">
                            <span class="fa fa-comments-o"></span>
                        </div>
    
                        <h6>Stay In Touch</h6>
                        <ul class="social_section_1info mt-2">
                            <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
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
                            <p class="mt-md-4 mt-2">Duis nisi sapien, elementum finibus fermentum eget, aliquet et leo. Mauris hendrerit vel ex.
                            Quisque vitae luctus massa. Phas ellus sed aliquam leo. Vestibulum ullamcorper massa eut sed fringilla. Integer ultrices finibus sed nisi.
                            in convallis felis da bus sit amet  aliquet et leo dolor sit amet aliquet.</p>
                            <h5 class="mt-lg-5 mt-3">Office Hours</h5>
                            <p class="mt-3">Monday to Friday : 09 am to 06 pm</p>
                            <p>Saturday and Sunay : 10 am to 04 pm</p>
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