<div>
	<livewire:filtrar-carreras/>
    <div class="py-12">
		<div class="max-w-7xl mx-auto">
			<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
				@foreach ($carreras as $carrera)
					<div class="shadow-lg">
						<a href={{route('carreras.show', $carrera->id)}}>
							<img src="{{ asset('storage/carreras/' . $carrera->imagen) }}" alt="Imagen del post {{ $carrera->titulo }}">
						</a>
						<div class="p-5 bg-white border-b border-gray-200 md:flex md:justify-between">
							<div>
								<a class="text-xl font-bold">
									{{$carrera->titulo}}
								</a>
								<p class="mt-1 text-sm text-gray-600 font-bold">{{$carrera->duracion}}</p>
								<p class="text-sm text-gray-500">Cierre Inscripciones: {{$carrera->ultimo_dia}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
