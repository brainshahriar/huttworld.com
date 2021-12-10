@extends('frontend.frontend-master')

@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
    <!-- Booking -->
    <section class="about py-5">
        <div class="container py-lg-5 py-sm-4">
            <div class="row">
                <div class="col-lg-6 about-left">
                    <h3 class="mt-lg-3">We will take you to the Top destination in the world, <strong>Explore with us!</strong></h3>
                    <p class="mt-4">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo et. Mauris hendrerit vel ex.
                    Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu fringilla. Integer ultrices finibus sed nisi.
                    in convallis felis dapibus sit amet.</p>
                    <p class="mt-3"> Donec a arcu et sapien hendrerit accumsan. Pellentesque sit amet eros iac, elementum 
                    urna ipsum accumsan, iaculis ligula. Aenean quam eget maximus in convallis felis dapibus sit amet.</p>
                </div>
                <div class="col-lg-6 about-right text-lg-right mt-lg-0 mt-5">
                    <img src="images/about.jpg" alt="" class="img-fluid abt-image" />
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-lg-3 col-6">
                    <div class="counter">
                        <span class="fa fa-smile-o"></span>
                        <div class="timer count-title count-number">1000+</div>
                        <p class="count-text text-uppercase">happy customers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter">
                        <span class="fa fa-ship"></span>
                        <div class="timer count-title count-number">2271</div>
                        <p class="count-text text-uppercase">Tours & Travels </p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-users"></span>
                        <div class="timer count-title count-number">200</div>
                        <p class="count-text text-uppercase">destinations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-5">
                    <div class="counter">
                        <span class="fa fa-gift"></span>
                        <div class="timer count-title count-number">20+<span>years</span></div>
                        <p class="count-text text-uppercase">experience</p>
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