<?php

require_once 'functions.php';


$query1 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Sarapan'");
$query2 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Tengahhari'");
$query3 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Petang'");
$query4 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Malam'");

// Fetch distinct meal categories from the m1 table
$categories_query = ambildata($condb, 'SELECT DISTINCT category FROM m1');
$categories = array_column($categories_query, 'category');

// Define the days of the week
$days_of_week = ['Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu', 'Ahad'];

// Fetch menu items for each category from the lmenu table (DROPDOWN)
$menu_items_by_category = [];
foreach ($categories as $category) {
    $query = "SELECT id, menu FROM lmenu WHERE category = '$category'";
    $menu_items_by_category[$category] = ambildata($condb, $query);
}

// Fetch idmenu for each category and day from the m1 table (TABLE)
$idmenu_by_category_and_day = [];
foreach ($categories as $category) {
    foreach ($days_of_week as $day) {
        $query = "SELECT idmenu FROM m1 WHERE category = '$category' AND hari = '$day'";
        $result = ambildata($condb, $query);
        $idmenu_by_category_and_day[$category][$day] = $result[0]['idmenu'] ?? '';
    }
}

// Process Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['menu'] as $day => $categories) {
        foreach ($categories as $category => $menu_id) {
            // Update m1 table
            $query = "UPDATE m1 SET idmenu = '$menu_id' WHERE hari = '$day' AND category = '$category'";
            jalankanquery($condb, $query);
        }
    }
    // Optional: Redirect to a confirmation page or reload the current page to reflect changes
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin-bottom: 40px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        .jadualmakanan {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .container-sm {
            width: 30%;
        }
    </style>
</head>

<body>
    <?php require_once 'header.php'; ?>
    <h1>Jadual Makan Minggu 1</h1>
    <button class="btn btn-primary"><a href="tblmenu1.php" style="text-decoration: none; color:white">Back To Table</a></button>
    <br><br>
    <a href="m1.php"><button>Minggu 1</button></a>
    <a href="m2.php"><button>Minggu 2</button></a>
    <a href="m3.php"><button>Minggu 3</button></a>
    <a href="m4.php"><button>Minggu 4</button></a>



    <div class="jadualmakanan">
        <div class="container-sm" style="width: 30%;">
            <label for="Sarapan">Sarapan</label>
            <table class="table table-bordered border-secondary">
                <tr class="table-dark">
                    <th>No.</th>
                    <th>Menu</th>
                </tr>
                <?php foreach ($query1 as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['menu'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>



        <div class="container-sm" style="width: 30%;">
            <label for="Tengahhari">Tengahhari</label>
            <table class="table table-bordered border-secondary">
                <tr class="table-dark">
                    <th>No.</th>
                    <th>Menu</th>
                </tr>
                <?php foreach ($query2 as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['menu'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>





        <div class="container-sm" style="width: 30%;">
            <label for="Petang">Petang</label>
            <table class="table table-bordered border-secondary">
                <tr class="table-dark">
                    <th>No.</th>
                    <th>Menu</th>
                </tr>
                <?php foreach ($query3 as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['menu'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>


        <div class="container-sm" style="width: 30%;">
            <label for="Malam">Malam</label>
            <table class="table table-bordered border-secondary">
                <tr class="table-dark">
                    <th>No.</th>
                    <th>Menu</th>
                </tr>
                <?php foreach ($query4 as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['menu'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>



    <form action="" method="post">
        <table class="table table-bordered border-secondary">
            <tr class="table-dark">

                <th>HARI / MASA</th>
                <?php foreach ($categories as $category) : ?>
                    <th><?= $category ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($days_of_week as $day) : ?>
                <tr>
                    <td><?= $day ?></td>
                    <?php foreach ($categories as $category) : ?>
                        <td>
                            <select name="menu[<?= $day ?>][<?= $category ?>]">
                                <option value="">Select Menu</option>
                                <?php foreach ($menu_items_by_category[$category] as $menu_item) : ?>
                                    <option value="<?= $menu_item['id'] ?>" <?= ($menu_item['id'] == $idmenu_by_category_and_day[$category][$day]) ? 'selected' : '' ?>>
                                        <?= $menu_item['id'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <button class="btn btn-primary" type="submit" value="submit" onclick="return confirm ('Are You Sure To Edit This Table');">Save The Change</button>
    </form>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>