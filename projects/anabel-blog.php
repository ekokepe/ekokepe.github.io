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
    <title>Blogspot Anabel | Eko Khoirunnas Priyadi</title>
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
        <h2>Blogspot Angklung Anabel Libels (Anabel)</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_anabel-blog/main1.jpg">
                    <div class="ph1_desc"><p>Salah satu artikel yang saya buat</p></div>
                </div>

                <!-- <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div> -->
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Bahasa</td>
                        <td>:</td>
                        <td><b>HTML</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Agu 2012 - Jul 2013</b></td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Berpartner</b> (2 orang)</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Promosi web kelompok extrakurikuler siswa</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Angklung Ansambel Libels (Anabel) adalah sebuah aktivitas ekstrakurikuler siswa SMAN 15 Surabaya bertema penampilan Angklung dan Kolintang. Setelah lama tidak aktif, saya menghidupkan kembali <i>blogspot</i> milik aktivitas ini dengan berbagai konten, seperti artikel pendidikan, foto, video, dan jurnal penampilan.</p>

                    <p>Anda dapat mengunjungi halaman tersebut di sini: <a href="http://angklungis15surabaya.blogspot.com/" target="_blank">Blogspot Anabel</a>.</p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0;">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Foto, <i>hyperlink</i>, dan format teks</li>
                    <li>Pemutar <i>Soundcloud</i> tertanam</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Promosi Anabel melalui web</li>
                    <li>Meningkatkan jumlah kunjungan web Anabel</li>
                </ul>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <p>Kemampuan pemrograman dasar HTML</p>
            </div>
        </div>

        <!-- <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="hist1.jpg">
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
    <title>Anabel Blogspot | Eko Khoirunnas Priyadi</title>
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
        <h2>Maintaining Anabel Blogspot</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_anabel-blog/main1.jpg">
                    <div class="ph1_desc"><p>One of many articles that I wrote</p></div>
                </div>

                <!-- <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                    </div>
                </div>
                <div id="ph1_prev" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)-1)">&#10094;</div>
                <div id="ph1_next" style="display:none;" onclick="changeSlide(1,getcurrentSlideNum (1)+1)">&#10095;</div> -->
            </div>

            <div id="desc">
                <table id="d_table">
                    <tr>
                        <td>Language</td>
                        <td>:</td>
                        <td><b>HTML</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Aug 2012 - Jul 2013</b></td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Partnered</b> (2 people)</td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Student extracurricular group web promotion</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Angklung Ansambel Libels (Anabel) is a high school student extracurricular activity of Angklung and Kolintang performance. After long time of inactivity, I reactivate its blogspot using various contents, such as educational articles, photos, videos, and performance journals.</p>

                    <p>You can visit the blogspot here : <a href="http://angklungis15surabaya.blogspot.com/" target="_blank">Anabel Blogspot</a>.</p>
                </div>
            </div>
        </div>

        <div id="desc2" style="margin: 0;">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Photo, hyperlink, text formatting</li>
                    <li>Embed Soundcloud player</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Anabel's web promotion</li>
                    <li>Increasing Anabel's website traffic</li>
                </ul>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <p>Basic programming skill in HTML</p>
            </div>
        </div>

        <!-- <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="hist1.jpg">
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
