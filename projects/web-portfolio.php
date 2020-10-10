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
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Portofolio Web | Eko Khoirunnas Priyadi</title>
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
        <h2>Portofolio Web</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_web-portfolio/main1.jpg">
                    <div class="ph1_desc"><p>Tampilan web untuk lebar jendela menengah</p></div>
                    <img class="ph1_pic" src="pr_web-portfolio/main2.jpg">
                    <div class="ph1_desc"><p>Tampilan web untuk lebar jendela kecil</p></div>
                    <img class="ph1_pic" src="pr_web-portfolio/main3.jpg">
                    <div class="ph1_desc"><p><i>Slide</i> gambar</p></div>
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
                        <td><b>PHP/HTML, CSS, JavaScript</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Jan - Mar 2019</b></td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Perorangan</b></td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Menampilkan pengalaman kerja dan proyek saya</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p></p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0;">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Desain responsif</li>
                    <li><i>Slide</i> gambar dan efek <i>hover</i></li>
                    <li>Tombol lengket dengan transisi CSS</li>
                    <li>Situs dwibahasa (Bahasa Indonesia dan Inggris)</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Memperkenalkan proyek terdahulu saya</li>
                    <li>Menunjukkan kompetensi bidang pekerjaan saya</li>
                </ul>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam PHP/HTML, CSS, and JavaScript</li>
                    <li>Kemampuan mendesain halaman web</li>
                </ul>
            </div>
        </div>

        <!-- <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_web-portfolio/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p></p>
                <h3></h3>
                <h4></h4>
            </div>
        </div> -->
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
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Web Portfolio | Eko Khoirunnas Priyadi</title>
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
        <h2>Web Portfolio</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_web-portfolio/main1.jpg">
                    <div class="ph1_desc"><p>Layout for medium-sized window</p></div>
                    <img class="ph1_pic" src="pr_web-portfolio/main2.jpg">
                    <div class="ph1_desc"><p>Layout for small-sized window</p></div>
                    <img class="ph1_pic" src="pr_web-portfolio/main3.jpg">
                    <div class="ph1_desc"><p>Image slide</p></div>
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
                        <td><b>PHP/HTML, CSS, JavaScript</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Jan - Mar 2019</b></td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Individual</b></td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Showcasing my projects and work experiences</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p></p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0;">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Responsive design</li>
                    <li>Images slide and hover effect</li>
                    <li>Sticky buttons with CSS transition</li>
                    <li>Bilingual website (Indonesian and English)</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Introducing my previous projects</li>
                    <li>Showing my working field competence</li>
                </ul>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in PHP/HTML, CSS, and JavaScript</li>
                    <li>Website design skill</li>
                </ul>
            </div>
        </div>

        <!-- <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_web-portfolio/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p></p>
                <h3></h3>
                <h4></h4>
            </div>
        </div> -->
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
