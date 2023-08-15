<div class="mt-12">
    <div class="p-4 max-w-7xl mx-auto">
        <form
		wire:submit.prevent="leerDatosFormulario"
		>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Término de Búsqueda
                    </label>
                    <input 
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. Psicología"
                        class="rounded-md shadow-sm border-gray-300 w-full"
						wire:model="termino"
						/>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Categoría</label>
                    <select wire:model="categoria" class="border-gray-300 p-2 w-full">
                        <option>--Seleccione--</option>
            
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Titulo</label>
                    <select wire:model="grado" class="border-gray-300 p-2 w-full">
                        <option>-- Seleccione --</option>
                        @foreach ($grados as $grado)
                            <option value="{{ $grado->id }}">{{$grado->grado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="border-2 border-gray-700 bg-white hover:bg-gray-100 transition-colors text-gray-700 text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>