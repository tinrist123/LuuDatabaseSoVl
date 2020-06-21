<!DOCTYPE html>
<html lang="en">
<!-- ./Views/Admin/Templates/ -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adding Product</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="form-group">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="tenlaptop" placeholder="Ten Laptop">
                    <input type="text" name="baohanh" placeholder="Thời Gian Bảo Hành">
                    <input type="text" name="giaban" placeholder="Giá bán">
                    <input type="text" name="hangsanxuat" placeholder="Hãng Sản Xuất">
                    <input type="text" name="tenbovixuli" placeholder="Tên Bộ Vi Xử Lí">
                    <input type="text" name="tocdo" placeholder="Tốc Độ">
                    <input type="text" name="bonhodem" placeholder="Bộ Nhớ Đệm">
                    <input type="text" name="dungluongram" placeholder="Dung Lượng Ram">
                    <input type="text" name="sokheram" placeholder="Số Khe Ram">
                    <input type="text" name="dungluonghdd" placeholder="Dung Lượng HDD">
                    <input type="text" name="khanangluutruhdd" placeholder="Khả năng Lưu Trữ HDD">
                    <input type="text" name="manhinh" placeholder="Màn Hình">
                    <input type="text" name="dophangiai" placeholder="Độ Phân Giải">
                    <input type="text" name="boxulyvga" placeholder="Bộ Xử Lý VGA">
                    <input type="text" name="congnghevga" placeholder="Công Nghệ VGA">
                    <input type="text" name="lan" placeholder="Công Nghệ Lan">
                    <input type="text" name="wireless" placeholder="Công Nghệ Wireless">
                    <input type="text" name="bluetooth" placeholder="Công Nghệ Bluetooth">
                    <input type="text" name="hdmi" placeholder="HDMI">
                    <input type="text" name="congusb" placeholder="cổng giao tiếp">
                    <input type="text" name="khecamthenho" placeholder="Khe Cắm Thẻ Nhớ">
                    <input type="text" name="audio" placeholder="Audio">
                    <input type="text" name="loa" placeholder="Loa">
                    <input type="text" name="camera" placeholder="Camera">
                    <input type="text" name="kieubanphim" placeholder="Kiểu Bàn Phím">
                    <input type="text" name="dungluongpin" placeholder="Dung Lượng Pin">
                    <input type="text" name="thoigiansudung" placeholder="Thời Gian Sử Dụng Pin">
                    <input type="text" name="hedieuhanh" placeholder="Hệ Điều Hành">
                    <input type="text" name="trongluong" placeholder="Trọng Lượng">
                    <input type="text" name="mausac" placeholder="màu sắc">
                    <input type="text" name="thietke" placeholder="Thiết Kế">
                    <input type="text" name="phukiendikem" placeholder="Phụ Kiện Đi Kèm">
                    <input type="text" name="quatang" placeholder="Qùa Tặng">
                    <input type="file" name="avatar" />
                    <input type="submit" name="submit" value="save">
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<?php


if (isset($_POST['submit'])) {
    // echo "<pre>";
    // var_dump($_FILES);
    // var_dump($_POST);
    // echo "</pre>";
    require_once 'detailLaptop.php';

    $tenlaptop = $_POST['tenlaptop'];
    // $baohanh = $_POST['baohanh'];
    $baohanh = "12 Tháng";
    $giaban = $_POST['giaban'];
    // $hangsanxuat = $_POST['hangsanxuat'];
    $hangsanxuat = "DELL";
    $tenbovixuly = $_POST['tenbovixuli'];
    $tocdo = $_POST['tocdo'];
    $bonhodem = $_POST['bonhodem'];
    $dungluongram = $_POST['dungluongram'];
    $sokheram = $_POST['sokheram'];
    $dungluonghdd = $_POST['dungluonghdd'];
    $khanangluutruhdd = $_POST['khanangluutruhdd'];
    $manhinh = $_POST['manhinh'];
    $dophangiai = $_POST['dophangiai'];
    $boxulyvga = $_POST['boxulyvga'];
    $congnghevga = $_POST['congnghevga'];
    $lan = $_POST['lan'];
    $wireless = $_POST['wireless'];
    $bluetooth = $_POST['bluetooth'];
    $congusb = $_POST['congusb'];
    $hdmi = $_POST['hdmi'];
    $khecamthenho = $_POST['khecamthenho'];
    $audio = $_POST['audio'];
    $camera = $_POST['camera'];
    $kieubanphim = $_POST['kieubanphim'];
    $dungluongpin = $_POST['dungluongpin'];
    $thoigiansudung = $_POST['thoigiansudung'];
    $hedieuhanh = $_POST['hedieuhanh'];
    $trongluong = $_POST['trongluong'];
    $mausac = $_POST['mausac'];
    $thietke = $_POST['thietke'];
    $phukiendikem = $_POST['phukiendikem'];
    $loa = $_POST['loa'];
    $quatang = $_POST['quatang'];

    if ($_POST['submit']) {
        // echo "<pre>";
        // var_dump($_FILES);
        $fileTmpPath = $_FILES['avatar']['tmp_name'];
        $fileName = explode('.', $_FILES['avatar']['name']);
        $extendtionFile = "." . end($fileName);


        $tenlaptop = str_replace(" ", "-", $tenlaptop);
        $tenlaptopFile =  str_replace(" ", "-", $tenlaptop) . $extendtionFile;
        $tenlaptopFile = str_replace("/", "_", $tenlaptopFile);
        $tenlaptopFile = str_replace("\"", "inc", $tenlaptopFile);
        // echo str_replace("\\", "/", __DIR__);
        $des =  str_replace("\\", "/", __DIR__) . "/" . "images/" . $tenlaptopFile;
        // die();
        if (move_uploaded_file($fileTmpPath, $des)) {
            $url_image = $des;
            $detaiLaptop = new detailLaptop(
                $tenlaptop,
                $baohanh,
                $giaban,
                $hangsanxuat,
                $tenbovixuly,
                $tocdo,
                $bonhodem,
                $dungluongram,
                $sokheram,
                $dungluonghdd,
                $khanangluutruhdd,
                $manhinh,
                $dophangiai,
                $boxulyvga,
                $congnghevga,
                $lan,
                $wireless,
                $bluetooth,
                $congusb,
                $hdmi,
                $khecamthenho,
                $audio,
                $camera,
                $kieubanphim,
                $dungluongpin,
                $thoigiansudung,
                $hedieuhanh,
                $trongluong,
                $mausac,
                $thietke,
                $phukiendikem,
                $url_image,
                $loa,
                $quatang
            );
            $detaiLaptop->getSqlInsert();
        }
    }


    // Xu ly upload

}

?>