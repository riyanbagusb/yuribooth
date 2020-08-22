<div class="container">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('assets/images/carousel/1.jpg') }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block bg-custom-secondary-50 rounded-pill">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block bg-custom-secondary-50 rounded-pill">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/images/carousel/3.jpg') }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block bg-custom-secondary-50 rounded-pill">
					<h5 class="">First slide label</h5>
					<p class="text-custom-primary">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>