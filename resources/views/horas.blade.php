<style>
    #añadir{
            background-color: green;
            color: white;
            padding: 10px;
        }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Estas son tu horas") }}
                    <a id="añadir" href="{{route ('horas.create')}}">Añadir hora</a>
                </div>
                <table>
                    <tr>
                        <th>Asignatura</th>
                        <th>Hora</th>
                        <th>Dia</th>
                    </tr>
                    @foreach ($horas as $hora)
                        <tr>
                            <td>{{$hora->asignatura_id}}</td>
                            <td>{{$hora->horaH}}</td>
                            <td>{{$hora->diaH}}</td>
                            <td>
                                <a id="editar" href="/horas/edit/{{$hora->asignatura_id}}">Editar</a>
                                <a id="eliminar" href="/horas/delete/{{$hora->asignatura_id}}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>