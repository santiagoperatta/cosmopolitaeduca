<x-app-layout>
    <div class="fondoinicio py-20 bg-gray-50 overflow-hidden lg:py-24">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="p-16 relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-white sm:text-6xl">Cosmopolita Educa,<br>Educación a Distancia</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-white">Una oferta educativa adaptada a cada persona. ¡Cursa desde donde quieras y cuando quieras!</p>
            </div>

			<!--<div class="hidden lg:block md:block button-inicio">
				<a href="{{route ('lista.index')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-blue uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Ver todos los cursos
				</a>
		
				<a href="{{route('register')}}" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md font-bold text-xs text-blue uppercase tracking-widest bg-white hover:bg-gray-200 justify-center mt-4">
					Registrarme
				</a>
			</div>-->

        </div>
    </div>

    <livewire:home-carreras/>

	<livewire:preguntas/>

	<livewire:timeline/>

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