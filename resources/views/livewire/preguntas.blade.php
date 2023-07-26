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