<!DOCTYPE html>
</head>
<html>

<head>
    <meta charset="utf-8">
    <title>คำร้องทั่วไป</title>
    <meta http-equiv=Content-Type content="text/html; charset = utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    /* h1 {
        color: black;
        text-shadow: 3px 3px 8px gray;
        text-align: left;
        text-transform: uppercase;
    } */

    /* h2 {
        color: red;
        text-shadow: 2px 2px 5px black;
        text-decoration: underline;
    } */

    label {
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
    }
    </style>

</head>

<body>

    <?php
    
        // $url = 'http://127.0.0.1:3001/students/';

        // $client = curl_init();

        // $options = array(
        //     CURLOPT_URL				=> $url, // Set URL of API
        //     CURLOPT_CUSTOMREQUEST 	=> "GET", // Set request method
        //     CURLOPT_RETURNTRANSFER	=> true, // true, to return the transfer as a string
        // );

        // curl_setopt_array( $client, $options );

        // // Execute and Get the response
        // $response = curl_exec($client);
        // // Get HTTP Code response
        // $httpCode = curl_getinfo($client, CURLINFO_HTTP_CODE);
        // // Close cURL session
        // curl_close($client);

        // // Show response
        // echo '<h3>HTTP Code</h3>';
        // echo $httpCode;
        // echo '<h3>Response</h3>';
        // echo $response;
    
    ?>

    <form action="process.php" method="post">


        <div class="container">



            <br>
            <h1>คำร้องทั่วไป</h1><br>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="ชื่อ-นามสกุล">ชื่อ-นามสกุล</label>
                </div>
                <input type="text" class="form-control" name="ชื่อ" placeholder="ชื่อ">
                <input type="text" class="form-control" name="นามสกุล" placeholder="นามสกุล">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="รหัสนิสิต">รหัสนิสิต</label>
                </div>
                <input type="text" class="form-control" id="รหัสนิสิต" name="รหัสนิสิต" placeholder="รหัสนิสิต"
                    required=true>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="ช่องทางการติอต่อ">ช่องทางการติอต่อ</label>
                </div>
                <input type="text" class="form-control" name="เบอร์โทรศัพท์" placeholder="เบอร์โทรศัพท์">
                <input type="text" class="form-control" name="email" placeholder="E-mail">
            </div>

        </div>


        <div class="container">
            <div class="form-group">
                <div class="col-sm-4 control-label ">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="การเรียนการสอน">การเรียนการสอน</label>
                            <select class="custom-select" id="การเรียนการสอน" name="การเรียนการสอน" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="ภาคปกติ">ภาคปกติ</option>
                                <option value="ภาคพิเศษ">ภาคพิเศษ</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label ">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="คณะ">คณะ</label>
                            <select class="custom-select" id="คณะ" name="คณะ" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="เศรษฐศาสตร์ ศรีราชา">เศรษฐศาสตร์ ศรีราชา</option>
                                <option value="พาณิชยนาวีนานาชาติ">พาณิชยนาวีนานาชาติ</option>
                                <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                                <option value="วิทยาศาสตร์ ศรีราชา">วิทยาศาสตร์ ศรีราชา</option>
                                <option value="คณะวิศวกรรมศาสตร์ศรีราชา">คณะวิศวกรรมศาสตร์ศรีราชา</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="รหัสสาขา">รหัสสาขา</label>
                            <select class="custom-select" id="รหัสสาขา" name="รหัสสาขา" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="G01">G01</option>
                                <option value="G02">G02</option>
                                <option value="M01">M01</option>
                                <option value="M02">M02</option>
                                <option value="M03">M03</option>
                                <option value="M04">M04</option>
                                <option value="M05">M05</option>
                                <option value="T01">T01</option>
                                <option value="R01">R01</option>
                                <option value="R02">R02</option>
                                <option value="R03">R03</option>
                                <option value="R04">R04</option>
                                <option value="R05">R05</option>
                                <option value="R06">R06</option>
                                <option value="R07">R07</option>
                                <option value="R08">R08</option>
                                <option value="R09">R09</option>
                                <option value="R10">R10</option>
                                <option value="R11">R11</option>
                                <option value="R12">R12</option>
                                <option value="R13">R13</option>
                                <option value="R14">R14</option>
                                <option value="R15">R15</option>
                                <option value="R16">R16</option>
                                <option value="R17">R17</option>
                                <option value="S01">S01</option>
                                <option value="S02">S02</option>
                                <option value="S03">S03</option>
                                <option value="S05">S05</option>
                                <option value="S06">S06</option>
                                <option value="S08">S08</option>
                                <option value="S09">S09</option>
                                <option value="S10">S10</option>
                                <option value="S11">S11</option>
                                <option value="T02">T02</option>
                                <option value="T03">T03</option>
                                <option value="T04">T04</option>
                                <option value="T05">T05</option>
                                <option value="T07">T07</option>
                                <option value="T08">T08</option>
                                <option value="T12">T12</option>
                                <option value="T13">T13</option>
                                <option value="T14">T14</option>
                                <option value="T17">T17</option>
                                <option value="T18">T18</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2 control-label">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="ชั้นปี">ชั้นปีที่</label>
                            <select class="custom-select" id="ชั้นปี" name="ชั้นปี" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!--ขอลงทะเบียนเพิ่ม-->

        </div>








        <div class="container">


            <div>
                <br>
                <h2>จุดประสงค์</h2>

                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" name="จุดประสงค์"></textarea>

                </div>



            </div>
        </div>






        <div class="container">
            <input type="submit" value="submit">


        </div>

    </form>
    <div class="container">
        <a href="admin.php"><button>จัดการคำร้อง</button>
        </a>
    </div>


</body>


</html>