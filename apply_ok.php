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
    $file = $_POST['file'];

    $conn= mysqli_connect('localhost', 'yeon', '7173', 'snu_recruit');

    $sql = "
        INSERT INTO apply(id, name, student_id, department, snulife_id, phone, semester, tool, intro, file) VALUES (0, ?, ?, ?, ?, ?, ?, ?, ?, ?);
    ";

    $stmt = mysqli_prepare($conn, $sql);
    if($stmt === false) { echo('Statement 생성 실패 : ' . mysqli_error($conn)); exit(); }

    $bind = mysqli_stmt_bind_param($stmt, "sssssssss", $name, $student_id, $department, $snulife_id, $phone, $semester, $tool, $intro, $file);
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