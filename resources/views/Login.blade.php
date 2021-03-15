<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>

    <style>
        body 
            {
                background: 
                linear-gradient(135deg, black 25%, transparent 25%) -50px 0,
                linear-gradient(225deg, black 25%, transparent 25%) -50px 0,
                linear-gradient(315deg, black 25%, transparent 25%),
                linear-gradient(45deg, black 25%, transparent 25%);	
                background-size: 2em 2em;
                background-color: #232323;
            }
    </style>

</head>
<body>
   
<br><br><br><br><br><br><br><br><br><br>

<div class="container">

    <div class="card">
       <center><h3 class="card-header bg-primary text-white">Inicio de Sesion Administrador</h3></center> 
       <div class="card-body">
            <form  method="post">
                @csrf
                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">  
                </div>

                <div class="mb-3">
                    <label>Contraseña:</label>  
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                </div>
             
            </form>
       </div>
    </div>




</div>
  
</body>
</html>