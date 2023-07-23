<!--preguntas frecuentes-->
@php
    $preguntasFrecuentes = [
        [
            'pregunta' => '¿Cuándo abren las inscripciones?',
            'respuesta' => 'Puedes aplicar y empezar tu proceso de admisión cuando tú desees. Una vez que seas admitido, podrás elegir cuándo comenzar tu carrera. Tenemos grupos que inician todos los meses.',
        ],
        [
            'pregunta' => '¿Puedo estudiar si no tengo conocimientos previos?',
            'respuesta' => 'Sí, muchos de nuestros alumnos ingresaron a Cosmopolita Educa sin tener conocimientos previos. ¡La carrera está diseñada para que puedas aprender desde cero!',
        ],
		[
            'pregunta' => '¿Es necesario tener un buen nivel de inglés para ingresar?',
            'respuesta' => 'Cosmopolita Educa es en español por lo que no es necesario contar con un nivel de inglés mínimo para ingresar a nuestras carreras.',
        ],
		[
            'pregunta' => '¿Existe una edad máxima para ingresar?',
            'respuesta' => 'No existe una edad máxima para ingresar a Cosmopolita Educa. Hemos tenido alumnos de más de 50 años que pudieron insertarse sin inconvenientes en el mercado laboral.',
        ],
		[
            'pregunta' => '¿Qué computadora / sistema necesito?',
            'respuesta' => 'Tu computadora deberá tener un mínimo. 1.6 GHz de procesamiento, 4 GB de RAM y 120 GB de Disco Duro. Además necesitarás una cámara y micrófono, que podrán ser las de la computadora o las del celular.',
        ],
        // Agrega más preguntas frecuentes aquí...
    ];
@endphp

<x-app-layout>
    <div class="fondoinicio py-20 bg-gray-50 overflow-hidden lg:py-24">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="p-16 relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-white sm:text-6xl">Cosmopolita Educa,<br>Educación a Distancia</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-white">Una oferta educativa adaptada a cada persona. ¡Cursa desde donde quieras y cuando quieras!</p>
            </div>

			<div class="hidden lg:block md:block button-inicio">
				<a href="{{route ('lista.index')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-blue uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Ver todos los cursos
				</a>
		
				<a href="{{route('register')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-blue uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Registrarme
				</a>
			</div>

        </div>
    </div>

    <livewire:home-carreras/>

	<div class="mb-10">
		<h1 class="mb-5 text-center font-bold text-4xl text-blue-900 leading-tight">Preguntas Frecuentes</h1>
		@foreach ($preguntasFrecuentes as $pregunta)
			<div class="">
				<h3 class="py-6 text-left pregunta font-lg font-semibold">{{ $pregunta['pregunta'] }} <i class="fa-solid fa-chevron-down"></i></h3>
				<p class="mb-6 text-left respuesta">{{ $pregunta['respuesta'] }}</p>
				<hr class="hr-separador">
			</div>
    	@endforeach
    </div>
	<div class="mt-16 w-full max-w-5xl mx-auto p-4">
		<h1 class="text-center font-bold text-4xl text-blue-900 leading-tight">¿Por qué elegir Cosmopolita Educa?</h1>
		<!-- Centrar la línea de tiempo -->
		<div class="mx-auto my-12 relative">
			<!-- Timeline -->
			<div class="flex flex-col sm:flex-row justify-between items-center">
				<!-- Primer paso -->
				<div class="flex flex-col items-center relative">
					<div class="flex-shrink-0 w-12 h-12 bg-white border-2 rounded-full flex items-center justify-center z-10 mb-4">
						<span class="text-blue-900 font-bold text-lg">1</span>
					</div>
					<img width="48" height="48" src="https://img.icons8.com/fluency/48/overtime.png" alt="overtime"/>
					<h3 class="my-2 text-lg font-semibold text-blue-900">Flexibilidad de Horarios</h3>
					<p class="mx-4 mt-2 text-center text-base text-gray-500">Educación a tu ritmo, sin horarios fijos. Flexibilidad para lograr tus metas desde cualquier lugar.</p>
				</div>
	
				<!-- Línea (oculta en dispositivos móviles) -->
				<div class="h-0.5 w-full bg-gray-200 absolute top-6 z-0 hidden sm:block"></div>
	
				<!-- Segundo paso -->
				<div class="flex flex-col items-center relative mt-4 sm:mt-0">
					<div class="flex-shrink-0 w-12 h-12 bg-white border-2 rounded-full flex items-center justify-center z-10 mb-4">
						<span class="text-blue-900 font-bold text-lg">2</span>
					</div>
					<img width="48" height="48" src="https://img.icons8.com/fluency/48/update-left-rotation.png" alt="update-left-rotation"/>
					<h3 class="my-2 text-lg font-semibold text-blue-900">Contenido Actualizado</h3>
					<p class="mx-4 mt-2 text-center text-base text-gray-500">Contenido actualizado y adaptado a tus necesidades. Avanza en tu carrera con excelencia académica.</p>
				</div>
	
				<!-- Línea (oculta en dispositivos móviles) -->
				<div class="h-0.5 w-full bg-gray-200 absolute top-6 z-0 hidden sm:block"></div>
	
				<!-- Tercer paso -->
				<div class="flex flex-col items-center relative mt-4 sm:mt-0">
					<div class="flex-shrink-0 w-12 h-12 bg-white border-2 rounded-full flex items-center justify-center z-10 mb-4">
						<span class="text-blue-900 font-bold text-lg">3</span>
					</div>
					<img width="48" height="48" src="https://img.icons8.com/fluency/48/conference-background-selected.png" alt="conference-background-selected"/>
					<h3 class="my-2 text-lg font-semibold text-blue-900">Profesionales Capacitados</h3>
					<p class="mx-4 mt-2 text-center text-base text-gray-500">Equipo de profesionales comprometidos contigo. Transforma tu futuro con nuestra educación de calidad.</p>
				</div>
			</div>
		</div>
	</div>

    <div class="py-12">
        <div>
            <section class="banks">
                <div id="icon-ani">
                    <div class="icons-row position-absolute bg-e" style="
                            bottom: 0px;
                            left: 0px;
                            width: 3938px;
                            height: 78px;
                            background-position: 0 0;
                            background-repeat: repeat;
                            background-image: url('images/gifcolor.png');
                            background-size: 100%;
                          ">
                          &nbsp;
                    </div>
                    &nbsp;
                </div>
            </div>
        </section>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.pregunta').click(function() {
            $(this).next('.respuesta').slideToggle();
            $(this).toggleClass('active');
        });
    });
</script>