<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		@stack('styles')
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
		
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

		<link rel="stylesheet" href="{{ asset('build/assets/custom.css') }}">
		<link rel="stylesheet" href="{{ asset('build/assets/whatsapp.css') }}">



		@livewireStyles
    </head>
    <body class="">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<a href="https://api.whatsapp.com/send?phone=+54 9 3564 68-0460&text=Hola, quiero comunicarme con Cosmopolita Educa" class="float" target="_blank">
		<i class="fa fa-whatsapp my-float "></i>
		</a>

		<footer class="bg-white dark:bg-gray-900">
			<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
				<div class="md:flex md:justify-between">
				  <div class="mb-6 md:mb-0">
                    <a href="{{ route('carreras.index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
				  </div>
				  <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
					  <div>
						  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Nosotros</h2>
						  <ul class="text-gray-500 dark:text-gray-400 font-medium">
							  <li class="mb-4">
								  <a href="http://sociedadcosmopolita.com.ar/" class="hover:underline">Sociedad Cosmopolita</a>
							  </li>
							  <li>
								  <a href="https://grupodevoto.com.ar/" class="hover:underline">Grupo Cooperativo</a>
							  </li>
						  </ul>
					  </div>
					  <div>
						  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
						  <ul class="text-gray-500 dark:text-gray-400 font-medium">
							  <li class="mb-4">
								  <a href="#" class="hover:underline">Politicas de Privacidad</a>
							  </li>
							  <li>
								  <a href="#" class="hover:underline">Terminos &amp; Condiciones</a>
							  </li>
						  </ul>
					  </div>
					  <div>
						<h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Seguinos</h2>
						<ul class="text-gray-500 dark:text-gray-400 font-medium">
							<li class="mb-4">
								<a href="https://www.instagram.com/cosmopolitaeduca/" class="hover:underline ">Instagram</a>
							</li>
							<li>
								<a href="https://www.facebook.com/cosmopolita.educa" class="hover:underline">Facebook</a>
							</li>
						</ul>
					</div>
				  </div>
			  </div>
			  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
			  <div class="sm:flex sm:items-center sm:justify-between">
				  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Cosmopolita Educa</a>. Todos los derechos reservados.
				  </span>
				  <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
					  <a href="https://www.facebook.com/cosmopolita.educa" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
						  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
								<path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
							</svg>
						  <span class="sr-only">Facebook</span>
					  </a>
					  <a href="https://www.instagram.com/cosmopolitaeduca/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
						  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
						</svg>
						  <span class="sr-only">Instagram</span>
					  </a>
				  </div>
			  </div>
			</div>
		</footer>
		@livewireScripts
    </body>
</html>
