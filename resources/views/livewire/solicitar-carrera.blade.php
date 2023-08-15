<div class="my-6 flex flex-col justify-center items-center">
	<form wire:submit.prevent="solicitar">
		<button type="submit" class="border-2 border-gray-700 bg-white hover:bg-gray-100 transition-colors text-gray-700 text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full">
    		Solicitar Información
		</button>

		<div class="mt-4 text-center text-sm text-green-600 space-y-1">
			{{session('mensaje')}}
		</div>
	</form>
</div>

