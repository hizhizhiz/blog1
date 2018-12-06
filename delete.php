<?php  
if (isset($_GET['id']))
{
	$id = $_GET['id'];

	require_once 'Classes/Database.php';
	$db = new Database;

	$stmt = $db->sqlite->prepare('DELETE FROM posts WHERE id = :id');
	$stmt->bindParam(':id', $id);
	$stmt->execute();

	echo 'Success<br>';
	echo '<a href="adm.php">Назад</a>';

}


?>