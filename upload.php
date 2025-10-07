<?php 
    require __DIR__ . '/includes/functions.php';

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . "data";
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        };
        
        $org_file = $_FILES['FileData']['tmp_name'];


        $destFile = $path . DIRECTORY_SEPARATOR .'games.csv';
        move_uploaded_file($org_file, $destFile);
        $Writefile = write_csv_rows($destFile, $rows);
        if ($Writefile = TRUE) {
            echo("<p>Games Successfully added! <a href=\"view.php\">View Games</a></p>");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>