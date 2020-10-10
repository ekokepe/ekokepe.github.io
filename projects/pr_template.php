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
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>PTemplat | Eko Khoirunnas Priyadi</title>
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
        <h2>Pembuat Tabel Tonjur & Konversi</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_temp/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: Partitur Angklung dalam notasi angka</p></div>
                    <img class="ph1_pic" src="pr_temp/main2.jpg">
                    <div class="ph1_desc"><p><b>Keluaran</b>: Tabel Tonjur (atas) dan Tabel Konversi (Bawah)</p></div>
                    <img class="ph1_pic" src="pr_temp/main3.jpg">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
                    <img class="ph1_pic" src="pr_temp/main4.jpg">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
                    <img class="ph1_pic" src="pr_temp/main5.jpg">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
                </div>

                <div id="ph1_nav" style="display:none;" >
                    <div >
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
                        <td>Bahasa</td>
                        <td>:</td>
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan </td>
                        <td>:</td>
                        <td><b>Jul 2014 - Apr 2017</b> (versi beta terbaru)</td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Berpartner</b> (2 orang)</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td><b>Mendukung proses latihan KPA-ITB</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Angklung dapat dimainkan oleh sekelompok orang. Dalam sebuah penampilan, satu orang dapat memegang hingga 5 buah Angklung. Agar semua nada dalam lagu dapat dimainkan, setiap orang dalam tim seharusnya tidak memegang Angklung-angklung yang harus dimainkan pada waktu bersamaan, atau yang harus dimainkan secara berurutan. KPA-ITB melabeli Angklung mereka menggunakan <b>Nomor Angklung</b> yang bersesuaian dengan nada mutlaknya (contoh Angklung nomor 6 untuk nada C4, dsb.).</p>

                    <p><b>Tonjur</b> adalah sebuah tabel yang menunjukkan hubungan antara Angklung-angklung dalam lagu. Baris dan kolom dinomori menggunakan nomor Angklung yang muncul dalam lagu. Sel berwarna abu-abu dalam tabel berarti dua nomor Angklung yang bersangkutan (secara baris dan kolom) seharusnya tidak dimainkan oleh orang yang sama, karena harus dimainkan pada waktu bersamaan atau harus dimainkan secara berurutan.</p>

                    <p><b>Tabel Konversi</b> menunjukkan nada mana yang harus dimainkan dengan sebuah Angklung pada suatu nada dasar. Kolom-kolom dinomori dengan nomor Angklung yang muncul dalam lagu.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Pengecekan ejaan notasi angka</li>
                    <li>Pengenalan baris-baris partitur</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Keluaran program ini dapat digunakan sebagai referensi pada proses Distribusi Angklung, yaitu proses untuk menentukan Angklung apa saja yang harus dimainkan oleh seorang pemain dalam lagu.</p>
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
                    <img class="ph2_pic" src="pr_temp/hist1.jpg">
                    <div class="ph2_desc"><p>Versi lebih lawas program ini, dalam bahasa C++</p></div>
                    <img class="ph2_pic" src="pr_temp/hist2.jpg">
                    <div class="ph2_desc"><p>Panduan Pengguna</p></div>
                    <img class="ph2_pic" src="pr_temp/hist3.jpg">
                    <div class="ph2_desc"><p>Panduan Pengguna</p></div>
                    <img class="ph2_pic" src="pr_temp/hist4.jpg">
                    <div class="ph2_desc"><p>Panduan Pengguna</p></div>
                    <img class="ph2_pic" src="pr_temp/hist5.jpg">
                    <div class="ph2_desc"><p>Panduan Pengguna</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,5)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p></p>
                <h3></h3>
                <h4></h4>
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
<html lang="en-US>
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
    <title>PTemplate | Eko Khoirunnas Priyadi</title>
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
        <h2>Tonjur & Conversion Table Generator</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_temp/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: Angklung song score in Not Angka notation</p></div>
                    <img class="ph1_pic" src="pr_temp/main2.jpg">
                    <div class="ph1_desc"><p><b>Output</b>: Tonjur table (top) and conversion table (bottom) indicating musical notes that must be played using corresponding Angklung number</p></div>
                    <img class="ph1_pic" src="pr_temp/main3.jpg">
                    <div class="ph1_desc"><p>Program's Manual</p></div>
                    <img class="ph1_pic" src="pr_temp/main4.jpg">
                    <div class="ph1_desc"><p>Program's Manual</p></div>
                    <img class="ph1_pic" src="pr_temp/main5.jpg">
                    <div class="ph1_desc"><p>Program's Manual</p></div>
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
                        <td>Language</td>
                        <td>:</td>
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Jul 2014 - Apr 2017</b> (latest beta update)</td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Partnered</b> (2 people)</td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Supporting rehearsal process of KPA-ITB</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Angklung can be played by a group of people. In a performance, each person can hold up to 5 Angklungs. In order to all notes in the song can be played, each person in the group should not hold Angklungs that must be played at the same time or be played one after another.</p>

                    <p><b>Tonjur</b> is a table that shows correlation between Angklungs in a song. Rows and columns are numbered using Angklung number that present in the song. Marked cell in the table means the two Angklungs in concern should not be played by the same person.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Not Angka notation spelling check</li>
                    <li>Musical score row recognition</li>
                    <li>Program's manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>The outputs can be used as a reference when distributing Angklungs to the players in group.</p>
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
                    <img class="ph2_pic" src="pr_temp/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                    <img class="ph2_pic" src="pr_temp/hist2.jpg">
                    <div class="ph2_desc"><p>Program's Manual</p></div>
                    <img class="ph2_pic" src="pr_temp/hist3.jpg">
                    <div class="ph2_desc"><p>Program's Manual</p></div>
                    <img class="ph2_pic" src="pr_temp/hist4.jpg">
                    <div class="ph2_desc"><p>Program's Manual</p></div>
                    <img class="ph2_pic" src="pr_temp/hist5.jpg">
                    <div class="ph2_desc"><p>Program's Manual</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,5)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p>"Very influential. If this program never existed, then Angklung distribution process will be complicated and take a long time."</p>
                <h3>Naufal Andika</h3>
                <h4>Rehearsal division staff of Keluarga Paduan Angklung (KPA) ITB</h4>
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
