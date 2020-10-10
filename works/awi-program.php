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

    <meta name="robots" content="noindex"> <!--HIDE FROM SEARCH ENGINE-->

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung. Temukan lebih banyak tentang proyek dan keahlian Eko."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://www.ekokepe.rf.gd?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Portofolio Web | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung. Temukan lebih banyak tentang proyek dan keahlian Eko."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Portofolio Web | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
    <meta name="twitter:description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung. Temukan lebih banyak tentang proyek dan keahlian Eko."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="../projects/style2.css" rel="stylesheet"/>
    <link href="style4.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Pembuat Laporan Hasil Latihan | Eko Khoirunnas Priyadi</title>
</head>
<body>
    <?php //Tambahkan Header
        global $hdindex;
        global $shr;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 0;
        include($path);
    ?>
    <div id="body">
        <h2>Pembuat Laporan Hasil Latihan AWI</h2>

        <div id="intro">
            <div id="ph_main">

                <div id="photo1">
                    <img class="ph1_pic" src="wk_awi-program/main1.jpg">
                    <div class="ph1_desc"><p>Jendela menu utama</p></div>
                    <img class="ph1_pic" src="wk_awi-program/main2.jpg">
                    <div class="ph1_desc"><p>Menu entri pemain</p></div>
                    <img class="ph1_pic" src="wk_awi-program/main3.jpg">
                    <div class="ph1_desc"><p>Salah satu dari bermacam-macam visualisasi hasil latihan</p></div>
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
                        <td><b>Mei - Sep 2017</b></td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Perorangan</b> (diawasi)</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Pekerjaan paruh waktu</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Mengembangkan sebuah perangkat lunak pembuat laporan yang menunjukkan kemajuan hasil latihan seiring waktu. Pencapaian setiap sesi latihan dinyatakan dalam 4 tingkat, yang menunjukkan tingkat kesiapan lagu untuk dibawakan dalam suatu penampilan. Perangkat lunak ini melibatkan data dalam jumlah besar. Sederhananya, program ini digunakan untuk menyimpan dan mengambil data dari basis data yang tersedia.</p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0 0 20px;">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Menu entri</li>
                    <li>Entri kehadiran peserta latihan</li>
                    <li>Masukan pesan pelatih</li>
                    <li>Berbagai jenis visualisasi hasil latihan</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Mendukung analisis kemajuan hasil latihan Angklung Web Institute (AWI) Bandung</p>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam VBA-Excel</li>
                    <li>Kemampuan <i>debugging</i> & <i>refactoring</i></li>
                    <li>Translasi fitur ke algoritma</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="wk_awi-program/hist1.jpg">
                    <div class="ph2_desc"><p>Diagram skematik tentang bagian-bagian program</p></div>
                    <img class="ph2_pic" src="wk_awi-program/hist2.jpg">
                    <div class="ph2_desc"><p>Catatan tentang berbagai jenis visualisasi hasil latihan</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
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

    <meta name="robots" content="noindex"> <!--HIDE FROM SEARCH ENGINE-->

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung. Find out about Eko's previous projects and see where he can fit in."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://www.ekokepe.rf.gd"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Web Portfolio | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung. Find out about Eko's previous projects and see where he can fit in."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Web Portfolio | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
    <meta name="twitter:description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung. Find out about Eko's previous projects and see where he can fit in."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="../projects/style2.css" rel="stylesheet"/>
    <link href="style4.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Rehearsal Report Generator | Eko Khoirunnas Priyadi</title>
</head>
<body>
    <?php //Tambahkan Header
        global $hdindex;
        global $shr;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 0;
        include($path);
    ?>
    <div id="body">
        <h2>AWI Rehearsal Report Generator</h2>

        <div id="intro">
            <div id="ph_main">

                <div id="photo1">
                    <img class="ph1_pic" src="wk_awi-program/main1.jpg">
                    <div class="ph1_desc"><p>Main menu window</p></div>
                    <img class="ph1_pic" src="wk_awi-program/main2.jpg">
                    <div class="ph1_desc"><p>Player entry menu</p></div>
                    <img class="ph1_pic" src="wk_awi-program/main3.jpg">
                    <div class="ph1_desc"><p>One of various rehearsal result visualizations</p></div>
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
                        <td><b>May - Sep 2017</b></td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Individual</b> (supervised)</td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Part-time job</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Developing a report-generating software that shows rehearsal progress over time. Achievement for each rehearsal session stated by 4 levels, indicating song's readiness for performance. This software involves big dimension data. Simply put, this program is used to save data into database and retrieve data from it.</p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0 0 20px;">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Entry menu</li>
                    <li>Rehearsal member attendance entry</li>
                    <li>Instructor's message input</li>
                    <li>Various rehearsal result visualizations</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Supporting rehearsal progress analysis of Angklung Web Institute (AWI) Bandung</p>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in VBA-Excel</li>
                    <li>Debugging & refactoring skill</li>
                    <li>Feature-to-algorithm translation</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="wk_awi-program/hist1.jpg">
                    <div class="ph2_desc"><p>Schematic diagram of parts of the program</p></div>
                    <img class="ph2_pic" src="wk_awi-program/hist2.jpg">
                    <div class="ph2_desc"><p>Notes about various rehearsal result visualizations</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
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

<?php } ?>
