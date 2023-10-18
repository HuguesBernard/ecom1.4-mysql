<?php

global $conn;
function selectUserByIdIndex(){
    $result1 = mysqli_query($conn, "SELCT * FROM usercWHERE id=$id");

    $data = mysqli_fetch_row($result);

    return $data;
}


function selectUserByIdAssoc(){

}

?>
