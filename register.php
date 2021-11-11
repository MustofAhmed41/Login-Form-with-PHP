<?php



	if(!empty($_POST)){
	if (isset($_POST)) {


		$file = fopen("write2.csv","r");
		$content = fgetcsv($file);
		if ($content) {
			$row_number = $content[0];

		$row_number++;
		fclose($file);

		$inputArray2 = array(
			$row_number
		);

		$file2 = fopen("write2.csv","w");
		fputcsv($file2,$inputArray2);
		fclose($file2);

		$fp = fopen('write.csv', 'a');
		date_default_timezone_set('Asia/Dhaka');
		$user1 =  $_POST['user_name'];
		$user2 = $_POST['user_email'];
		$user3 = $_POST['user_phone'];
		$user4 = $_POST['user_message'];
		$user5 = date('Y/m/d H:i:s');
		$inputArray = array(
			array($row_number,$user1, $user2, $user3, $user4,$user5)
		);

		foreach ($inputArray as $inputArray) {
		    fputcsv($fp, $inputArray);
		}

		fclose($fp);

		}


	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Third Assignment</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<form action="" method="POST" enctype="multipart/form-data">
		<div class="row ">

			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>

			<div class="col-lg-6 col-md-6 infinity-form-container">
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">


					<div class="text-center mb-4">
				    <h4>Send Us A Message</h4>
				  </div>

					<form class="px-3">

						<div class="form-group mb-3 form-input">
							<span><i class="fa fa-user-o"></i></span>
								<input type="text" name="user_name"  placeholder="Enter your name" class="form-control" required />
						</div>
						<div class="form-group mb-3 form-input">
							<span><i class="fa fa-envelope-o"></i></span>
								<input type="email" name="user_email"  placeholder="Enter your email" class="form-control" required />
						</div>
						<div class="form-group mb-3 form-input">
							<span><i class="fa fa-phone"></i></span>
								<input type="phone" name="user_phone"  placeholder="Enter your phone number" class="form-control" required />
						</div>
						<div class="form-group mb-3 form-input">
							<span><i class="fa fa-envelope-o"></i></span>
								<textarea style=" padding-left:46px" class="form-control" name="user_message" placeholder="Enter your message"></textarea>
						</div>

				    <div class="form-group mb-3">
							<button style="width:100%; display:block; border-radius:20px" type="submit" value="submit" class="btn btn-primary">Send Message </button>
						</div>

						<a  style="width:100%; display:block; border-radius:20px" class="btn btn-success"
						href="tableShow.php" >View Sent Messages</a>
						</form>


				</div>
			</div>

		</div>
	</div>
</body>
</html>
