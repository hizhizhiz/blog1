<?php 
date_default_timezone_set('Asia/Vladivostok');
$date = date('m/d/Y h:i:s a', time());

if (isset($_POST['title']) && isset($_POST['img']) && isset($_POST['content']) && isset($_POST['date']))
{
	$title = $_POST['title'];
	$img = $_POST['img'];
	$content = $_POST['content'];
	$currentDate = $_POST['date'];

	require_once 'Classes/Database.php';
	$db = new Database;

	try
	{
		$stmt = $db->sqlite->prepare('INSERT INTO posts (title, img, content, date) VALUES (:title, :img, :content, :currentDate)');

		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':img', $img);
		$stmt->bindParam(':content', $content);
		$stmt->bindParam(':currentDate', $currentDate);

		$stmt->execute();

		echo 'Success';

		
	} catch(Exception $e) {
		echo $e->getMessage();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
		.table {
			margin-top: 10px;
		}

    	.table td {
    		border: none;
    	}

    	.btn {
    		float: right;
    	}

    	.container {
    		border: 1px solid black;
    		border-radius: 15px;
    		margin: 100px auto;
    		width: 500px;
    	}
    </style>
</head>
<body>
	<div class="container">
		<form action="create.php" method="POST">
			<table class="table">
				<tr>
					<td>Заголовок:</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>			
					<td>Изображение:</td>
					<td><input type="text" name="img"></td>
				</tr>
				<tr>
					<td>Контент:</td>
					<td><textarea cols="30" rows="10" name="content"></textarea></td>
				</tr>
				<tr>
					<td><input type="hidden" value="<?php echo $date; ?>" name="date"></td>
					<td><button class="btn btn-success">Создать</button></td>
				</tr>
			</table>
		</form>
	</div>

	<!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>