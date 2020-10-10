<!DOCTYPE html>

<?php
if (!empty($_GET['language'])) {
    $_COOKIE['language'] = $_GET['language'] === 'id' ? 'id' : 'en';
} else {
    $_COOKIE['language'] = 'en';
}
setcookie('language', $_COOKIE['language']);
?>

<?php if ($_COOKIE['language'] == "id") { ?>
    <html lang="id">
    <head>
    <meta charset="UTF-8"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Balok menjadi Notasi Angka. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/standard-to-na.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Pengonversi Notasi Balok ke Notasi Angka"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Balok menjadi Notasi Angka. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/s_to_a.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Pengonversi Notasi Balok ke Notasi Angka"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/s_to_a.jpg"/>
    <meta name="twitter:description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Balok menjadi Notasi Angka. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Pengonversi Notasi Balok ke Notasi Angka</title>
</head>
<body>

    <?php //Tambahkan Header
        global $hdindex;
        global $shr;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 1;
        include($path);
    ?>

    <div id="body">
        <h2>Pengonversi Notasi Balok ke Notasi Angka</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_s-to-na/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: Notasi Balok (atas) dan kode Notasi Balok (bawah) dalam format <i>Noteworthy Composer</i></p></div>
                    <img class="ph1_pic" src="pr_s-to-na/main2.jpg">
                    <div class="ph1_desc"><p><b>Keluaran</b>: Partitur Notasi Angka dengan 4 birama per baris (atas) dan 5 birama per baris (bawah)</p></div>
                    <img class="ph1_pic" src="pr_s-to-na/main3.jpg">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
                </div>


                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div>
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Bahasa</td>
                        <td>:</td>
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Jul 2016 - Agu 2017</b> (versi beta terbaru)</td>
                    </tr>
                    <tr>
                        <td>Jenis pekerjaan</td>
                        <td>:</td>
                        <td><b>Perorangan</b></td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Mendukung proses latihan KPA-ITB</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Beberapa pengaransemen lagu Angklung KPA-ITB menulis aransemennya mengunakan perangkat lunak pengetikan partitur, seperti <i>Noteworthy Composer</i> dan <i>MuseScore</i> dalam Notasi Balok. Namun, notasi ini bukanlah notasi yang biasa digunakan oleh kebanyakan tim penampilan Angklung. Maka dari itu, notasi tersebut harus dikonversi menjadi Notasi Angka terlebih dahulu sebelum digunakan dalam sesi latihan Angklung.</p>

                    <p>Masukan program ini adalah kode Notasi Balok dalam format <i>Noteworthy Composer</i>. Partitur Notasi Balok yang lebih umum, dalam format .xml, harus dikonversi terlebih dahulu menjadi format .nwc.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Pengaturan jumlah birama dalam baris partitur Notasi Angka</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Mempercepat proses konversi partitur dan meminimalkan faktor kesalahan manusia</p>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam VBA-Excel</li>
                    <li>Kemampuan <i>debugging</i> & <i>refactoring</i></li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_s-to-na/hist1.jpg">
                    <div class="ph2_desc"><p>Catatan penentuan persamaan untuk mengonversi kode notasi balok pada berbagai nada dasar</p></div>
                </div>

                <!-- <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div> -->
            </div>

            <div id="test">
                <p>"Sangat sangat mempercepat penulisan partitur notasi angka. Kalau program ini tidak pernah ada, pekerjaan ini akan jauh lebih ribet karena harus mengerjakan secara manual."</p>
                <h3>Safira Az-zahra</h3>
                <h4>Kepala bidang <i>Angklung Music Development</i> Keluarga Paduan Angklung (KPA) ITB</h4>
            </div>
        </div>
    </div>
    <?php //Tambahkan Footer
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/footer.php";
        include($path);
    ?>
</body>
<script src="../imageSlide.js"></script>
<script>
    if(document.getElementById("ph1_nav")) {document.getElementById("ph1_nav").style.display = "flex";}
    if(document.getElementById("ph1_prev")) {document.getElementById("ph1_prev").style.display = "flex";}
    if(document.getElementById("ph1_next")) {document.getElementById("ph1_next").style.display = "flex";}
    if(document.getElementById("ph2_nav")) {document.getElementById("ph2_nav").style.display = "flex";}
    if(document.getElementById("ph2_prev")) {document.getElementById("ph2_prev").style.display = "flex";}
    if(document.getElementById("ph2_next")) {document.getElementById("ph2_next").style.display = "flex";}
</script>
</html>
<?php } else { ?>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="We can now easily convert Standard musical notation into Not Angka (numbered) musical notation. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/standard-to-na.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Standard to Not Angka Musical Notation Converter"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="We can now easily convert Standard musical notation into Not Angka (numbered) musical notation. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/s_to_a.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Standard to Not Angka Musical Notation Converter"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/s_to_a.jpg"/>
    <meta name="twitter:description" content="We can now easily convert Standard musical notation into Not Angka (numbered) musical notation. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Standard to Not Angka Musical Notation Converter</title>
</head>
<body>

    <?php //Tambahkan Header
        global $hdindex;
        global $shr;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 1;
        include($path);
    ?>

    <div id="body">
        <h2>Standard to Not Angka Musical Notation Converter</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_s-to-na/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: Standard musical notation (top) and code (bottom) in <i>Noteworthy Composer</i> format</p></div>
                    <img class="ph1_pic" src="pr_s-to-na/main2.jpg">
                    <div class="ph1_desc"><p><b>Output</b>: 4 bars per row (top) and 5 bars per row (bottom) Not Angka musical score</p></div>
                    <img class="ph1_pic" src="pr_s-to-na/main3.jpg">
                    <div class="ph1_desc"><p>User Manual</p></div>
                </div>


                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div>
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Language</td>
                        <td>:</td>
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Jul 2016 - Aug 2017</b> (latest beta update)</td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Individual</b></td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Supporting rehearsal process of KPA-ITB</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Some Angklung song arrangers of Keluarga Paduan Angklung (KPA) ITB type their song arrangement using various musical scorewriter softwares, such as <i>Noteworthy Composer</i> and <i>MuseScore</i> in standard musical notation. However, this musical notation isn't used commonly in most Angklung performance groups. Eventually, the notation must be converted into Not Angka musical notation before used in Angklung rehearsal session.</p>

                    <p>Input of the program is musical notation code in <i>Noteworthy Composer</i> format. Common musical score, in .xml format, must be converted first into .nwc format.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Not Angka musical notation bar count per row setting</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Accelerating music score conversion process and decreasing human error factors</p>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in VBA-Excel</li>
                    <li>Debugging & refactoring skill</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_s-to-na/hist1.jpg">
                    <div class="ph2_desc"><p>Notes about determining suitable equation for code conversion in various scale</p></div>
                </div>

                <!-- <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div> -->
            </div>

            <div id="test">
                <p>"Greatly accelerates Not Angka musical score writing process. If this program never existed, then my job will be messy as doing this manually will take a long time."</p>
                <h3>Safira Az-zahra</h3>
                <h4>Head of Angklung Music Development division of Keluarga Paduan Angklung (KPA) ITB</h4>
            </div>
        </div>
    </div>
    <?php //Tambahkan Footer
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/footer.php";
        include($path);
    ?>
</body>
<script>
    if(document.getElementById("ph1_nav")) {document.getElementById("ph1_nav").style.display = "flex";}
    if(document.getElementById("ph1_prev")) {document.getElementById("ph1_prev").style.display = "flex";}
    if(document.getElementById("ph1_next")) {document.getElementById("ph1_next").style.display = "flex";}
    if(document.getElementById("ph2_nav")) {document.getElementById("ph2_nav").style.display = "flex";}
    if(document.getElementById("ph2_prev")) {document.getElementById("ph2_prev").style.display = "flex";}
    if(document.getElementById("ph2_next")) {document.getElementById("ph2_next").style.display = "flex";}
</script>
<script src="../imageSlide.js"></script>
</html>

<?php } ?>
