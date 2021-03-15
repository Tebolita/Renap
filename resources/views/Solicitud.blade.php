<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
    <link src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
</head>
<body>




<div class="container">

    <div class="card">
        <div class="card-header">
            <center>
            <h1>Solicitud De DPI</h1>
        </center>
        </div>

        <div class="card-body">
            <form action="{{route('publicas.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Ingrese su Cédula(Opcional)</label>
                    <input type="text" name="cedula" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su Fecha de nacimiento</label>
                    <input type="date" name="fechanacimiento" id="" required class="form-control">
                </div>
                <div class="mb-3">
                    <label>Ingrese su Nombre</label>
                    <input type="text" name="nombre" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su Apellido</label>
                    <input type="text" name="apellido" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su dirección</label>
                    <input type="text" name="direccion" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su teléfono</label>
                    <input type="text" name="telefono" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su departamento </label>
                    <input type="text" name="departamento" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Ingrese su municipio</label>
                    <input type="text" name="municipio" class="form-control" id=""> 
                </div>

                <div class="mb-3">
                    <label>Seleccione una fotografia</label>
                    <input type="file" name="foto" class="form-control" id=""> 
                    <div class="form-text">
                        La imagen tiene que tener unas demensiones como maximo 550*550 pixeles
                    </div>
                </div>

                                
                <div class="mb-3">
                    <label>Ingrese su email</label>
                    <input type="email" name="email" class="form-control" id=""> 
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input class="btn btn-success" type="submit" value="Enviar Solicitud">
                </div>

                @if (session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif

            </form>
        </div>

            
    <div class="card-footer">
        <center>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="btn btn-outline"> <a class="dropdown-item " href="{{route('admin.login')}}">Administrador</a></li>
            </ul>
        </div>
    </center>
        
    </div>

    </div>






</div>
  
    


     
</body>
</html>