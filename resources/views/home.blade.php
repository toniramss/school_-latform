@extends('layouts.layout')


@section('title', 'Prueba de Layout')

@section('content')
<div class="bg-gray-50 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <!-- Encabezado principal -->
        <h1 class="text-4xl font-extrabold text-blue-600">Bienvenido a la Plataforma Escolar</h1>
        <p class="text-lg text-gray-700">Gestiona proyectos de manera eficiente y organiza tareas en equipo con
            facilidad.</p>

        <!-- Sección de características -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            <!-- Bloque 1 -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <img src="https://via.placeholder.com/150" alt="Gestión de Proyectos" class="mx-auto w-24 h-24 mb-4">
                <h2 class="text-xl font-bold text-blue-500">¿Qué es la Plataforma?</h2>
                <p class="text-gray-600 mt-2">Es una herramienta diseñada para gestionar proyectos asignados a los
                    usuarios de manera sencilla.</p>
            </div>
            <!-- Bloque 2 -->

            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <img src="https://via.placeholder.com/150" alt="Colaboración" class="mx-auto w-24 h-24 mb-4">
                <h2 class="text-xl font-bold text-blue-500">¿Qué se puede hacer?</h2>
                <p class="text-gray-600 mt-2">Facilita la organización y mejora la colaboración en el
                    ámbito escolar.
                </p>
            </div>



            <!-- Bloque 3 -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <img src="https://via.placeholder.com/150" alt="Colaboración" class="mx-auto w-24 h-24 mb-4">
                <h2 class="text-xl font-bold text-blue-500">¿Por qué es útil?</h2>
                <p class="text-gray-600 mt-2">Facilita la organización y mejora la colaboración en el ámbito escolar.
                </p>
            </div>
        </div>

        <!-- Botón de acción -->
        <div class="mt-10">
            <a href="{{ url('/projects') }}"
                class="bg-blue-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-600">
                Explorar Proyectos
            </a>
        </div>
    </div>
</div>
@endsection