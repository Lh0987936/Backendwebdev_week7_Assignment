<?php
// LOGAN HOOVER
require __DIR__ . '/includes/functions.php';
$cvsPath = __DIR__ . '/data/games.csv';

$rows = read_csv_rows($cvsPath);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Games</title>
    <link rel="stylesheet" href=<?= "." . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "stylesheet.css" ?>>
    <?PHP require __DIR__ . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "bootstrapcdnlinks.php" ?>
</head>

<body class="bg-dark text-light">
    <div class="row">
        <div class="col"></div>
        <div class="col-5">
            <div class="container banner">
                <h1>Game Go</h1>
            </div>
            <div>
                <table cellpadding="6" class="table table-bordered table-hover">
                    <tr>
                        <th>Game ID</th>
                        <th>Title</th>
                        <th>Console</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= esc_html($row[0] ?? '') ?></td>
                            <td><?= esc_html($row[1] ?? '') ?></td>
                            <td><?= esc_html($row[2] ?? '') ?></td>
                            <td><?= esc_html($row[3] ?? '') ?></td>
                            <?php $img = "." . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . esc_html($row[4] ?? ''); ?>
                            <td><img src=<?= $img ?> alt=<?= esc_html($row[4] ?? '') ?> width="300px" height="450px"></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="col"></div>
    </div>
</body>

</html>