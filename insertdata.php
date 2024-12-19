<?php
    include 'dbconnect.php';
    //จัดการข้อมูลที่ส่งมาจากฟอร์ม
    if (isset($_POST['submit'])) {
        $MedicineName = $_POST['medicine_name'];
        $MedID = $_POST['med_id'];
        $Price = $_POST['price'];
        $Reg_no = $_POST['reg_no'];
        $Indications = $_POST['indications'];
        $Precautions = $_POST['precautions'];
        $Contraindications = $_POST['contraindications'];
        $Effects = $_POST['effects'];
        $Dosage = $_POST['dosage'];
        $file_name = $_FILES['file']['name']; 
        $file_tmp = $_FILES['file']['tmp_name']; 

        $image_location = 'uploads/' . $file_name;
        
        $guery = mysqli_query($connection, "INSERT INTO addmedicines (medicine_name, med_id, price, reg_no, indications, precautions, contraindications, effects, dosage, file)
        VALUES ('$MedicineName', '$MedID', '$Price', '$Reg_no', '$Indications', '$Precautions', '$Contraindications', '$Effects', '$Dosage', '$file_name')");
        
        if ($query) {
            move_uploaded_file($file_tmp, $image_location);
            echo "เพิ่มยาสำเร็จ";
        } else {
            echo "ข้อผิดพลาด: " . mysqli_error($connection);
        }
    } else {
        echo "ไม่สามารถอัปโหลดไฟล์ได้";
        }   
?>