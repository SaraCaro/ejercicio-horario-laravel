<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <style>
            body {
                margin: auto;
                padding: 50px;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </head>
    <body>
    <h2>Añadir Hora</h2>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="display:flex; justify-content:center;">
        <form action="/horas/create" method ="POST" style="display: flex; flex-direction: column; width:50vw;">
            @csrf
            <label for="codigoAs">Asignatura:</label>
            <select name="asignatura_id">
                @foreach ($asignaturas as $asignatura)
                    <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                @endforeach
            </select>

            <label for="horaH">Hora:</label>
            <select name="horaH">
                <option value="1">8:15 - 9:15</option>
                <option value="2">9:15 - 10:15</option>
                <option value="3">10:15 - 11:15</option>
                <option value="4">11:45 - 12:45</option>
                <option value="5">12:45 - 13:45</option>
                <option value="6">13:45 - 14:45</option>
            </select>

            <label for="diaH">Dia:</label>
            <select name="diaH">
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
            <select>

            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-5 mt-5" type="submit" value="Guardar">
        </form>
    </div>
        <a href="{{route ('horas')}}">Volver</a>
    </body>
</html>