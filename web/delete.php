<?php
print_r($_GET);

require_once('condb.php');
/*อัพเดทฟอร์ม1*/
if (isset($_GET['ID_form1'])) {
	//* [ID_form1]

	// echo $_GET['ID_form1'];
	// //UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    // $sqlupdate = "UPDATE `form1` SET `สถานะ` = 'อนุมัติ' WHERE `form1`.`ID_form1` = '".$_GET['ID_form1']."'";
    // //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    // $sevasql = $conn->query($sqlupdate) or die($conn->error);
    
    // echo $_GET['ID_form1'];
	// //UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    // $sqlupdate = "UPDATE `form1` SET `สถานะ` = 'ไม่อนุมัติ' WHERE `form1`.`ID_form1` = '".$_GET['ID_form1']."'";
    // //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    // $sevasql = $conn->query($sqlupdate) or die($conn->error);
    echo $_GET['ID_form1'];
	//UPDATE `form1` SET `สถานะ` = 'sอนุมัติ' WHERE `form1`.`ID_form1` = 1;
    $sqlupdate = "DELETE FROM `form1`  WHERE `form1`.`ID_form1` = '".$_GET['ID_form1']."'";
    //$sqlupdate = "UPDATE `product` SET `Product_` = '" . $newname . "' WHERE `product`.`Product_ID` = '" . $_POST['idproduct'] . "'";
    $sevasql = $conn->query($sqlupdate) or die($conn->error);
    
    header('location:admin.php');

    
	# code...
}
?>