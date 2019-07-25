@extends('layout.layout')

@section('title', 'Contact')

@section('page', 'Contact')
@section('content')

	<section id="contactUs">
		<h2 class="hide">Contact Us</h2>

		<div class="content">
			<div id="contactInfo">
				<p class="subTitle">Contact Us</p>

				<div class="infoBlock">
					<p class="smallTitle">PHONE</p>
					<p class="copy"><span>+1 (519) 452 4430</span> Ext 6409</p>
				</div>

				<div class="infoBlock">
					<p class="smallTitle">ADDRESS</p>
					<p class="copy">Fanshawe College London Downtown Campus</p>
					<p>Howard W. Rundle Building,</p>
					<p>137 Dundas Street</p>
					<p>London, ON N6A 1E9</p>
					<p>CANADA</p>
				</div>

				<div class="infoBlock">
					<p class="smallTitle">EMAIL</p>
					<p class="copy">jobs@reactr.ca</p>
					<p class="copy">hire@reactr.ca</p>
					<p class="copy"><span>info@reactr.ca</span></p>
				</div>
			</div>

			<div id="contactForm">

				@if (session('status'))
				<div class="status-success">
					{{ session('status') }}
				</div>
				@endif

	      @if ($errors->any())
				<div class="errors">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<div id="formBlurb">
					<p class="subTitle">get in touch</p>
					<p class="copy">Fill out this form to get more information about working with Reactr.</p>
				</div>

				{{Form::open(['url'=>'/homeSubmit'])}}
					{{ csrf_field() }}
					<input name="name" id="name" type="text" placeholder="Full Name" required>
					<input name="email" id="email" type="email" placeholder="Email" required>

					<select name="interest" id="interest">
						<option value="contact us">Contact Reactr</option>
						<option value="hire us">Work with Us</option>
						<option value="other">Other</option>
					</select>

					<textarea name="body" id="message" placeholder="Message..." required></textarea>
					<input type="submit" id="submit" class="button">
					<!-- <button id="submit" class="button">submit</button> -->

				{{Form::close()}}

			</div>
		</div>
	</section>


@endsection