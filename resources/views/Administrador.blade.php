<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador de solicitudes</title>

<style>
 

    #tablita th{
        border-left: 1px solid black;
        border-right:  1px solid black;
        border-bottom: 1px solid black;
    }
    #tablita td{
        border-left: 1px solid black;
        border-right:  1px solid black;
        border-bottom: 1px solid black;
    }
</style>

</head>
<body>
    <center>
    <h1>Solicitudes de DPI Resividas</h1>

    <table class="default" id="tablita">
    <tr>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Status</th>
        <th>Opciones</th>
        
    </tr>
    
        @foreach ($solicitud as $datos)
        <tr>
            <td>{{$datos->nombre}} {{$datos->apellido}}</td>
            <td>{{$datos->telefono}}</td>
            <td>{{$datos->email}}</td>
            <td>{{$datos->status}}</td>
           

            @switch($datos->status)
                @case("Solicitado")
                <td><a href="{{route('admin.update', $datos)}}"><button>Cambiar Status</button></a></td>   
                    @break
                @case("En proceso")
                <td><a href="{{route('admin.update', $datos)}}"><button>Cambiar Status</button></a></td>  
                    @break
                @case('Listo para entregar')
                <td><a href="{{route('admin.update', $datos)}}"><button disabled>Cambiar Status</button></a></td>  
                    @break;
                @default
            @endswitch

        </tr>
        @endforeach
    
    </table>

    <br>

    <form action="administrador/logout" method="POST">
        @csrf

    <a href="" onclick="this.closest('form').submit()">Cerrar Sesion</a>
        
    </form>
    
    </center>

   
</body>
</html>