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
        <div>
            <form action="/asignaturas/edit/{{$asignatura->codAs}}" method="post">
                @csrf
                @method('PUT')
                <label>Nombre:</label>
                <input type="text" name="nombreAs" placeholder="Nombre asignatura" value="{{$asignatura->nombreAs}}">
                <label>Nombre Corto:</label>
                <input type="text" name="nombrecortoAs" placeholder="Nombre corto asignatura" value="{{$asignatura->nombrecortoAs}}">
                <label>Profesor:</label>
                <input type="text" name="profesorAs" placeholder="Profesor" value="{{$asignatura->profesorAs}}">
                <label>Color:</label>
                <input type="color" name="colorAs" placeholder="Color" value="{{$asignatura->colorAs}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="submit" value="Guardar">
            </form>
            <a href="{{route ('asignaturas')}}">Volver</a>
        </div>
    </body>
</html>