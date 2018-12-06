<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Adm side</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
		.create {
			margin: 15px;
		}
    </style>
</head>
<body>
	<div class="container">
		<form class="create" action="create.php"><button class="btn btn-success">Создать</button></form>
		<a href="index.php">Назад</a>
		<table class="table">
			<tr>
				<td><h4>Заголовок</h4></td>
				<td><h4>Изображение</h4></td>
				<td><h4>Контент</h4></td>
				<td><h4>Дата</h4></td>
				<td><h4>Действия</h4></td>
		    </tr>
		
			<?php
			require_once 'Classes/Database.php';

			$db = new Database;

	        $res = $db->sqlite->query('SELECT * FROM posts');
	        foreach ($res as $row)
	        {
	        	echo '<tr>';
		            echo '<td>'.$row['title'].'</td>';
		            echo '<td><img src='.$row['img'].'width=10% height=10%></td>';
		            echo '<td>'.$row['content'].'</td>';
		            echo '<td>'.$row['date'].'</td>';
		            echo '<td><p><a href="update.php?id='.$row['id'].'">Изменить</a>/<a href="delete.php?id='.$row['id'].'">Удалить</a></p></td>';
		        echo '</tr>';  
	        } 
	        ?> 
        </table>
	</div>

	<!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>