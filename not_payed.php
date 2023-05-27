<?php
    $conn = mysqli_connect(
    'localhost:3306',
    'root',
    'lab1234!',
    'test1');
    $sql = "SELECT * FROM name WHERE patient_name = idname";
    $result = mysqli_query($conn, $sql);
    // var_dump($result->num_rows);
    if ($result->num_rows > 0){
        while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo
              '<p>'
              . $jb_row[ 'idname' ]
              . $jb_row[ 'test' ]
              . '</p>'
            ;
          }
    }
    else{
        
    }
    
?>