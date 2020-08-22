@extends('front.layout.app')

@section('content')
	<section class="bg-custom-primary vh-100 pt-5 divider-top">
		@include('front.component.branding')
	</section>
	<section class="bg-custom-secondary pt-5 divider-top-primary">
		@include('front.component.about')
	</section>
	<div class="bg-dark pt-5 pb-3 divider-top-secondary" id="keunggulan">
		<div class="container">
			<div class="row">
				<section class="col-md-6 align-self-center">
					@include('front.component.reason')
				</section>
				<section class="col-md-6">
					@include('front.component.excellence')
				</section>
			</div>
		</div>
	</div>
	<section class="bg-light p-5 divider-top-dark" id="pemesanan">
		@include('front.component.order')
	</section>
	<section class="bg-custom-tertiary p-1 fixed-bottom">
		@include('front.component.social')
	</section>
@endsection