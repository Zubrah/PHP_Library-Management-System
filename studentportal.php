
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
	<title>Library Management</title>

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
					<li><a href="profile.php">View Profile</a></li>
					<li><a href="borrow-student.php">Borrow Books</a></li>					
					<li><a href="fine-student.php">Fines</a></li>					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

</div>
<div class="jumbotron jumbotron-fluid">
            

            <div class="container">
                <h1 class="display-4 text-white font-weight-bold" >The Online Library</h1>
                <p class="lead font-weight-bold text-white">Welcome to your librarian account, <?php echo $_SESSION["username"] ?></p>

            </div>
        </div>

        <div class="text-center p-2"><h3>Available Books</h3></div>

        <!-- Book Cards -->
        <div class="container column" >
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

		


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>