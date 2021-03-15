<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador de solicitudes</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

    a{
        text-decoration: none;
        color: black;
        
    }
    body 
            {
             
                font-family: 'Courier New', Courier, monospace;
                
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
        <th>Cambiar Status</th>
        <th>Cambiar Status</th>
        <th>Notificar</th>
    </tr>
    
        @foreach ($solicitud as $datos)
        <tr >
            <td>{{$datos->nombre}} {{$datos->apellido}}</td>
            <td>{{$datos->telefono}}</td>
            <td>{{$datos->email}}</td>
            <td>{{$datos->status}}</td>
           

            @switch($datos->status)
                @case("Solicitado")
                <td><a href="{{route('admin.update', $datos)}}" ><button class="btn btn-outline-success">En proceso</button></a></td>   
                    @break
                @case("En proceso")
                <td><a href="{{route('admin.refresh', $datos)}}"><button  class="btn btn-outline-info">Solicitado</button></a></td>  
                    @break
                @case('Listo para entregar')
                <td><button class="btn btn-outline-primary" disabled><a href="{{route('admin.refresh', $datos)}}" >Solicitado</button></a></td>  
                    @break;
                @default
            @endswitch

            @switch($datos->status)
                @case("Solicitado")
                <td><button class="btn btn-outline-warning" disabled><a href="{{route('admin.update', $datos)}}">Listo para entregar</button></a></td>   
                    @break
                @case("En proceso")
                <td><button class="btn btn-outline-warning"><a href="{{route('admin.update', $datos)}}">Listo para entregar</button></a></td>  
                    @break
                @case('Listo para entregar')
                <td><button class="btn btn-outline-success"><a href="{{route('admin.refresh', $datos)}}">En proceso</button></a></td>  
                    @break;
                @default
            @endswitch

            @switch($datos->status)
                @case("Solicitado")
                <td><button class="btn btn-outline-danger" disabled><a href="{{route('admin.update', $datos)}}">Notificar Usuario</button></a></td>   
                    @break
                @case("En proceso")
                <td><button  class="btn btn-outline-danger" disabled ><a href="{{route('admin.update', $datos)}}">Notificar Usuario</button></a></td>  
                    @break
                @case('Listo para entregar')
                <td><button class="btn btn-outline-danger"><a href="{{route('admin.update', $datos)}}" >Notificar Usuario</button></a></td>  

                
                @if (session('info'))
                    <script>
                        alert("{{session('info')}}");
                    </script>
                @endif

                    @break;
                @default
            @endswitch


        </tr>
        @endforeach
    
    </table>

    <br>

    <form action="{{route('admin.logout')}}" method="POST">
        @csrf

    <a href="#" onclick="this.closest('form').submit()" class="btn btn-danger">Cerrar Sesion</a>
        
    </form>
    
    </center>

   
</body>
</html>