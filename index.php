<?php
    $getPsw = $_GET["pswlenght"];
    $pswLenght = strlen(($getPsw));
    var_dump($pswLenght);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center text-white">
            <div class="col-4">
                <form action="index.php" method="GET">
                    <legend class="fw-bold">Password Generator [GET]</legend>
                    <div class="my-3">
                        <label for="" class="form-label fw-bold">Choose your password lenght:</label>
                        <input type="text" class="form-control" name="pswlenght">
                    </div>
                    <button class="btn btn-light text-center">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>