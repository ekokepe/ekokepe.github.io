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
    <html lang="en-US">
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
    <title>Magang Desain Grafis | Eko Khoirunnas Priyadi</title>
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
        <h2>Magang Desain Grafis di Indolecture AngklungKita</h2>

        <div id="intro">
            <div id="ph_main">

                <div id="photo1">
                    <img class="ph1_pic" src="wk_ak-design/main1.jpg">
                    <div class="ph1_desc"><p>Desain kaos</p></div>
                    <img class="ph1_pic" src="wk_ak-design/main2.jpg">
                    <div class="ph1_desc"><p>Desain kartu nama</p></div>
                    <img class="ph1_pic" src="wk_ak-design/main3.jpg">
                    <div class="ph1_desc"><p>Desain <i>leaflet</i></p></div>
                    <img class="ph1_pic" src="wk_ak-design/main4.jpg">
                    <div class="ph1_desc"><p>Poster Hari Pramuka untuk publikasi Instagram</p></div>
                    <img class="ph1_pic" src="wk_ak-design/main5.jpg">
                    <div class="ph1_desc"><p>Panduan desain publikasi</p></div>
                </div>

                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,4)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,5)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div>
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Aug - Sep 2018</b></td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Perorangan</b> (diawasi)</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Magang penuh waktu</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <ul>
                        <li>Membuat panduan singkat desain publikasi yang mencakup warna dan elemen grafis</li>
                        <li>Mendesain <i>merchandise</i> (<i>goody bag</i>, kaos, pin, gantungan kunci, buku catatan, pulpen) dan produk portofolio (<i>event desk</i>, spanduk, <i>leaflet</i>, kartu nama, kupon) untuk Indolecture AngklungKita</li>
                        <li>Menghubungi dan memesan produk dari rumah percetakan</li>
                        <li>Mendesain poster untuk keperluan promosi di media sosial</li>
                        <li>Mengedit foto</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <p><i>Mock-up</i> sebagai contoh tampilan produk jadi</p>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Media promosi, meningkatkan <i>brand awareness</i> Indolecture AngklungKita</p>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan desain grafis menggunakan Adobe Photoshop dan CorelDRAW</li>
                    <li>Kemampuan dasar desain untuk pemasaran</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- <div id="ending">
        <div id="ph_hist">
            <div id="photo2">
                <img class="ph2_pic" src="wk_template/hist1.jpg">
                <div class="ph2_desc"><p>Diagram skematik bagian-bagian program ini</p></div>
            </div>

            <div id="ph2_nav" style="display:none;">
                <div>
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
            </div>
            <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
            <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
        </div>
    </div> -->
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
    <title>WTemplate | Eko Khoirunnas Priyadi</title>
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
        <h2>Graphic Design Intern of Indolecture AngklungKita</h2>

        <div id="intro">
            <div id="ph_main">

                <div id="photo1">
                    <img class="ph1_pic" src="wk_template/main1.jpg">
                    <div class="ph1_desc"><p></p></div>
                    <img class="ph1_pic" src="wk_template/main2.jpg">
                    <div class="ph1_desc"><p></p></div>
                    <img class="ph1_pic" src="wk_template/main3.jpg">
                    <div class="ph1_desc"><p></p></div>
                    <img class="ph1_pic" src="wk_template/main4.jpg">
                    <div class="ph1_desc"><p></p></div>
                    <img class="ph1_pic" src="wk_template/main5.jpg">
                    <div class="ph1_desc"><p></p></div>
                </div>

                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,4)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,5)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div>
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Aug - Sep 2018</b></td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Individual</b> (supervised)</td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Full-time internship</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <ul>
                        <li>Making grand design of publication</li>
                        <li>Designing merchandises (goody bag, T-shirt, pin, keychain, notepad, pen) and portfolio products (event desk, banner, leaflet, namecard, voucher) of Indolecture AngklungKita</li>
                        <li>Contacting and ordering product from vendors</li>
                        <li>Designing promotional posters for social media platforms</li>
                        <li>Editing photos</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <p>Mock-ups as display and usage simulation of the final products</p>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Promotional media to increase the brand awareness of Indolecture AngklungKita</p>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Graphic design skill using Adobe Photoshop and CorelDRAW</li>
                    <li>Basic marketing design skill</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- <div id="ending">
        <div id="ph_hist">
            <div id="photo2">
                <img class="ph2_pic" src="wk_template/hist1.jpg">
                <div class="ph2_desc"><p>Schematic diagram of program's parts</p></div>
            </div>

            <div id="ph2_nav" style="display:none;">
                <div>
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
            </div>
            <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
            <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
        </div>
    </div> -->
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
