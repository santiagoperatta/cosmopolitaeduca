<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearCarrera'>
	<div>
		<x-input-label for="titulo" :value="__('Titulo Carrera')" />
		<x-text-input id="titulo" class="block w-full border border-gray-300" type="text" wire:model="titulo" placeholder="Titulo carrera" :value="old('titulo')"/>
		<x-input-error :messages="$errors->get('titulo')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="categoria" :value="__('Categoria')" />
		<select id="categoria" wire:model="categoria" class="block font-medium text-sm text-gray-700 w-full border border-gray-300 p-2 rounded-lg"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $categorias as $categoria )
			<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
		@endforeach
		</select>
	</div>

	<div>
		<x-input-label for="grado" :value="__('Grado de Formacion')" />
		<select id="grado" wire:model="grado" class="block font-medium text-sm text-gray-700 w-full border border-gray-300 p-2 rounded-lg"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $grados as $grado )
			<option value="{{$grado->id}}">{{$grado->grado}}</option>
		@endforeach
		</select>
	</div>


	<div>
		<x-input-label for="duracion" :value="__('Duracion')" />
		<x-text-input id="duracion" class="block w-full border border-gray-300" type="text" wire:model="duracion"/>
		<x-input-error :messages="$errors->get('duracion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="ultimo_dia" :value="__('Ultimo dia para anotarse')" />
		<x-text-input id="ultimo_dia" class="block w-full border border-gray-300" type="date" wire:model="ultimo_dia"/>
		<x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="descripcion" :value="__('Descripcion de la Carrera')" />
		<textarea
			wire:model="descripcion"
			placeholder="Descripcion general de la carrera"
			class="mb-2 w-full h-52 border border-gray-300 rounded-lg p-2"
		></textarea>
		<x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="requisitos" :value="__('Requisitos')" />
		<textarea
			wire:model="requisitos"
			placeholder="Requisitos para cursar"
			class="mb-2 w-full h-52 border border-gray-300 rounded-lg p-2"
		></textarea>
		<x-input-error :messages="$errors->get('requisitos')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="certificacion" :value="__('Certificacion')" />
		<x-text-input id="certificacion" class="block w-full border border-gray-300" type="text" wire:model="certificacion"/>
		<x-input-error :messages="$errors->get('certificacion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="modalidad" :value="__('Modalidad')" />
		<x-text-input id="modalidad" class="block w-full border border-gray-300" type="text" wire:model="modalidad"/>
		<x-input-error :messages="$errors->get('modalidad')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="programa" :value="__('Programa de estudios')" />
		<textarea
			wire:model="programa"
			placeholder="Programa de estudios"
			class="mb-1 w-full h-52 border border-gray-300 rounded-lg p-2"
		></textarea>
		<x-input-error :messages="$errors->get('programa')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="precio" :value="__('Precio')" />
		<x-text-input id="precio" class="block w-full border border-gray-300" type="text" wire:model="precio"/>
		<x-input-error :messages="$errors->get('precio')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="imagen" :value="__('Imagen')" />
		<x-text-input id="imagen" class="block w-full border border-gray-300" type="file" wire:model="imagen" accept="image/*"/>
		
		<div class="my-5 w-80">
			@if($imagen)
				<img src="{{$imagen->temporaryUrl()}}">
			@endif
		</div>
		
		<x-input-error :messages="$errors->get('imagen')" class="mt-2" />
	</div>


	<x-primary-button>
		Crear Carrera
	</x-primary-button>
</form>