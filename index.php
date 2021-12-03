<?php
// session_start(); 
// session_destroy();
// if (!(isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php?access=false");
// 	exit();
// }
// else {
 	// $admin = $_SESSION['admin'];
// }
require 'includes/snippet.php';
require 'includes/db-inc.php';
 include "includes/header.php";

	// if(isset($_SESSION['admin'])){
	// 	$admin = $_SESSION['admin'];
	// 	// echo "Hello $user";
	// }

 if(isset($_POST['submit'])){

    $news = sanitize(trim($_POST['news']));

    $sql = "INSERT into news (announcement) values ('$news')"; 

    $query = mysqli_query($conn,$sql);
    $error = false;

       if($query){
       $error = true;
      }
      else{
        echo "<script>alert('Not successful!! Try again.');
                    </script>"; 
      }
 }

    //  if(isset($_POST['UpDat'])){
	// 	$id = sanitize(trim($_POST['id']));
    //     $text = sanitize(trim($_POST['text']));

    //     $sql_up = "UPDATE news set announcement = '$text' where newsId = '$id'";
	// 	echo mysqli_error($sql_up);
    //      $result = mysqli_query($conn,$sql_del);
    //             if ($result)
    //             {
    //                 echo "<script>
            
           
    //                alert('Update successful');

    //      </script>";
    //             }


    //  }

     if(isset($_POST['del'])){

        $id = sanitize(trim($_POST['id']));

        $sql_del = "DELETE from news where newsId = $id"; 

        $result = mysqli_query($conn,$sql_del);
                if ($result)
                {
         //            echo "<script>
            
         //    var response = confirm('Would you like to delete the user');
         //    if (response == true) {
         //        alert('User was successfully deleted from the database');
         //            location.href ='admin.php';
         //    }   

         //    else
         //        {
         //            alert('Could not delete user');
         //        }
            

         // </script>";
                }

     }






  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="flickity/flickity.css">
	<script type="text/javascript" src="flickity/flickity.js"></script>
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
            </script>
        <script src=
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
            </script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
	<title>ALU Library</title>

</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
					<span class="sr-only">:</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ALU Library</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
										
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

</div>

<div class="jumbotron jumbotron-fluid">
            <?php
                session_start();
                include 'registration.php';
            ?>

            <div class="container">
                <h1 class="display-4 text-white font-weight-bold" >The Online Library</h1>
                <p class="lead font-weight-bold text-white">Welcome to your librarian account, <?php echo $_SESSION["username"] ?></p>

            </div>
        </div>

        <div class="text-center p-2"><h3>Available Books</h3></div>

        <!-- Book Cards -->
        <div class="container column" >
            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 h-100 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="assets/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>

           <?php 

          $sql2 = "SELECT * from news";

      $query2 = mysqli_query($conn, $sql2);
      $counter = 1;
      while ($row = mysqli_fetch_array($query2)) {  ?>


        <tbody >
          <td><?php echo $counter++; ?></td>
          <td><?php echo $row['announcement']; ?></td>
        
        </tbody>

     <?php }
           ?>
		        
		         </tbody> 
		   </table>
		 
	  </div>

			
			</div>
	</div>



	  		<!-- <div class="row">
	  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
		  			<div class="page-header col-lg-offset-1">
		  				<h2>Welcome to our portal</h2>
		  			</div>
	  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	  				<a href="addstudent.php"><p class="slide2"><button class="btn btn-success">Sign Up</button></p></a>
	  			</div>
	  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
		  			<div class="page-header col-lg-offset-1">
		  				<h2>24/7 Operational Support</h2>
		  			</div>
	  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</div>
	  			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 column">
	  				<div class="page-header col-lg-offset-1">
	  				<h2>Why Us?</h2>
	  			</div>
	  				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  			</div>
	  		</div>
		</div> -->

		<div class="container-fluid slide3" style="background-color: #282828">
			<div class="container">
				<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/9.jpeg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/6.jpeg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/7.jpeg">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="#" class="thumbnail">
						<img src="ify/8.jpeg">
					</a>
				</div>
			</div>
			</div>
			
		</div>
		


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>