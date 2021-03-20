<?php 
//include 'connect.php';
?>


<?php
   
	

  	$first_name = $_POST['ชื่อ'];
  	$last_name = $_POST['นามสกุล'];
  	$ID = $_POST['รหัสนิสิต'];
  	$เบอร์โทรศัพท์ = $_POST['เบอร์โทรศัพท์'];
  	$email = $_POST['email'];
  	$การเรียนการสอน = $_POST['การเรียนการสอน'];
  	$คณะ = $_POST['คณะ'];
  	$รหัสสาขา = $_POST['รหัสสาขา'];
  	$ชั้นปี = $_POST['ชั้นปี'];
  	$เนื่องจาก = $_POST['จุดประสงค์'];

  	// mysqli_query ($con_form1, "INSERT INTO  form1 (ชื่อ, นามสกุล, รหัสนิสิต, เบอร์โทรศัพท์, email, การเรียนการสอน, คณะ, รหัสสาขา, ชั้นปี, จุดประสงค์,สถานะ)
  	// 						 VALUES ('$firstname','$lastname','$รหัสนิสิต','$เบอร์โทรศัพท์' ,'$email', '$การเรียนการสอน','$คณะ','$รหัสสาขา','$ชั้นปี','$เนื่องจาก','รออนุมัติ')");

    echo "<script>
      alert('กรอกข้อมูลสำเร็จ');
      window.location.href='index.php';
      </script>";


	$url = 'http://127.0.0.1:3001/students';

$client = curl_init();

// "id" : "5630252589",
//     "first_name" : "pipusana",
//     "last_name" : "petgumpoom",
//     "email" : "pipusana.p@gmail.com",
//     "gender" : "male",
//     "age" : 26,
//     "picture_url": "https://scontent.fbkk12-1.fna.fbcdn.net/v/t1.0-9/1005556_545569122156064_28511899_n.jpg?_nc_cat=101&ccb=2&_nc_sid=174925&_nc_ohc=Wl8T81WCp_oAX-b4-1V&_nc_ht=scontent.fbkk12-1.fna&oh=cb2967395d3e8555a7a33c0bf4cf58b4&oe=60308979",
//     "height": 180,
//     "weight": 74.2,
//     "hobby": ["jogging", "gaming"],
//     "country" : "thailand",
//     "city" : "bangkok"


// echo($ID);



$data = array("id"=>$ID, "first_name"=>$first_name,"last_name"=>$last_name, "email"=> $email, "phone"=> $เบอร์โทรศัพท์,"teaching"=>$การเรียนการสอน,"facuty"=>$คณะ,"height" =>$การเรียนการสอน,"marjor"  =>$รหัสสาขา, "grade"=> $ชั้นปี,"des" => 	$เนื่องจาก);
$data = json_encode($data);

$options = array(
    CURLOPT_URL				=> $url, // Set URL of API
    CURLOPT_CUSTOMREQUEST 	=> "POST", // Set request method
    CURLOPT_RETURNTRANSFER	=> true, // true, to return the transfer as a string
    CURLOPT_POSTFIELDS 		=> $data, // Send the data in HTTP POST
);

curl_setopt_array( $client, $options );

// Execute and Get the response
$response = curl_exec($client);
// Get HTTP Code response
$httpCode = curl_getinfo($client, CURLINFO_HTTP_CODE);
// Close cURL session
curl_close($client);

// // Show response
// echo '<h3>HTTP Code</h3>';
// echo $httpCode;
// echo '<h3>Response</h3>';
// echo $response;

   
exit;

?>