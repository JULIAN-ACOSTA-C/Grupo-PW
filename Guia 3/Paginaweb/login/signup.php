<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                        Sign up
                    </div>
                    <div class="card-body">

                        <form method="POST">
                        <div class = "form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                        </div>
                       
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>        
                    </form>
                    <br>
                        <a href="http://localhost/paginaweb/login/login.php"><span>Login</span></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


  </body>
</html>