<x-app-layout>
    <div class="fondoinicio py-20 overflow-hidden lg:py-24">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="p-16 relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-gray-700 sm:text-6xl">Cosmopolita Educa,<br>Educación a Distancia</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">Una oferta educativa adaptada a cada persona ¡Cursa desde <span class="text-yellow-600">donde quieras</span> y <span class="text-yellow-600">cuando quieras!</span></p>
            </div>

			<!--<div class="hidden lg:block md:block button-inicio">
				<a href="{{route ('lista.index')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-yellow uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Ver todos los cursos
				</a>
		
				<a href="{{route('register')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-yellow uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Registrarme
				</a>
			</div>-->

        </div>
    </div>

	<livewire:timeline/>

    <livewire:home-carreras/>

	<div class="hidden md:block w-full p-20 mb-20 fondobanner" style="background-repeat: no-repeat;">
		<div class="max-w-lg mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
			<div class="flex">
				<div class="w-2/5">
	
				</div>
				<div class="w-3/5 pl-8">
					<h2 class="hidden md:block text-4xl text-center leading-8 tracking-tight text-white">Una oferta educativa adaptada<br>a cada persona.</h2>
					<p class="hidden md:block mt-4 text-xl text-center text-white">Sumérgete en una variedad de cursos y carreras diseñados y conducidos por expertos en el campo,<br>conviértete en un profesional.</p>
				</div>
			</div>
		</div>
	</div>

	<livewire:preguntas/>

	<livewire:instituciones/>

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