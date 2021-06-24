<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex flex-col">
        <form action="/articulos" class="w-full max-w-lg" method="post">
        @csrf()
        <div class="flex items-center py-2">
            <div class="w-full px-3">
                <label for="titulo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Título</label>
            </div>
            <input type="text" id="titulo" name="titulo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="1">
        </div>
        <div class="flex items-center py-2">
            <div class="w-full px-3">
                <label for="editorial" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Editorial</label>
            </div>
            <input type="text" id="editorial" name="editorial" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="2">
        </div>
        <div class="flex items-center py-2">
            <div class="w-full px-3">
                <label for="autor" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Autor</label>
            </div>
            <input type="number" id="autor" name="autor" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="3">
        </div>
        <div class="flex items-center py-2">
            <div class="w-full px-3">
                <label for="edicion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Edición</label>
            </div>
            <input type="number" id="edicion" name="edicion" step="any" value="0.00" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
        </div>

        <div class="flex items-center py-2">
            <div class="w-full px-3">
                <label for="fecha" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Fecha</label>
            </div>
            <input type="number" id="fecha" name="fecha" step="any" value="0.00" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" tabindex="4">
        </div>


        <form >
            <a href="/articulos" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" tabindex="5">Cancelar</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>