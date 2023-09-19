<x-app-layout>
    <div class="pb-16 p-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-10">
			<h1 class="text-gray-700 mb-5 text-center font-bold text-4xl  leading-tight">Acerca de Nosotros</h1>

            <!-- Sección 1: Mision y Visión -->
            <div class="mt-10 flex flex-col md:flex-row items-center justify-center space-y-6 md:space-x-6">
                <!-- Imagen -->
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('/images/gallery/2.jpg') }}" alt="Misión y Visión" class="w-full h-auto rounded-lg shadow-lg">
                </div>

                <!-- Texto -->
                <div class="w-full md:w-1/2">
					<h1 class="text-gray-700 mb-5 font-bold text-2xl  leading-tight">Nuestra Misión</h1>
                    <p class="text-lg text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed et justo vitae ipsum eleifend ullamcorper. Duis vestibulum nunc eu tellus auctor, eget euismod tortor consequat.
                    </p>
					<h1 class="text-gray-700 my-5 font-bold text-2xl  leading-tight">Nuestra Visión</h1>
                    <p class="text-lg text-gray-700">
                        Sed nec quam tincidunt, iaculis justo in, tristique urna. Morbi varius, libero in vestibulum lacinia, odio quam ullamcorper justo, a volutpat turpis dolor eu justo.
                    </p>
                </div>
            </div>

            <!-- Sección 2: Valores -->
            <div class="mt-6 flex flex-col md:flex-row items-center justify-center space-y-6 md:space-x-6">
                <!-- Texto -->
                <div class="w-full md:w-1/2">
					<h1 class="text-gray-700 mb-5 text-center font-bold text-4xl  leading-tight">Nuestros Valores</h1>
                    <ul class="list-disc pl-5 mt-2 text-lg text-gray-700">
                        <li>Valor 1: Lorem ipsum dolor sit amet.</li>
                        <li>Valor 2: Consectetur adipiscing elit.</li>
                        <li>Valor 3: Nulla facilisi. Sed et justo vitae ipsum eleifend ullamcorper.</li>
                        <li>Valor 4: Duis vestibulum nunc eu tellus auctor.</li>
                        <!-- Agrega más valores según sea necesario -->
                    </ul>
                </div>

                <!-- Imagen -->
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('/images/gallery/3.jpg') }}" alt="Valores" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>

            <!-- Puedes agregar más secciones según sea necesario -->
        </div>
    </div>
</x-app-layout>