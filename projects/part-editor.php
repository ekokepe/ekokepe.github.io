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
    <meta name="description" content="Dengan fitur yang lebih lengkap, kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/part-editor.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Partitur Editor | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Dengan fitur yang lebih lengkap, kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/peditor_new.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Partitur Editor | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/peditor_new.jpg"/>
    <meta name="twitter:description" content="Dengan fitur yang lebih lengkap, kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Partitur Editor | Eko Khoirunnas Priyadi</title>
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
        <h2><i>Partitur Editor</i></h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_part-editor/main1.jpg">
                    <div class="ph1_desc"><p>Halaman selamat datang</p></div>
                    <img class="ph1_pic" src="pr_part-editor/main2.JPG">
                    <div class="ph1_desc"><p>Jendela kendali utama</p></div>
                    <img class="ph1_pic" src="pr_part-editor/main3.JPG">
                    <div class="ph1_desc"><p><b>Contoh penggunaan</b>: Partitur Notasi Angka sebelum (dalam warna latar merah muda) dan sesudah (dalam warna latar biru muda)</p></div>
                    <img class="ph1_pic" src="pr_part-editor/main4.JPG">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
                </div>


                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,4)"></span>
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
                        <td><b>VB.NET</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Okt - Des 2018</b> (versi beta terbaru)</td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Berkelompok</b> (5 orang)</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Menyediakan alat alternatif pengetikan partitur Notasi Angka</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Sebuah <i>toolbar</i> yang mendukung pengetikan partitur Notasi Angka di <i>Microsoft Excel</i>. Program ini memiliki bermacam-macam fitur musik, di antaranya pembuatan tanda pengulangan, garis birama spesial, tanda tuplet, dinamika lagu, aturan aliran lagu, transposisi nada, dan tanda teknik permainan Angklung.</p>

                    <p>Program ini adalah hasil modifikasi program <a href="http://ekokepe.rf.gd/projects/na-typing.php?language=id" target="_blank"><i>Toolbar</i> Pengetikan Notasi Angka</a>. Anda dapat mengunduh program ini (versi beta) secara gratis dengan penyebaran bertanggung jawab, di sini: <a href="https://ekokpriyadi.blogspot.com/2018/11/pengetikan-partitur-not-angka.html" target="_blank">Pengetikan Partitur Not Angka Angklung</a>.​</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Antarmuka pengguna</li>
                    <li>Berbagai fitur notasi musik</li>
                    <li>Panduan pengguna dengan penjelasan musik dasar</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Mempercepat proses pengetikan partitur Notasi Angka oleh tim-tim pemain Angklung</li>
                    <li>Merumuskan purwarupa bentuk standar partitur Notasi Angka Angklung</li>
                </ul>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam VB.NET</li>
                    <li>Kemampuan <i>debugging</i> & <i>refactoring</i></li>
                    <li>Translasi fitur ke algoritma</li>
                    <li>Kemampuan mendesain antarmuka pengguna</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_part-editor/hist1.jpg">
                    <div class="ph2_desc"><p>Catatan <i>debugging</i> dan <i>refactoring</i></p></div>
                    <img class="ph2_pic" src="pr_part-editor/hist2.jpg">
                    <div class="ph2_desc"><p>Catatan fitur pengaturan ketukan</p></div>
                    <img class="ph2_pic" src="pr_part-editor/hist3.jpg">
                    <div class="ph2_desc"><p>Catatan fitur garis birama spesial</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <!-- <div id="test">
                <p></p>
                <h3></h3>
                <h4></h4>
            </div> -->
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
    <meta name="description" content="With more advance features, we can now easily make a musical score in Not Angka notation using Microsoft Excel and this program. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/part-editor.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Partitur Editor | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="With more advance features, we can now easily make a musical score in Not Angka notation using Microsoft Excel and this program. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/peditor_new.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Partitur Editor | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/peditor_new.jpg"/>
    <meta name="twitter:description" content="With more advance features, we can now easily make a musical score in Not Angka notation using Microsoft Excel and this program. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Partitur Editor | Eko Khoirunnas Priyadi</title>
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
        <h2>"Partitur Editor"</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_part-editor/main1.jpg">
                    <div class="ph1_desc"><p>Program's splash screen</p></div>
                    <img class="ph1_pic" src="pr_part-editor/main2.JPG">
                    <div class="ph1_desc"><p>Main window</p></div>
                    <img class="ph1_pic" src="pr_part-editor/main3.JPG">
                    <div class="ph1_desc"><p><b>Usage example</b>: Not Angka musical score before (in pink background) and after (in blue background) </p></div>
                    <img class="ph1_pic" src="pr_part-editor/main4.JPG">
                    <div class="ph1_desc"><p>User Manual</p></div>
                </div>


                <div id="ph1_nav" style="display:none;">
                    <div>
                        <span class="nav1 actnav" onclick="changeSlide(1,1)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,2)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,3)"></span>
                        <span class="nav1 pasnav" onclick="changeSlide(1,4)"></span>
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
                        <td><b>VB.NET</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Oct - Dec 2018</b> (latest beta update)</td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Group</b> (5 people)</td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Providing alternative tool for Not Angka musical score typing</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>A toolbar which supports Not Angka musical score making in Microsoft Excel. It contains various musical features, such as making repetition mark, special barline, tuplet mark, song dynamics, song flow directions, note transposition, and Angklung playing techniques mark.</p>

                    <p>This program is a modified version of <a href="http://ekokepe.rf.gd/projects/na-typing.php" target="_blank">Not Angka Typing toolbar</a>. You can download the program (beta version, in Indonesian language) for free here: <a href="https://ekokpriyadi.blogspot.com/2018/11/pengetikan-partitur-not-angka.html" target="_blank">Pengetikan Partitur Not Angka Angklung</a>.​</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>User Interface</li>
                    <li>Various musical notation features</li>
                    <li>User manual with basic music explanation (in Indonesian lang.)</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Accelerating Not Angka musical score typing process of Angklung player groups</li>
                    <li>Establishing early standard form of Not&nbsp;Angka musical score</li>
                </ul>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in VB.NET</li>
                    <li>Debugging & refactoring skill</li>
                    <li>Feature-to-algorithm translation</li>
                    <li>UI designing skill</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_part-editor/hist1.jpg">
                    <div class="ph2_desc"><p>Debugging and refactoring note</p></div>
                    <img class="ph2_pic" src="pr_part-editor/hist2.jpg">
                    <div class="ph2_desc"><p>Notes on "Beat alignment" feature</p></div>
                    <img class="ph2_pic" src="pr_part-editor/hist3.jpg">
                    <div class="ph2_desc"><p>Notes on "Special barline" feature</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <!-- <div id="test">
                <p></p>
                <h3></h3>
                <h4></h4>
            </div> -->
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
