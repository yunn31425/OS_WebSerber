<?php
    $conn = mysqli_connect(
    'localhost:3306',
    'root',
    'lab1234!',
    'hello');
    $sql = "SELECT patient.name
            FROM patient
            JOIN professor ON patient.professor_license_number = professor.license_number
            WHERE professor.license_number = '452314563'";
    $result = mysqli_query($conn, $sql);
    // var_dump($result->num_rows);
    if ($result->num_rows > 0){
        while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo
              '<p>'
              . $jb_row[ 'patient.name' ]
              . '</p>'
            ;
          }
    }
    else{
        
    }
    
?>