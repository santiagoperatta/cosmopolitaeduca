<div class="mb-8 py-20 p-4">
    <div class="py-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-5">
                @foreach (\File::files(public_path('images/logos')) as $image)
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/logos/' . $image->getFilename()) }}" alt="Instituciones" class="border-2 border-gray-100 rounded-lg h-16">
                    </div>
                @endforeach
            </div>
        </div>
		
    </div>
</div>