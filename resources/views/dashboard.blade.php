<style>
    th{
        padding: 5px;
        border: 1px solid black;
        text-align: center;
    }
    td{
        padding: 5px;
        border: 1px solid black;
        text-align: center;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Este es tu horario") }} {{ Auth::user()->name }}
                    <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Hora</th>
                    <th class="px-4 py-2">Lunes</th>
                    <th class="px-4 py-2">Martes</th>
                    <th class="px-4 py-2">Miercoles</th>
                    <th class="px-4 py-2">Jueves</th>
                    <th class="px-4 py-2">Viernes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8:15-9:15</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
                <tr>
                    <td>9:15-10:15</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
                <tr>
                    <td>10:15-11:15</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
                <tr>
                    <td>11:15-11:45</td>
                    <td colspan="5" style="background-color: gray;">Recreo</td>
                </tr>
                <tr>
                    <td>11:45-12:45</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
                <tr>
                    <td>12:45-13:45</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
                <tr>
                    <td>13:45-14:45</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>
        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
