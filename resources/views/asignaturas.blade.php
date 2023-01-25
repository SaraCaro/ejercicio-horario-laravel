<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <style>
        #añadir{
            background-color: green;
            color: white;
            padding: 10px;
        }
        #editar {
            padding: 10px;
            color: blue;
        }
        #eliminar {
            color: red;
        }
        th{
            padding: 5px;
            border: 1px solid black;
        }
        td{
            padding: 5px;
            border: 1px solid black;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Estas son tu asignaturas") }}
                    <a id="añadir" href="{{route ('asignaturas.create')}}">Añadir asignatura</a>
                </div>
                <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Nombre Corto</th>
                            <th>Profesor</th>
                            <th>Color</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach ($asignaturas as $asignatura)
                            <tr>
                                <td>{{ $asignatura->nombreAs }}</td>
                                <td>{{ $asignatura->nombrecortoAs }}</td>
                                <td>{{ $asignatura->profesorAs }}</td>
                                <td style="background-color: {{ $asignatura->colorAs }};"></td>
                                <td>
                                    <a id="editar" href="/asignaturas/edit/{{$asignatura->codAs}}">Editar</a>
                                    <a id="eliminar" href="/asignaturas/delete/{{$asignatura->codAs}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>    
            </div>
        </div>
    </div>
</x-app-layout>