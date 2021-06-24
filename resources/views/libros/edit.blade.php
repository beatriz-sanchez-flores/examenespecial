<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit') }}
        </h2>
    </x-slot>

    <form action="/libros/{{ $libros->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="text" id="isbn" name="isbn" class="form-control" value="{{$libros->isbn}}" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Editorial</label>
            <input type="text" id="editorial" name="editorial" value="{{$libros->editorial}}" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Autor</label>
            <input type="number" id="autor" name="autor" value="{{$libros->autor}}" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edicion</label>
            <input type="number" id="edicion" name="edicion" step="any" value="{{$libros->edicion}}" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="number" id="fecha" name="fecha" step="any" value="{{$libros->fecha}}" class="form-control" tabindex="4">
        </div>

        <a href="/libros" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
</x-app-layout>