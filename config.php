<?php
//database connect 
$condb = mysqli_connect('localhost','root', '', 'ciastcommunity');
//check db connection
if(!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}

//query funtion
function ambildata($condb, $query)
{
    $result = mysqli_query($condb, $query); //Query
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // Simpan assoc data ke dlm $row
    }
    // Free result set
    mysqli_free_result($result);

    return $rows;
}

?>
