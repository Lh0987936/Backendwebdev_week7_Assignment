<!DOCTYPE html>
<!-- LOGAN HOOVER -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Go</title>
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="FileData" id="FileData" class="form-control">
    <input type="submit" value="Submit" class ="btn btn-success">
    </form>
    </div>
    </div>
    <div class="col"></div>
    </div>
</body>
</html>