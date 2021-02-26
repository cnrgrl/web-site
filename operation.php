<?php 

include 'connection.php';


//UPDATE BENUTZER
if (isset($_POST['update'])) {
	
	$BENUTZER_ID=$_POST['BENUTZER_ID'];

	$kaydet=$conn->prepare("UPDATE BENUTZER set
		BENUTZER_ID=:a,
		BENUTZER_NAME=:b,
		BENUTZER_ROLE_ID=:c
		where BENUTZER_ID={$_POST['BENUTZER_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['BENUTZER_ID'],
		'b' => $_POST['BENUTZER_NAME'],
		'c' => $_POST['BENUTZER_ROLE_ID']
	));
}


//UPDATE ROLE
if (isset($_POST['update_role'])) {
	
	$ROLE_ID=$_POST['ROLE_ID'];

	$kaydet=$conn->prepare("UPDATE ROLE set
		ROLE_ID=:a,
		ROLE_NAME=:b
		
		where ROLE_ID={$_POST['ROLE_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['ROLE_ID'],
		'b' => $_POST['ROLE_NAME']
	
	));
}




//UPDATE RECHTE
if (isset($_POST['update_recht'])) {
	
	$RECHTE_ID=$_POST['RECHTE_ID'];

	$kaydet=$conn->prepare("UPDATE RECHTE set
		RECHTE_ID=:a,
		RECHTE_NAME=:b
		
		where RECHTE_ID={$_POST['RECHTE_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['RECHTE_ID'],
		'b' => $_POST['RECHTE_NAME']
	
	));
}





//DELETE BENUTZER

if ($_GET['qdelete']=="ok") {
	

	$del=$conn->prepare("DELETE from BENUTZER where BENUTZER_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['BENUTZER_ID']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:benutzer.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:benutzer.php?durum=no");
		exit;
	}


}


//DELETE ROLE

if ($_GET['qdelete']=="role") {
	

	$del=$conn->prepare("DELETE from ROLE where ROLE_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['ROLE_ID']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:role.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:role.php?durum=no");
		exit;
	}


}





//DELETE RECHTE

if ($_GET['qdelete']=="recht") {
	

	$del=$conn->prepare("DELETE from RECHTE where RECHTE_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['RECHTE_ID']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:recht.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:recht.php?durum=no");
		exit;
	}


}








//INSERT BENUTZER

if (isset($_POST['insertislemi'])) {
	
	

	$kaydet=$conn->prepare("INSERT into BENUTZER set
		BENUTZER_ID=:x,
		BENUTZER_NAME=:y,
		BENUTZER_ROLE_ID=:z
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['BENUTZER_ID'],
		'y' => $_POST['BENUTZER_NAME'],
		'z' => $_POST['BENUTZER_ROLE_ID']
	));
}



//INSERT ROLE

if (isset($_POST['insert_role'])) {
	
	

	$kaydet=$conn->prepare("INSERT into ROLE set
		ROLE_ID=:x,
		ROLE_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['ROLE_ID'],
		'y' => $_POST['ROLE_NAME']
	));
}





//INSERT RECHTE

if (isset($_POST['insert_recht'])) {
	
	

	$kaydet=$conn->prepare("INSERT into RECHTE set
		RECHTE_ID=:x,
		RECHTE_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['RECHTE_ID'],
		'y' => $_POST['RECHTE_NAME']
	));
}




?>