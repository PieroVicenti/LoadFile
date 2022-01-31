<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Carica File</title>
</head>
<body>
    <form id="form" action="load.php" method="POST" enctype="multipart/form-data">
        <h3 id="carica">Carica File</h3>
        <label id="label" for="fileSelect">File: </label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Carica">
        <p><Strong>Nota:</Strong> Sono permessi solo i formati .jpg .jpeg .gif, .png con una size massima di 5MB</p>
    </form>
</body>
</html>