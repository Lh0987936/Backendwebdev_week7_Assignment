<?php 
// LOGAN HOOVER
    require __DIR__ . '/includes/functions.php';

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . "data";
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        };
        
        $org_file = $_FILES['FileData']['tmp_name'];

        $rows = read_csv_rows($org_file);

        $destFile = $path . DIRECTORY_SEPARATOR .'games.csv';
        move_uploaded_file($org_file, $destFile);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing...</title>
    <link rel="stylesheet" href=<?= "." . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "stylesheet.css"?>>
    <?PHP require __DIR__ . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "bootstrapcdnlinks.php"?>
</head>
<body class="bg-dark text-light">
    <div class="row">
    <div class="col"></div>
    <div class="col">
    <div class="container banner">
    <h1>Game Go</h1>
    </div>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") 
        {
            if (write_csv_rows($destFile, $rows)) 
                {
                echo("<p>Games Successfully added! <a href=\"view.php\">View Games</a></p>");
                }
        } 
        ?>
    </div>
    </div>
    <div class="col"></div>
    </div>
</body>
</html>