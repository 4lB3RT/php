<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New todo</title>
	<link rel="stylesheet" href="public/css/node_modules/bootstrap/dist/css/bootstrap.css" type="text/css">
</head>
<body>
<header>
<div>
	<ul class="nav nav-pills nav-justified">
	  <li role="presentation" class="active" ><a href="new_todo.html">NEW TODO</a></li>
	</ul>
</div>

	<ol class="breadcrumb">
	  <li><a href="TODO.html">Todo List</a></li>
	  <li class="active">New Todo</li>
	  
	</ol>
		
</header>
<div class="row margin-top">
  	<div class="col-md-4"></div>
 	<div class="col-md-4"> 
		<form action="php/new_todo.php" enctype="multipart/form-data" method="POST">
		  <div class="form-group">
		    <label for="exampleInputTitol">Titol</label>
		    <input type="text" class="form-control" id="titol" placeholder="Titol" name="Titol">
		 </div>
		  <div>
		 	<label for="exampleInputEmail1">Descripcio</label>
		  	<textarea class="form-control" rows="3" name="descripcio"></textarea>
		  </div>
		  <div class="text-center margin-top"><a href="new_todo.html"><button type="submit" class="btn btn-success btn-add-todo">Add Todo</button></a></div>
		<form>
	</div>
  	<div class="col-md-4"></div>
</div>
	
</body>
</html>