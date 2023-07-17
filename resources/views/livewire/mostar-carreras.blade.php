<div>	
	@if ($carreras->count())
		<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
			@foreach ($carreras as $carrera)
				<div>
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
							
							<div class="mt-3 space-x-1">
								<a
									href="{{route ('interesados.index', $carrera)}}"
									class=" bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
								>
									<i class="fa-solid fa-question"></i>
								</a>

							<a
								href="{{route('carreras.edit', $carrera->id)}}"
								class=" bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
							>
								<i class="fa-solid fa-pen"></i>
							</a>

							<button
								wire:click="$emit('mostrarAlerta', {{$carrera->id}})"
								class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
								><i class="fa-solid fa-trash"></i>
							</button>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	
	@else
		<p class="text-center text-sm text-gray-600">No creaste ninguna carrera aún</p>
	@endif

	<div class="my-10">
		{{$carreras->links('pagination::tailwind')}}
	</div>
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	Livewire.on('mostrarAlerta', carreraId => {
		Swal.fire({
			title: 'Eliminar Carrera',
			text: "Una carrera eliminada no puede recuperarse",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, Eliminar',
			cancelButtonText: "Cancelar"
		}).then((result) => {
			if (result.isConfirmed) {
				//eliminar la carrera
				Livewire.emit('eliminarCarrera', carreraId)
				
				Swal.fire(
					'Eliminada',
					'Tu carrera ha sido eliminada.',
					'succes'
				)
			}
		})
	})
</script>
@endpush