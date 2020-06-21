<?php
require_once "DBconnection.php";
class detailLaptop
{
    protected $tenlaptop = "";
    protected $baohanh = "";
    protected $giaban = "";
    protected $hangsanxuat = "";
    protected $tenbovixuly = "";
    protected $tocdo = "";
    protected $bonhodem = "";
    protected $dungluongram = "";
    protected $sokheram = "";
    protected $dungluonghdd = "";
    protected $khanangluutruhdd = "";
    protected $manhinh = "";
    protected $dophangiai = "";
    protected $boxulyvga = "";
    protected $congnghevga = "";
    protected $lan = "";
    protected $wireless = "";
    protected $bluetooth = "";
    protected $congusb = "";
    protected $hdmi = "x1HDMI";
    protected $khecamthenho = "";
    protected $audio = "";
    protected $camera = "";
    protected $kieubanphim = "";
    protected $dungluongpin = "";
    protected $thoigiansudung = "";
    protected $hedieuhanh = "";
    protected $trongluong = "";
    protected $mausac = "";
    protected $thietke = "";
    protected $phukiendikem = "";
    protected $url_image = "";
    protected $loa = "";
    protected $quatang = "";


    public function __construct(
        $tenlaptop = "",
        $baohanh =  "12 Tháng",
        $giaban = "",
        $hangsanxuat = "Dell",
        $tenbovixuly = "",
        $tocdo = "",
        $bonhodem = "",
        $dungluongram = "",
        $sokheram = "",
        $dungluonghdd = "",
        $khanangluutruhdd = "",
        $manhinh = "",
        $dophangiai = "",
        $boxulyvga = "",
        $congnghevga = "",
        $lan = "",
        $wireless = "",
        $bluetooth = "",
        $congusb = "",
        $hdmi = "1xHDMI",
        $khecamthenho = "",
        $audio = "",
        $camera = "",
        $kieubanphim = "",
        $dungluongpin = "",
        $thoigiansudung = "",
        $hedieuhanh = "",
        $trongluong = "",
        $mausac = "",
        $thietke = "",
        $phukiendikem = "",
        $url_image = "",
        $loa = "",
        $quatang = ""
    ) {
        $this->tenlaptop = $tenlaptop;
        $this->baohanh = $baohanh;
        $this->giaban = $giaban;
        $this->hangsanxuat = $hangsanxuat;
        $this->tenbovixuly = $tenbovixuly;
        $this->tocdo = $tocdo;
        $this->bonhodem = $bonhodem;
        $this->dungluongram = $dungluongram;
        $this->sokheram = $sokheram;
        $this->dungluonghdd = $dungluonghdd;
        $this->khanangluutruhdd = $khanangluutruhdd;
        $this->manhinh = $manhinh;
        $this->dophangiai = $dophangiai;
        $this->boxulyvga = $boxulyvga;
        $this->congnghevga = $congnghevga;
        $this->lan = $lan;
        $this->wireless = $wireless;
        $this->bluetooth = $bluetooth;
        $this->congusb = $congusb;
        $this->hdmi = $hdmi;
        $this->khecamthenho = $khecamthenho;
        $this->audio = $audio;
        $this->camera = $camera;
        $this->kieubanphim = $kieubanphim;
        $this->dungluongpin = $dungluongpin;
        $this->thoigiansudung = $thoigiansudung;
        $this->hedieuhanh = $hedieuhanh;
        $this->trongluong = $trongluong;
        $this->mausac = $mausac;
        $this->thietke = $thietke;
        $this->phukiendikem = $phukiendikem;
        $this->url_image = $url_image;
        $this->loa = $loa;
        $this->quatang = $quatang;
    }
    public function getSqlInsert()
    {
        $DB = new DBconnection();
        $conn = $DB::$connectionInstance;

        $sql = "INSERT INTO `detaillaptop`(
    `tenlaptop`,
    `baohanh`,
    `giaban`,
    `hangsanxuat`,
    `tenbovixuly`,
    `tocdo`,
    `bonhodem`,
    `dungluongram`,
    `sokheram`,
    `dungluonghdd`,
    `khanangluutruhdd`,
    `manhinh`,
    `dophangiai`,
    `boxulyvga`,
    `congnghevga`,
    `lan`,
    `wireless`,
    `bluetooth`,
    `congusb`,
    `hdmi`,
    `khecamthenho`,
    `audio`,
    `camera`,
    `kieubanphim`,
    `dungluongpin`,
    `thoigiansudung`,
    `hedieuhanh`,
    `trongluong`,
    `mausac`,
    `thietke`,
    `phukiendikem`,
    `url_image`,
    `loa`,
    `quatang`
)
VALUES(
    '$this->tenlaptop',
   '$this->baohanh',
   '$this->giaban',
   '$this->hangsanxuat',
   '$this->tenbovixuly',
    '$this->tocdo',
  '$this->bonhodem',
   '$this->dungluongram',
   '$this->sokheram',
  '$this->dungluonghdd',
   '$this->khanangluutruhdd',
   '$this->manhinh',
'$this->dophangiai',
   '$this->boxulyvga',
    '$this->congnghevga',
    '$this->lan',
  ' $this->wireless',
   '$this->bluetooth',
   '$this->congusb',
    '$this->hdmi',
    '$this->khecamthenho',
  ' $this->audio',
 ' $this->camera',
    '$this->kieubanphim',
   '$this->dungluongpin',
  ' $this->thoigiansudung',
   '$this->hedieuhanh',
   '$this->trongluong',
   '$this->mausac',
   '$this->thietke',
    '$this->phukiendikem',
   '$this->url_image',
   '$this->loa',
   '$this->quatang'
)";
        $stmt = mysqli_stmt_init($conn);
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
        $txt =   $sql . "\n\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "<pre>";

        // die();
        if (mysqli_stmt_prepare($stmt, $sql)) {
            $result = mysqli_stmt_execute($stmt);
            if ($result) {
                echo "insert Success";
            } else {
                echo "no";
            }
        }
    }
}
