<div class="pt-20 pb-14 p-4">
	<div>
		<div class="max-w-5xl mx-auto relative">
			<div class="owl-carousel owl-theme">
				@foreach (\File::files(public_path('images/gallery')) as $image)
					<div class="item">
						<a href="{{ asset('images/gallery/' . $image->getFilename()) }}" data-lightbox="gallery">
							<img src="{{ asset('images/gallery/' . $image->getFilename()) }}" alt="Instituciones" class="rounded-2xl zoom-click">
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>