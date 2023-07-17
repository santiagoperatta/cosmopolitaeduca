<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarCarrera'>
	<div>
		<x-input-label for="titulo" :value="__('Titulo Carrera')" />
		<x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" placeholder="Titulo carrera" :value="old('titulo')"/>
		<x-input-error :messages="$errors->get('titulo')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="categoria" :value="__('Categoria')" />
		<select id="categoria" wire:model="categoria" class="mb-2 w-full"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $categorias as $categoria )
			<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
		@endforeach
		</select>
	</div>

	<div>
		<x-input-label for="grado" :value="__('Grado de Formacion')" />
		<select id="grado" wire:model="grado" class="mb-2 w-full"
		>
		<option value="">-- Seleccione --</option>
		@foreach ( $grados as $grado )
			<option value="{{$grado->id}}">{{$grado->grado}}</option>
		@endforeach
		</select>
	</div>


	<div>
		<x-input-label for="duracion" :value="__('Duracion')" />
		<x-text-input id="duracion" class="block mt-1 w-full" type="text" wire:model="duracion"/>
		<x-input-error :messages="$errors->get('duracion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="ultimo_dia" :value="__('Ultimo dia para anotarse')" />
		<x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"/>
		<x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="descripcion" :value="__('Descripcion de la Carrera')" />
		<textarea
			wire:model="descripcion"
			placeholder="Descripcion general de la carrera"
			class="mb-2 w-full h-52"
		></textarea>
		<x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="requisitos" :value="__('Requisitos')" />
		<textarea
			wire:model="requisitos"
			placeholder="Requisitos para cursar"
			class="mb-2 w-full h-52"
		></textarea>
		<x-input-error :messages="$errors->get('requisitos')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="certificacion" :value="__('Certificacion')" />
		<x-text-input id="certificacion" class="block mt-1 w-full" type="text" wire:model="certificacion"/>
		<x-input-error :messages="$errors->get('certificacion')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="modalidad" :value="__('Modalidad')" />
		<x-text-input id="modalidad" class="block mt-1 w-full" type="text" wire:model="modalidad"/>
		<x-input-error :messages="$errors->get('modalidad')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="programa" :value="__('Programa de estudios')" />
		<textarea
			wire:model="programa"
			placeholder="Programa de estudios"
			class="mb-2 w-full h-52"
		></textarea>
		<x-input-error :messages="$errors->get('programa')" class="mt-2" />
	</div>

	<div>
		<x-input-label for="precio" :value="__('Precio')" />
		<x-text-input id="precio" class="block mt-1 w-full" type="text" wire:model="precio"/>
		<x-input-error :messages="$errors->get('precio')" class="mt-2" />
	</div>

	<div>
		@if ($imagen_nueva)
			Imagen nueva:
			<img src="{{$imagen_nueva->temporaryUrl()}}" alt="">
			
		@endif
	</div>

	<div>
		<x-input-label for="imagen" :value="__('Imagen')" />
		<x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*"/>
		
		<x-input-error :messages="$errors->get('imagen')" class="mt-2" />
	</div>

	<div class="my-5 w-80">
		<x-input-label :value="__('Imagen Actual')" />
		<img src="{{asset('storage/carreras/' . $imagen)}}" alt="{{ 'Imagen Vacante' . $titulo}}">
	</div>


	<x-primary-button>
		Guardar Cambios
	</x-primary-button>
</form>