@include('layouts.header')

<div class="container">

    <div class="bg-faded p-4 my-4">

   	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
		    @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
               @endif
			<div class="contact100-form-title" style="background-image: url({{ asset('/') }}public/img/bg-01.jpg);">
				<span class="contact100-form-title-1">
					CONTACT US
				</span>

				<span class="contact100-form-title-2">
					FEEL FREE TO DROP US A LINE BELOW.
				</span>
			</div>

			<form method="post" class="contact100-form validate-form" action="{{route('send')}}">
			    {{ csrf_field() }}
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">FULL NAME:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">EMAIL:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">PHONE:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">MESSAGE:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							SUBMIT
							<i class="fa fa-paper-plane m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
</div>
</div>

@include('layouts.footer')