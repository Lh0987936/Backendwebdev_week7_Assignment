<?php 
    if ($_SERVER['REQUEST_METHOD']=== "POST")
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . "data";
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        }

        $destDIR = __DIR__ . '/data'; $destFile = $destDir . '/games.csv';
        move_uploaded_file($_FILES['datafile']['tmp_name'], $destFile);
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