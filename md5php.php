

<html>



	<form action="" method="POST" >

	<input type="text" name="text"/>
	<input type="submit" name="submit"/ >


	</form>	


</html>

<?php
if (isset($_POST['text'])){
	$md=$_POST['text'];
	
	if ($md!=''){
	
		echo md5($md);
		
		
	}
} else {
echo 'No Strings Are Provided';
}
?>
