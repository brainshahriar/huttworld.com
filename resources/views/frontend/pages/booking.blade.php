@extends('frontend.frontend-master')

@section('content')
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
    <!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">

		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Book Your Tour</h2>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
              
					<section class="row">
                
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" id="name" placeholder="Name" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="email" class="form-control" id="email" placeholder="Email" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" id="phone" placeholder="Phone" required=""> 
						</div>

						<div class="col-sm-6 form-group contact-forms">
						  <input type="date" class="form-control" id="date" placeholder="Date" required=""> 
						</div>
					    <div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="adult">
								<option>Adults</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5+">5 or more</option>
							</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="kids">
								<option>Kids</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5+">5 or more</option>
							</select>
						</div> 
           <div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="location">
								<option>Choose Location</option>
                @foreach ($package as $item)
                    <option value="{{ $item->id }}">{{ $item->place }}</option>
                @endforeach
							</select>
						</div>
						<div class="col-md-12 form-group contact-forms">
						  <textarea class="form-control" id="message" placeholder="Message" rows="3" ></textarea>
						</div>
						<div class="col-md-12 booking-button">
							<button name="submit" type="submit" onclick="addData()"  class="btn btn-block sent-butnn">Book Now</button>
						</div>
					</section>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="images/banner1.jpg" alt="" class="img-fluid" />
						<p><span class="fa fa-tags"></span> <span>20$ - 15% off</span></p>
					</div>
					
					<h4>Tour Description</h4>
					<p class="mt-3">Duis nisi sapien, elementum finibus ferme ntum ed eget, aliquet et leo. Mauris hendrerit vel ex.
					vitae luctus massa. Phas ellus sed aliquam leo et dolor. Vestibulum ullamcorper massa eut sed fringilla.</p>
					
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $.ajaxSetup({
      'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
  })
  //product view modal
  function clearData()
  {
    var name=$('#name').val('');
    var email=$('#email').val('');
    var phone=$('#phone').val('');
    var date=$('#date').val('');
    var adult=$('#adult').val('');
    var kids=$('#kids').val('');
    var message=$('#message').val('');
    var location=$('#location').val('');
  }
  function addData()
  {

    var name=$('#name').val();
    var email=$('#email').val();
    var phone=$('#phone').val();
    var date=$('#date').val();
    var adult=$('#adult').val();
    var kids=$('#kids').val();
    var message=$('#message').val();
    var location=$('#location').val();
    $.ajax({
      type:"POST",
      dataType:"json",
      data:{name:name,email:email,phone:phone,date:date,adult:adult,kids:kids,message:message,location:location},
      url:"{{ url('/booking/store') }}",
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      success:function(data)
      {
        clearData();
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Successfully Booking Sent',
            showConfirmButton: false,
            timer: 1500
            })
             console.log('successfully data added');
      }
    })
  }
  //add to cart
</script>

@endsection