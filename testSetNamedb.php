<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form-group">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="Name">
                <input type="file" name="avatar" />
                <input type="submit" name="uploadclick" value="Upload" />
            </form>
        </div>
    </div>
    <?php

    if (isset($_POST['uploadclick'])) {
        echo "<pre>";
        var_dump($_FILES);
        // var_dump($_POST);
        echo "</pre>";

        if ($_POST['Name']) {
            $nameImg = $_POST['Name'];
        }

        $fileTmpPath = $_FILES['avatar']['tmp_name'];
        $fileName = explode('.', $_FILES['avatar']['name']);
        $extendtionFile = "." . end($fileName);

        $nameImg =  str_replace(" ", "-", $nameImg) . $extendtionFile;

        $des = __DIR__ . "/" . "Templates/" . "images/" . $nameImg;

        if (move_uploaded_file($fileTmpPath, $des)) {
            echo "Upload Success";
        }
    }

    ?>
</body>

</html>