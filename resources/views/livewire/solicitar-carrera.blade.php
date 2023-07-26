<div class="mt-1 flex flex-col justify-center items-center">
	<form wire:submit.prevent="solicitar">
		<button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-full justify-center mt-4">
    		Solicitar Información
		</button>

		<div class="mt-4 text-center text-sm text-green-600 space-y-1">
			{{session('mensaje')}}
		</div>
	</form>
</div>

