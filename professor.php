<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$conn = mysqli_connect(
  'localhost:3306',
  'root',
  'lab1234!',
  'hello');

$licence = $_POST['licence'];
$sql = "SELECT patient.name
        FROM patient
        JOIN professor ON patient.professor_license_number = professor.license_number
        WHERE professor.license_number = '".$licence."'";
$result = mysqli_query($conn, $sql);

if ($re = mysqli_fetch_array($result)){
    while(1){
        echo "환자명<br>";
        print($re[0]);
        echo "<br>";
        if(!($re = mysqli_fetch_array($result))){
            print("------end of results------");
            break;
        }
    }
    
}
else{
    print("해당 레코드 없음");
}   