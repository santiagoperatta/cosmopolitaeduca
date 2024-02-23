<x-app-layout>
	<div class="sectionUno">
		<div class="fondoinicio py-20 overflow-hidden lg:py-24">
			<div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
				<div class="p-16 relative">
					<h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-gray-700 sm:text-6xl">Cosmopolita Educa<br>Educación a Distancia</h2>
					<p class="mt-4 max-w-3xl mx-auto text-center  text-xl text-gray-600">Una oferta educativa adaptada a cada persona. <br>¡Cursa desde <span class="text-yellow-600 font-semibold">donde quieras</span> y <span class="text-yellow-600 font-semibold">cuando quieras!</span></p>
				</div>
			</div>
		</div>

		<livewire:timeline/>
			
	</div>
	
	<livewire:home-carreras/>

	<div class="sectionTres">
		<div class="hidden md:block w-full p-20 mb-20 fondobanner" style="background-repeat: no-repeat; position: relative; z-index: 5;">
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
	</div>

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
<script>
    const section1 = document.querySelector('.sectionUno');
	const section2 = document.querySelector('.sectionDos');
	const section3 = document.querySelector('.sectionTres');
	const section4 = document.querySelector('.sectionCuatro');
    
    function observarElemento(selector, callback) {
        const elemento = document.querySelector(selector);
        const observador = new IntersectionObserver((entradas) => {
            const entrada = entradas[0];
            if (entrada.isIntersecting) {
                callback(true);
            } else {
                callback(false);
            }
        });
        observador.observe(elemento);
    }


    document.addEventListener("DOMContentLoaded", () => {
		observarElemento(".sectionUno", (isVisible) => {
            if (isVisible) {
                section1.classList.add("open");
            } else {
                section1.classList.remove("open");
            }
        });
        observarElemento(".sectionDos", (isVisible) => {
            if (isVisible) {
                section2.classList.add("open");
            } else {
                section2.classList.remove("open");
            }
        });
		observarElemento(".sectionTres", (isVisible) => {
            if (isVisible) {
                section3.classList.add("open");
            } else {
                section3.classList.remove("open");
            }
        });
		observarElemento(".sectionCuatro", (isVisible) => {
            if (isVisible) {
                section4.classList.add("open");
            } else {
                section4.classList.remove("open");
            }
        });
    });
</script>