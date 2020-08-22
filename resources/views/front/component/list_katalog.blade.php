<div class="container mt-1 py-5">
	<h1 class="text-custom-tertiary text-center">Katalog</h1>
	<hr class="mb-5">
	<div class="row">
		<div class="col-4">
		<div class="list-group shadow" id="list-tab" role="tablist">
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Gerobak</a>
			<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Partisi</a>
			<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Stand</a>
			<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Kontainer</a>
		</div>
		</div>
		<div class="col-8">
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
					<div class="card shadow">
						<img src="{{asset('assets/images/katalog/1.jpg')}}" class="card-img-top">
						<div class="card-body text-center">
							<h4 class="card-title text-custom-secondary">Gerobak</h4>
							<p class="card-text text-custom-tertiary">Gerobak merupakan Both yang multi fungsi untuk kebutuhan blablabla.</p>
							<a href="{{url('katalog/produk')}}"><button class="btn bg-custom-tertiary p-2 rounded-pill text-white"><span class="h6">Lihat Produk</span></button></a>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
					Kosong
				</div>
				<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
					Kosong
				</div>
				<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
					Kosong
				</div>
			</div>
		</div>
	</div>
</div>
