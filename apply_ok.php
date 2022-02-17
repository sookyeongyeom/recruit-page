<?php

    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $department = $_POST['department'];
    $snulife_id = $_POST['snulife_id'];
    $phone = $_POST['phone'];
    $semester = $_POST['semester'];
    $tool = $_POST['tool'];
    $tool = implode('|', $tool);
    $intro = $_POST['intro'];
    
    $error = $_FILES['file']['error'];
    $tmpfile = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $filename = $name."_".$filename;
    $folder = "./file/".$filename;

    if( $error != UPLOAD_ERR_OK ){
        switch( $error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "<script>alert('파일이 적정 용량을 초과합니다.');";
                    echo "window.history.back()</script>";
                    exit;
        }
    }

    move_uploaded_file($tmpfile, $folder);

    $conn= mysqli_connect('localhost', 'yeon', '7173', 'snu_recruit');

    $sql = "
        INSERT INTO apply(id, name, student_id, department, snulife_id, phone, semester, tool, intro, file) VALUES (0, ?, ?, ?, ?, ?, ?, ?, ?, ?);
    ";

    $stmt = mysqli_prepare($conn, $sql);
    if($stmt === false) { echo('Statement 생성 실패 : ' . mysqli_error($conn)); exit(); }

    $bind = mysqli_stmt_bind_param($stmt, "sssssssss", $name, $student_id, $department, $snulife_id, $phone, $semester, $tool, $intro, $filename);
    if($bind === false) { echo('파라미터 바인드 실패 : ' . mysqli_error($conn)); exit(); }

    $exec = mysqli_stmt_execute($stmt);

    if($exec){
        echo "<script>alert('지원이 완료되었습니다.');";
        echo "location.href='index.html';</script>";
        exit;
    }
    else{
       echo "<script>alert('지원이 실패했습니다.');</script>";
       echo mysqli_error($conn);
       exit;
    }
?>