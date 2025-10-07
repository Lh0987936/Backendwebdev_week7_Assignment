<?php
require __DIR__ . '/includes/functions.php';
$cvsPath = __DIR__ . '/data/games.csv';

$rows = read_csv_rows($cvsPath);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Results</title>
</head>

<body>
    <table border="1" cellpadding="6">
        <tr>
            <th>Game ID</th>
            <th>Title</th>
            <th>Console</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        <tr>
            <?php foreach ($row as $rows) { ?>
                <td><?= esc_html($row[0] ?? '') ?></td>
                <td><?= esc_html($row[1] ?? '') ?></td>
                <td><?= esc_html($row[2] ?? '') ?></td>
                <td><?= esc_html($row[3] ?? '') ?></td>
                <td><?= esc_html($row[4] ?? '') ?></td>
            <?php } ?>
        </tr>
    </table>
</body>

</html>