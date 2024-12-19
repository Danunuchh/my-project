<?php

echo "ชื่อยา = ".$_POST['medicine_name']; "<br>";
echo "รหัสยา = ".$_POST['med_id']; "<br>";
echo "ราคา = ".$_POST['price']; "<br>";
echo "เลข = ".$_POST['reg_no']; "<br>";
echo "สรรพคุณ = ".$_POST['indications']; "<br>";
echo "ข้อควรระวัง = ".$_POST['precautions']; "<br>";
echo "ข้อห้ามใช้ = ".$_POST['contraindications']; "<br>";
echo "ข้อควรระวัง = ".$_POST['effects']; "<br>";
echo "วิธีใช้ยา = ".$_POST['dosage'];

?>

<!DOCTYPE html>
<html>
    <style>
        .container {  /*พื้นหลังสีฟ้า*/
            width: 50%;
            margin: 20px auto;
            margin-top: 5%;
            padding: 60px;
            background-color: #E0FBFF;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
    </style>
    <body>
    <a href="addmed.php" class="btn btn-primary">กลับสู่หน้าเพิ่มยา</a>
    </body>
</html>