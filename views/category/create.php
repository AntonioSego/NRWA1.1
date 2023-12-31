<!DOCTYPE html>
<html>
<head>
	<title>Create New Category</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			margin: 0 auto;
			max-width: 600px;
			padding: 20px;
		}

		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		label {
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
		}

		.fa {
			padding: 10px;
			font-size: 20px;
			width: 50px;
			text-align: center;
			text-decoration: none;
			margin: 5px 2px;
			border-radius: 50%;
		}

		.fa:hover {
			opacity: 0.7;
		}

		.fa-facebook {
			background: #3B5998;
			color: white;
		}

		.fa-twitter {
			background: #55ACEE;
			color: white;
		}

		.fa-linkedin {
			background: #007bb5;
			color: white;
		}

		.fa-github {
			background: #333333;
			color: white;
		}
	</style>
</head>
<body>

	<div class="container">

		<h2>Create New Category</h2>

		<form action="/categories/store" method="POST">

			<label for="CategoryID">Category ID</label>
			<input type="text" id="CategoryID" name="CategoryID" placeholder="Enter Category ID">

			<label for="CategoryName">Category Name</label>
			<input type="text" id="CategoryName" name="CategoryName" placeholder="Enter Category Name">

			<label for="CategoryActive">Category Active</label>
			<input type="text" id="CategoryActive" name="CategoryActive" placeholder="Enter Category Active">

			<label for="CategoryStatus">Category Status</label>
			<input type="text" id="CategoryStatus" name="CategoryStatus" placeholder="Enter Rate">



            <input type="submit" value="Create"> 
            </form>
            </div>
            </body>
            </html>