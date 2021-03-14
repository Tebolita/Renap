<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
</head>
<body>

<center>
    
    <h1>Solicitud De DPI</h1>
    
    <div>
        <form action="{{route('publicas.create')}}" method="post" enctype="multipart/form-data">

            @csrf
        
            <label>Ingrese su Cédula(Opcional) <input type="text" name="cedula" id="" ></label><br><br>
            <label>Ingrese su Fecha de nacimiento <input type="date" name="fechanacimiento" id="" required max=""></label><br><br>
            <label>Ingrese su Nombre <input type="text" name="nombre" id="" required></label><br><br>
            <label>Ingrese su Apellido <input type="text" name="apellido" id="" required></label><br><br>
            <label>Ingrese su dirección <input type="text" name="direccion" id="" required></label><br><br>
            <label>Ingrese su teléfono <input type="text" name="telefono" id="" required></label><br><br>
            <label>Ingrese su departamento <input type="text" name="departamento" id="" required></label><br><br>
            <label>Ingrese su municipio <input type="text" name="municipio" id="" required></label><br><br>
            <label>Seleccione una fotografia <input type="file" name="foto" id="" required accept="image/png, .jpeg, .jpg"></label><br><br>
            @error('foto')
                <small class="text-danger">{{$message}}</small><br>
            @enderror
            <label>Ingrese su email <input type="email" name="email" id="" required></label><br><br>
            
            @if (session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif

            <input type="submit" value="Ingresar Solicitud">
        </form>
    </div>
</center>       
</body>
</html>