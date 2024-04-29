<?php 

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'ciastcommunity');

// Check DB connection
if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}

function register($condb, $data)
{
    $username = strtolower(stripslashes($data['username']));
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($condb, $data['password']);
    $repeatPassword = mysqli_real_escape_string($condb, $data['password2']);

    // Cek existing user
    $result = mysqli_query($condb, "SELECT username FROM login WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
                alert('Username sudah digunakan!');
              </script>";
        return false;
    }

    // Cek pengesahan password
    if ($password != $repeatPassword) {
        echo "<script>
                alert('Password tidak sama!') 
            </script>";
        return false;
    }

    // Encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user ke dalam database
    $query = mysqli_query($condb, "INSERT INTO login VALUES('', '$username','$email', '$password')");

    return mysqli_affected_rows($condb);
}

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