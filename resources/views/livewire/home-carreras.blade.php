<div class="py-16 p-4">
	<h1 class="text-center font-bold text-4xl text-gray-700 leading-tight">Nuestras Ofertas Educativas</h1>
    <div class="py-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($carreras as $carrera)
                    <div class="shadow-lg bg-white rounded-2xl overflow-hidden">
                        <a href="{{ route('carreras.show', $carrera->id) }}">
							<img src="{{ asset('images/carreras/' . $carrera->imagen) }}" alt="Imagen del post {{ $carrera->titulo }}">
                        </a>
                        <div class="p-5 bg-white border-b border-gray-200 md:flex md:justify-between">
                            <div class="mb-4 md:mb-0">
                                <a class="uppercase text-xl font-bold">
                                    {{ Str::limit($carrera->titulo, 20) }}
                                </a>
                                <p class="mt-5 text-sm text-gray-600 font-sm">{{ Str::limit($carrera->descripcion, 60) }}</p>
                                <p class="mt-5 text-sm text-gray-600 font-bold">{{ $carrera->duracion }}</p>
                                <p class="text-sm text-gray-500">Cierre Inscripciones: {{ $carrera->ultimo_dia }}</p>
                            </div>
                            <div class="text-right md:self-end">
                                <a href="{{ route('carreras.show', $carrera->id) }}" class="bg-yellow-500 rounded-lg text-white text-lg w-7 h-7 flex justify-center items-center">
                                    +
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
			<div class="text-center mt-16">
				<a href="{{ route('lista.index') }}" class="border-2 border-gray-700 bg-white hover:bg-gray-100 transition-colors text-gray-700 text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full">
					Ver todas las carreras
				</a>
			</div>
        </div>
    </div>
</div>
