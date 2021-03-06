
<!doctype html>
<html lang="en">
  <head>
    <title>Log in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js?"></script>
</head>
  <body>
      
    <div class="container">
        <div class="row">

        <div class="col-md-4">
            
        </div>
<br><br><br>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="login.php" target="_blank">
                        <div class = "form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                        </div>
                       
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" value="Login" class="btn btn-primary" onclick="javascript:EnviarDatos();">Sign In</button>
                    </form>
                    <div class="mensaje"></div>
                    <br>
                        <a href="http://localhost/paginaweb/login/signupform.php"><span>Sign up</span></a>                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script type="text/javascript">
        function EnviarDatos(){
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            $.ajax({
                type:'POST',
                url:'login.php',
                data:('username='+username+'&password='+password),
                success:function(respuesta){
                    if(respuesta){
                        $('.mensaje').html('Tu informaci??n se ha enviado correctamente');
                    } else {
                        $('.mensaje').html('Tu informaci??n no se ha enviado correctamente');

                    }
                }
        })
    }
    </script>
  </body>
</html>