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
    <meta name="description" content="Program ini menandai nada pada partitur Angklung, menunjukkan Angklung mana yang harus dimainkan pada waktu tertentu dalam lagu. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/angk-marker.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Penanda Partitur Notasi Angka | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Program ini menandai nada pada partitur Angklung, menunjukkan Angklung mana yang harus dimainkan pada waktu tertentu dalam lagu. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/angkmark.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Penanda Partitur Notasi Angka | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/angkmark.JPG"/>
    <meta name="twitter:description" content="Program ini menandai nada pada partitur Angklung, menunjukkan Angklung mana yang harus dimainkan pada waktu tertentu dalam lagu. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Penanda Partitur Notasi Angka | Eko Khoirunnas Priyadi</title>
</head>
<body>

    <?php //Tambahkan Header
        global $hdindex;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 1;
        include($path);
    ?>

    <div id="body">
        <h2>Penanda Partitur Notasi Angka</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_angk-marker/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>:  Partitur Angklung yang belum ditandai</p></div>
                    <img class="ph1_pic" src="pr_angk-marker/main2.jpg">
                    <div class="ph1_desc"><p>Antarmuka pengguna Penanda Partitur Notasi Angka</p></div>
                    <img class="ph1_pic" src="pr_angk-marker/main3.jpg">
                    <div class="ph1_desc"><p><b>Contoh penggunaan</b>: Partitur yang sudah ditandai untuk Angklung nomor B, 15, dan 25 </p></div>
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
                        <td><b>Jan - Apr 2018</b> (versi alfa)</td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
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
                    <p>KPA-ITB melabeli Angklung mereka menggunakan <b>Nomor Angklung</b> yang bersesuaian dengan nada mutlaknya (contoh Angklung nomor 6 untuk nada C4, dsb.). Proses <b>Distribusi Angklung</b> menentukan Angklung mana saja yang harus dimainkan oleh seorang pemain dalam suatu lagu. Mendistribusikan Angklung dalam tim penampilan kecil (sekitar 10-15 pemain) dapat cukup menantang, karena bisa saja setiap orang memegang lebih dari satu Angklung yang harus dimainkan secara bersamaan. Penggunaan <a href="http://ekokepe.rf.gd/projects/tonjur-table.php?language=id" target="_blank">Tabel Tonjur</a> akan terasa berlebihan.</p>

                    <p>Program ini membuat tanda pada nada dalam partitur Angklung, menunjukkan Angklung mana yang harus dimainkan pada waktu tertentu dalam lagu. Kemudian, tanda-tanda ini juga dapat membantu proses Distribusi Angklung dengan menunjukkan jika ada nada yang tidak dapat dimainkan oleh pemain manapun dalam tim.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Penandaan banyak set distribusi sekaligus</li>
                    <li>Pilihan warna penanda yang fleksibel</li>
                    <li>Penghapusan penanda Angklung</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Mendukung proses Distribusi Angklung untuk tim penampilan kecil</li>
                    <li>Meminimalkan faktor kesalahan manusia dalam proses penandaan partitur Angklung</li>
                </ul>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam VBA-Excel</li>
                    <li>Kemampuan <i>debugging</i> & <i>refactoring</i></li>
                    <li>Translasi fitur ke algoritma</li>
                    <li>Kemampuan mendesain antarmuka pengguna</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_angk-marker/hist1.jpg">
                    <div class="ph2_desc"><p>Partitur yang ditandai secara manual</p></div>
                    <img class="ph2_pic" src="pr_angk-marker/hist2.jpg">
                    <div class="ph2_desc"><p>Partitur yang ditandai menggunakan program ini</p></div>
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

            <div id="test">
                <p>"Mempercepat proses pemeriksaan Distribusi Angklung yang biasanya dapat membutuhkan waktu berjam-jam jika dikerjakan secara manual."</p>
                <h3>Bobi Aulia Syafiq</h3>
                <h4>Eks-staf bidang <i>Music Director</i> KPA-ITB</h4>
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
    <meta name="description" content="This program marks notes in an Angklung score, indicating what Angklung must be played at a certain time in the song. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/angk-marker.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Not Angka Musical Score Marker | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="This program marks notes in an Angklung score, indicating what Angklung must be played at a certain time in the song. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/angkmark.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Not Angka Musical Score Marker | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/angkmark.JPG"/>
    <meta name="twitter:description" content="This program marks notes in an Angklung score, indicating what Angklung must be played at a certain time in the song. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Not Angka Musical Score Marker | Eko Khoirunnas Priyadi</title>
</head>
<body>

    <?php //Tambahkan Header
        global $hdindex;
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        $hdindex = 0;
        $shr = 1;
        include($path);
    ?>

    <div id="body">
        <h2>Not Angka Musical Score Marker</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_angk-marker/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>:  Unmarked Angklung musical score</p></div>
                    <img class="ph1_pic" src="pr_angk-marker/main2.jpg">
                    <div class="ph1_desc"><p>Not Angka Musical Score Marker UI</p></div>
                    <img class="ph1_pic" src="pr_angk-marker/main3.jpg">
                    <div class="ph1_desc"><p><b>Result example</b>: Marked musical score for Angklung number B, 15, and 25</p></div>
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
                        <td><b>Jan - Apr 2018</b> (alpha release)</td>
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
                    <p>KPA-ITB label their Angklungs with <b><i>Angklung number</i></b> which corresponds to its absolute notes (e.g. Angklung number 6 is for C4 note, etc.). <b><i>Angklung distribution process</b></i> determines which Angklung set that must be played by a player. Distributing Angklung in a small performance group (consists of 10-15 players) can be challenging, because each person should hold more than one Angklungs that must be played simultaneously. <a href="http://ekokepe.rf.gd/projects/tonjur-table.php" target="_blank">Tonjur table</a> would be a little idealistic.</p>

                    <p>This program marks notes in an Angklung score, indicating which Angklung must be played by a player at certain time in the song. Then, these marks can also help distribution process by showing if there are notes that can't be played by any player in the group.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Multiple distribution set marking</li>
                    <li>Flexible choice of marker colors</li>
                    <li>Angklung marker deletion</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Supporting Angklung distribution process for small performance group</li>
                    <li>Minimizing human error factor in Angklung score marking process</li>
                </ul>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in VBA-Excel</li>
                    <li>Debugging & refactoring skill</li>
                    <li>Feature-to-algorithm translation</li>
                    <li>UI designing skill</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_angk-marker/hist1.jpg">
                    <div class="ph2_desc"><p>Manually-marked score</p></div>
                    <img class="ph2_pic" src="pr_angk-marker/hist2.jpg">
                    <div class="ph2_desc"><p>Score marked using this program</p></div>
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

            <div id="test">
                <p>"Accelerates Angklung distribution process. It will take hours if it done manually."</p>
                <h3>Bobi Aulia Syafiq</h3>
                <h4>Former Music Director staff of Keluarga Paduan Angklung (KPA) ITB</h4>
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
