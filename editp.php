<?php
 require_once('db.php');
 $id = $_GET['id'];
 $res = $database->read($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
	 $fname = $database->sanitize($_POST['fname']);
	 $lname = $database->sanitize($_POST['lname']);
	 $id = $database->sanitize($_POST['id']);
	 

	$res = $database->update($fname, $lname, $id);
	if($res){
	 	echo "Successfully updated data";
	}else{
	 	echo "failed to update data";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in PHP & MySQL - Update</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
	<h2>Update Operation in CRUD Application</h2>
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">First Name</label>
	    <div class="col-sm-10">
	      <input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $r['product'] ?>" placeholder="First Name" />
	    </div>
	</div>

	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Last Name</label>
	    <div class="col-sm-10">
	      <input type="text" name="lname"  class="form-control" id="input1" value="<?php echo $r['catogry'] ?>" placeholder="Last Name" />
	    </div>
	</div>

	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
	    <div class="col-sm-10">
	      <input type="int" name="id"  class="form-control" id="input1" value="<?php echo $r['id'] ?>" placeholder="E-Mail" />
	    </div>
	</div>

	

	
	<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Update" />
</form>
	</div>
</div>
</body>
</html>