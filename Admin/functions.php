<?php

// Sambungan ke database
$condb = mysqli_connect('localhost', 'root', '', 'ciastcommunity');

// Check DB connection
if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query function
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

function adminlog($condb, $data)
{
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($condb, $data['password']);


    // Cek existing user
    $result = mysqli_query($condb, "SELECT username FROM adminlogin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
                alert('Username sudah digunakan!');
              </script>";
        return false;
    }

    // Cek pengesahan password
    // if ($password != $repeatPassword) {
    //     echo "<script>
    //             alert('Password tidak sama!') 
    //         </script>";
    //     return false;
    // }

    // Encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user ke dalam database
    $query = mysqli_query($condb, "INSERT INTO adminlogin VALUES('', '$username', '$password')");

    return mysqli_affected_rows($condb);
}

/// Fungsi daftar pelajar
function daftar($condb, $reports)
{

    // Simpan setiap data dari post $data ke dalam variables
    $fname = htmlspecialchars($reports['fname']);
    $lname = htmlspecialchars($reports['lname']);
    $nokp = htmlspecialchars($reports['nokp']);
    $ndp = htmlspecialchars($reports['ndp']);
    $email = htmlspecialchars($reports['email']);
    $kursus = htmlspecialchars($reports['kursus']);

    // Upload gambar
    $gambar = upload($condb, $nokp); //value is $newFileName;
    if (!$gambar) {
        return false;
    }

    // Query INSERT data ke dalam database
    $query = "INSERT INTO pelajar
     VALUES
     ('',
     '$fname',
     '$lname',
     '$nokp',
     '$ndp',
     '$email',
     '$kursus',
     '$gambar'
     )";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}


// Fungsi upload gambar
function upload($condb, $nokp)
{
    $namaFile = $_FILES['gambar']['name'];
    $saizFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek jika tiada gambar diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek jika hanya format gambar diupload
    $extGambarValid = ['jpg', 'jpeg', 'png'];

    // $extGambar = explode('.', $namaFile);
    $extGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $extGambarLower = strtolower($extGambar);

    if (!in_array($extGambarLower, $extGambarValid)) {
        echo "<script>
                alert('Anda upload format gambar yang tidak dibenarkan!\\n (Hanya upload format gambar .jpg, atau .jpeg, atau .png)');
              </script>";
        return false;
    }

    // Cek jika saiz gambar < max (1048576 bytes ~~ 1MB)
    // $maxSize = 4308706;
    // if ($saizFile > $maxSize) {
    //     echo "<script>
    //             alert('Saiz gambar melebihi 1MB!');
    //           </script>";
    //     return false;
    // }

    // Rename and save gambar to the directory img/ with $nokp
    // Rename the file with $nokp.$extGambar
    $newFileName = $nokp . '.' . $extGambarLower;

    // Set img/ directory variable
    $imgDir = '../img/';

    // Check if the file with the same name already exists
    $destination = $imgDir . $newFileName;
    if (file_exists($destination)) {
        // Delete the existing file
        unlink($destination);

        // Empty gambar value in database
        emptyGambar($condb, $nokp);
    }

    // Simpan gambar $tmpName ke directory img/ with the new file name
    // $destination = $imgDir . $newFileName;

    if (move_uploaded_file($tmpName, $destination)) {
        return $newFileName;
    } else {
        echo "<script>alert('Gagal menyimpan gambar!');</script>";
        return false;
    }
}


// Fungsi delete nama gambar di dalam table pelajar sebelum simpan gambar baharu
function emptyGambar($condb, $nokp)
{
    // Query to update the gambar field to NULL or an empty value
    $query = "UPDATE pelajar SET gambar = NULL WHERE nokp = '$nokp'";

    // Run query
    mysqli_query($condb, $query);
}

// Fungsi delete pelajar
function padampelajar($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM pelajar WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM pelajar WHERE id = $id");

    return mysqli_affected_rows($condb);
}


// Fungsi edit pelajar
function edit($condb, $edit)
{

    $id = $edit['id'];
    $fname = htmlspecialchars($edit['fname']);
    $lname = htmlspecialchars($edit['lname']);
    $nokp = htmlspecialchars($edit['nokp']);
    $ndp = htmlspecialchars($edit['ndp']);
    $email = htmlspecialchars($edit['email']);
    $kursus = htmlspecialchars($edit['kursus']);
    $gambarLama = htmlspecialchars($edit['gambarLama']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = upload($condb, $nokp);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE pelajar SET
     fname = '$fname',
     lname = '$lname',
     nokp = '$nokp',
     ndp = '$ndp',
     email = '$email',
     kursus = '$kursus',
     gambar = '$gambar'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function cari($condb, $keyword)
{
    $query = "SELECT * FROM pelajar WHERE 
    fname LIKE '%$keyword%' OR
    ndp LIKE '%$keyword%' OR
    lname LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    kursus LIKE '%$keyword%'
    ";

    // Recall ambildata function to execute the query and retrieve results
    $rows = ambildata($condb, $query);

    // Process the $rows data
    return $rows;
}


function news($condb, $posts)
{
    // Simpan setiap data dari post $data ke dalam variables

    $ptitle = htmlspecialchars($posts['ptitle']);
    $pdetails = htmlspecialchars($posts['pdetails']);


    $gambar = uploads($condb, $ptitle);
    if (!$gambar) {
        return false;
    }

    $gambar2 = uploads1($condb, $ptitle);
    if (!$gambar2) {
        return false;
    }

    // if($_FILES['gambar']['error'] === 4) {
    //     $pictures = $gambar; 
    // }
    // // Upload gambar
    // $gambar = uploads($condb, $ptitle); //value is $newFileName;
    // if (!$gambar) {
    //     return false;
    // }

    // Query INSERT data ke dalam database
    $query = "INSERT INTO reports
     VALUES
    ('',
    '$ptitle',
    '$pdetails',
    '$gambar',
    '$gambar2'
    )";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function deletenews($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM reports WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM reports WHERE id = $id");

    return mysqli_affected_rows($condb);
}

function uploads()
{
    $namaFile = $_FILES['gambar']['name'];
    // $saizFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek jika tiada gambar diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek jika hanya format gambar diupload
    $extGambarValid = ['jpg', 'jpeg', 'png'];

    // $extGambar = explode('.', $namaFile);
    $extGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $extGambarLower = strtolower($extGambar);

    if (!in_array($extGambarLower, $extGambarValid)) {
        echo "<script>
                alert('Anda upload format gambar yang tidak dibenarkan!\\n (Hanya upload format gambar .jpg, atau .jpeg, atau .png)');
              </script>";
        return false;
    }

    // Cek jika saiz gambar < max (1048576 bytes ~~ 1MB)
    // $maxSize = 1000000;
    // if ($saizFile > $maxSize) {
    //     echo "<script>
    //             alert('Saiz gambar melebihi 1MB!');
    //           </script>";
    //     return false;
    // }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extGambarLower;

    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);
    return $namaFileBaru;
}

function uploads1()
{
    $namaFile = $_FILES['gambar2']['name'];
    // $saizFile = $_FILES['gambar2']['size'];
    $error = $_FILES['gambar2']['error'];
    $tmpName = $_FILES['gambar2']['tmp_name'];

    // Cek jika tiada gambar diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek jika hanya format gambar diupload
    $extGambarValid = ['jpg', 'jpeg', 'png'];

    // $extGambar = explode('.', $namaFile);
    $extGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $extGambarLower = strtolower($extGambar);

    if (!in_array($extGambarLower, $extGambarValid)) {
        echo "<script>
                alert('Anda upload format gambar yang tidak dibenarkan!\\n (Hanya upload format gambar .jpg, atau .jpeg, atau .png)');
              </script>";
        return false;
    }

    // Cek jika saiz gambar < max (1048576 bytes ~~ 1MB)
    // $maxSize = 1000000;
    // if ($saizFile > $maxSize) {
    //     echo "<script>
    //             alert('Saiz gambar melebihi 1MB!');
    //           </script>";
    //     return false;
    // }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extGambarLower;

    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);
    return $namaFileBaru;
}

function editnews($condb, $edit)
{

    $id = $edit['id'];
    $ptitle = htmlspecialchars($edit['ptitle']);
    $pdetails = htmlspecialchars($edit['pdetails']);
    $gambarLama = htmlspecialchars($edit['gambarLama']);
    $gambarLama2 = htmlspecialchars($edit['gambarLama2']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
        $gambar2 = $gambarLama2;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = uploads($condb, $ptitle);
        $gambar2 = uploads1($condb, $ptitle);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE reports SET
     ptitle = '$ptitle',
     pdetails = '$pdetails',
     gambar = '$gambar',
     gambar2 = '$gambar2'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function sports($condb, $posts)
{
    // Simpan setiap data dari post $data ke dalam variables

    $comments = htmlspecialchars($posts['comments']);


    $gambar = uploads();
    if (!$gambar) {
        return false;
    }

    // if($_FILES['gambar']['error'] === 4) {
    //     $pictures = $gambar; 
    // }
    // // Upload gambar
    // $gambar = uploads($condb, $ptitle); //value is $newFileName;
    // if (!$gambar) {
    //     return false;
    // }

    // Query INSERT data ke dalam database
    $query = "INSERT INTO sports
     VALUES
    ('',
    '$gambar',
    '$comments'
    )";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function editsports($condb, $edit)
{

    $id = $edit['id'];
    $gambarLama = htmlspecialchars($edit['gambarLama']);
    $comments = htmlspecialchars($edit['comments']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = uploads($condb, $comments);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE sports SET

     gambar = '$gambar',
     comments = '$comments'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function deletesports($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM sports WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM sports WHERE id = $id");

    return mysqli_affected_rows($condb);
}

function addsports($condb, $posts)
{
    $category = $posts['category'];
    $sports = htmlspecialchars($posts['sports']);

    $query = "INSERT INTO lsports
    VALUES
    
    ('',
    '$category',
    '$sports'
    )";

    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function esports($condb, $edit)
{

    $id = $edit['id'];
    $category = htmlspecialchars($edit['category']);
    $sports = htmlspecialchars($edit['sports']);

    // Cek jika ada gambar baru diupload
    // if ($_FILES['gambar']['error'] === 4) {
    //     $gambar = $gambarLama;
    // } else {
    //     // Run upload function and store the image name in $gambar
    //     $gambar = upload($condb, $nokp);
    // }

    // Query UPDATE data ke dalam database
    $query = "UPDATE lsports SET
     category = '$category',
     menu = '$sports'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function menu($condb, $posts)
{
    // Simpan setiap data dari post $data ke dalam variables

    $comments = htmlspecialchars($posts['comments']);


    $gambar = uploads();
    if (!$gambar) {
        return false;
    }

    // if($_FILES['gambar']['error'] === 4) {
    //     $pictures = $gambar; 
    // }
    // // Upload gambar
    // $gambar = uploads($condb, $ptitle); //value is $newFileName;
    // if (!$gambar) {
    //     return false;
    // }

    // Query INSERT data ke dalam database
    $query = "INSERT INTO menu
     VALUES
    ('',
    '$gambar',
    '$comments'
    )";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function editmenupost($condb, $edit)
{

    $id = $edit['id'];
    $gambarLama = htmlspecialchars($edit['gambarLama']);
    $comments = htmlspecialchars($edit['comments']);

    // Cek jika ada gambar baru diupload
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        // Run upload function and store the image name in $gambar
        $gambar = uploads($condb, $comments);
    }

    // Query UPDATE data ke dalam database
    $query = "UPDATE menu SET

     gambar = '$gambar',
     comments = '$comments'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}


function deletemenu($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT gambar FROM menu WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    $imgDir = '../img/';
    $imgFile = $imgDir . $imgName;
    unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM menu WHERE id = $id");

    return mysqli_affected_rows($condb);
}


function addmenu($condb, $posts)
{
    $category = $posts['category$category'];
    $menu = htmlspecialchars($posts['menu']);

    $query = "INSERT INTO lmenu
    VALUES
    
    ('',
    '$category',
    '$menu'
    )";

    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

function padammenu($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT menu FROM lmenu WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    // $imgName = $row['gambar'];

    // Delete the image associated with the nokp
    // $imgDir = '../img/';
    // $imgFile = $imgDir . $imgName;
    // unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM lmenu WHERE id = $id");

    return mysqli_affected_rows($condb);
}

function editmenu($condb, $edit)
{

    $id = $edit['id'];
    $category = htmlspecialchars($edit['category']);
    $menu = htmlspecialchars($edit['menu']);

    // Cek jika ada gambar baru diupload
    // if ($_FILES['gambar']['error'] === 4) {
    //     $gambar = $gambarLama;
    // } else {
    //     // Run upload function and store the image name in $gambar
    //     $gambar = upload($condb, $nokp);
    // }

    // Query UPDATE data ke dalam database
    $query = "UPDATE lmenu SET
     category = '$category',
     menu = '$menu'

     WHERE id = $id";

    // Run query
    mysqli_query($condb, $query);

    return mysqli_affected_rows($condb);
}

// function carimenu($condb, $keyword)
// {
//     $query = "SELECT * FROM lmenu WHERE 
//     menu LIKE '%$keyword%' OR
//     ";

//     // Recall ambildata function to execute the query and retrieve results
//     $rows = ambildata($condb, $query);

//     // Process the $rows data
//     return $rows;
// }

function deleteadmin($condb, $id)
{

    // Get the gambar from the pelajar record
    $query = "SELECT username FROM adminlogin WHERE id = $id";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_assoc($result);
    // $imgName = $row['gambar'];

    // // Delete the image associated with the nokp
    // $imgDir = '../img/';
    // $imgFile = $imgDir . $imgName;
    // unlink($imgFile);

    // Delete the record from the database
    mysqli_query($condb, "DELETE FROM adminlogin WHERE id = $id");

    return mysqli_affected_rows($condb);
}


