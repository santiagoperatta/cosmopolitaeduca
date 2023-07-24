<div class="p-4">
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($carreras->take(12) as $carrera)
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
            <div class="text-center"> <!-- Agregamos la clase text-center para centrar el botón verticalmente -->
                <a href="{{route ('lista.index')}}" class="mt-8 inline-block px-4 py-2 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest bg-blue-900 hover:bg-blue-700 mx-auto"> <!-- Reemplazamos flex items-center justify-center por mx-auto para centrar horizontalmente el botón -->
                    Ver todos los cursos
                </a>
            </div>
        </div>
    </div>
</div>
