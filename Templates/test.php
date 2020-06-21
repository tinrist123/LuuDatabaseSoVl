<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="file" name="avatar" />
        <input type="submit" name="uploadclick" value="Upload" />
    </form>
    <?php
    echo "<pre>";
    // Xử Lý Upload
    var_dump($_FILES['avatar']);
    $fileTmpPath = $_FILES['avatar']['tmp_name'];
    $filename = $_FILES['avatar']['name'];
    $filetype = $_FILES['avatar']['type'];
    echo $errorFile = $_FILES['avatar']['error'];
    $fileNameCmps = explode(".", $filename);
    $ExtensionFile = strtolower(end($fileNameCmps));

    $realFileName = $_POST['name'];

    $filenameUpload = $realFileName . "." . "$ExtensionFile";
    $des = __DIR__ . "\\" . "images" . "/" . $filenameUpload;
    if ($errorFile == 0) {
        if (move_uploaded_file($fileTmpPath, $des)) {
        }
    }

    ?>
</body>

</html>