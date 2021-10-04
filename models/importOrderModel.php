<?php 
/**
 * 
 */
class ImportOrder
{
	
	public function ListOrder()
	{
		// code...
		include './database/db_connect.php';
		$result = mysqli_query($conn,"SELECT * FROM importorder");
		return $result;
		mysqli_close($conn);
	}
	public function CreateNew($user){
		include './database/db_connect.php';
		$dateCreated = date("Y-m-d H:i:s");
		$result = mysqli_query($conn,"INSERT INTO importorder (account_id,dateCreated) VALUES ('".$user."','".$dateCreated."')");
		if ($result === TRUE) {
  			$last_id = $conn->insert_id;
  			$detail = mysqli_query($conn,"INSERT INTO detailImport (idorder) VALUES ('".$last_id."')");
  		}
	}
	public function DeleteOrder($id){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"DELETE FROM importorder Where id ='".$id."'");
      		header('location:importOrder.php');
      		mysqli_close($conn);
 	}
}
?>