@extends('frontend.frontend-master')

@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
    <!-- Booking -->
<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			
			@foreach ($package as $item)

			<div class="col-lg-3 col-sm-6">
						<a href="{{ url('booking/') }}">
				<div class="image-tour position-relative" >
					<img src="{{ $item->image }}" alt=""  class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>{{ $item->price }} BDT</span></p>
				</div>
			</a>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span>{{ $item->location }}</h6>
					<h5 class="my-2">{{ $item->place }}</h5>
					<p class="">{{ $item->title }}</p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>{{ $item->duration }} Days</span></li>
					</ul>
				</div>
			</div>
							
			@endforeach
		</div>
	</div>
</section>
<!-- tour packages -->
<!-- //Booking -->
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->
@endsection