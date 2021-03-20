<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
//session_start();
//echo "<pre>";
//print_r($_SESSION);
//echo "<pre>";

?>

<body>

    <script type="text/javascript">
    console.log(window.location.href + "/")

    console.log("search " + window.location.search.split("=")[1])
    var search = window.location.search.split("=")[1]
    </script>



    

    <?php
    // Set the curl URL option
    $curl_handle = curl_init();

    $url = "http://127.0.0.1:3001/students/";

    curl_setopt($curl_handle, CURLOPT_URL, $url);

    // This option will return data as a string instead of direct output
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

    // Execute curl & store data in a variable
    $curl_data = curl_exec($curl_handle);

    curl_close($curl_handle);

    // Decode JSON into PHP array
    $response_data = json_decode($curl_data);


    $result = json_decode($curl_data, true);
    $context = $result['data'];



    ?>

    <div class="form-group">
        <div class="col-sm-5"> </div>
        <div class="col-sm-16" class="center">
            <?php
            echo ' <table id="example1" class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr class='info'>
            <th width='10%'>รหัสนิสิต</th>
          <th width='10%'>ชื่อ</th>
          <th width='10%'>นามสกุล</th>
          <th width='10%'>email</th>         
          <th width='10%'>phone</th>
          <th width='10%'>ภาค</th>
          <th width='10%'>คณะ</th>
          <th width='10%'>รหัสสาขา</th>         
          
       

        </tr>";
            echo "</thead>";/*
      while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["ID_form1"] .  "</td> ";
        echo "<td>" .$row["ชื่อ"] .  "</td> ";
        echo "<td>" .$row["นามสกุล"] .  "</td> ";
        echo "<td>" .$row["email"] .  "</td> ";        
        echo "<td>" .$row["phone"] .  "</td> ";
        echo "<td>" .$row["คณะ"] .  "</td> ";
        echo "<td>" .$row["รหัสสาขา"] .  "</td> ";       
        echo "<td>" .$row["สถานะ"] .  "</td> ";
        echo "<td><a href="php/update.php?ID_form1='" . $row["ID_form1"] . "'"</td>";
        
      echo "</tr>";
      }
    echo "</table>";
    */
  
    for($index=0;$index<count($context);$index++){
            ?>
            <tr>

                <td><?php echo $context[$index]["id"]; ?></td>
                <td><?php echo$context[$index]["first_name"]; ?></td>
                <td><?php echo $context[$index]["last_name"]; ?></td>
                <td><?php echo$context[$index]["email"]; ?></td>
                <td><?php echo $context[$index]["phone"]; ?></td>
                <td><?php echo $context[$index]["teaching"] ?></td>
                <td><?php echo$context[$index]["facuty"] ?></td>
                <td><?php echo $context[$index]["marjor"] ?></td>

              
                <?php
                    // if (isset($_SESSION)) {
                    //     # code...

                    //     if ($_SESSION['userlevel'] == 'a') {
                    //         # code...
                    //         if ($row["สถานะ"] != 'อนุมัติ') {

                    // ?>


               

                <?php
                        //     }else{
                        //      echo " <td> </td>";
                        //     }
                        // }
                    }    ?>


            </tr>

            </table>
        </div>
    </div>
    </div>

</body>

</html>