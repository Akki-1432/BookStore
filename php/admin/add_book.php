<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									June 2021
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
<!-- 				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Default Basic Forms</h4>
							<p class="mb-30 font-14">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Text</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Search</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Search Here" type="search">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="bootstrap@example.com" type="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">URL</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="https://getbootstrap.com" type="url">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1-(111)-111-1111" type="tel">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="password" type="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Number</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="100" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Month</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control month-picker" placeholder="Select Month" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Time</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" placeholder="Select time" type="text">
							</div>
						</div> -->
						<!-- < --><!-- div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Color</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="#563d7c" type="color">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="50" type="range">
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="copy-pre"> -->



	<form method="POST" action="">
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" name="category">
				<option  >select category</option>

				<?php

				   $query = "select * from category";

				   $t = mysqli_query($conn,$query);
				   if ($t) {
				 
				   while($result = mysqli_fetch_array($t))
				   {

				?>
				<option value="<?php echo $result['cat_id']?>"><?php echo $result['cat_name']?></option>
				<?php

				   }
				}
				else
				{
					echo "<script>alert('error')</script>";
				}
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Subcategory Name</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" name="subcategory">
				<option  >select subcategory</option>

				<?php

				   $query = "select * from subcategory";

				   $t = mysqli_query($conn,$query);
				   if ($t) {
				 
				   while($result = mysqli_fetch_array($t))
				   {

				?>
				<option value="<?php echo $result['subcat_id']?>"><?php echo $result['subcat_name']?></option>
				<?php

				   }
				}
				else
				{
					echo "<script>alert('error')</script>";
				}
				?>
			</select>
		</div>
	</div>

	
    	<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select Book</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>

		
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book name</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name="book_name" placeholder="Book Name">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book description</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" name="description" placeholder="Book description" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book publisher</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control"  name="publisher" placeholder="Book publisher" type="text">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book language</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" name="language" placeholder="Book language" type="text">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book authorname</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" name="author_name" placeholder="Book authorname" type="text">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book price</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" name="price" placeholder="Book price" type="text">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Book stock</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" name="stock" placeholder="Book stock" type="text">
		</div>
	</div>

	<div class="form-group row">

							<div class="col-sm-12 col-md-10">
								<input class="form-control"  name="submit" type="submit" value="submit">
							</div>
						</div>
					</form>
			<?php include('include/footer.php'); ?>
	<!-- 	</div>
	</div> -->
	<?php include('include/script.php'); ?>
</body>
</html>

<?php 
 	include 'config.php';

 	if(isset($_POST['submit']))
 	{
 		extract($_POST);
 		$query = "INSERT INTO book(cat_id,subcat_id,book_name,description,publisher,language,author_name,stock,price) values('$category','$subcategory',$book_name','$description','$publisher','$language','$author_name','$stock','$price')";
 		$t =mysqli_query($conn,$query);

 		if($t == true)
 		{
 			echo "<script> alert('data inserted')</script>";
 			echo "<script> window.location.href = 'view_book.php' </script>";
 		}
 		else
 		{
 			echo "<script> alert('data not inserted')</script>";
 		}
 	}
?>
