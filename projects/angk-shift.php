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
    <meta name="description" content="Pergantian Angklung di antara pemain selama jeda penampilan dapat membingungkan. Program ini dapat membuat Tabel Panduan Pergantian Angklung. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/angk-shift.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Tabel Sengketa Angklung | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Pergantian Angklung di antara pemain selama jeda penampilan dapat membingungkan. Program ini dapat membuat Tabel Panduan Pergantian Angklung. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/sengk.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Tabel Sengketa Angklung | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/sengk.jpg"/>
    <meta name="twitter:description" content="Pergantian Angklung di antara pemain selama jeda penampilan dapat membingungkan. Program ini dapat membuat Tabel Panduan Pergantian Angklung. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Tabel Sengketa Angklung | Eko Khoirunnas Priyadi</title>
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
        <h2>Tabel Sengketa Angklung</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_angk-shift/main1.jpg">
                    <div class="ph1_desc"><p><b>Persiapan</b>: Jumlah Angklung yang tersedia, berdasar nomor dan warna labelnya</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main2.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: Judul lagu, nama pemain, dan pasangan nomor-warna Angklung</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main3.jpg">
                    <div class="ph1_desc"><p><b>Contoh hasil</b>: Tabel Sengketa Angklung <b>Normal</b> (169 Angklung dibutuhkan)</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main4.jpg">
                    <div class="ph1_desc"><p><b>Contoh hasil</b>: Tabel Sengketa Angklung <b>Minimal</b> (157 Angklung dibutuhkan -- lebih sedikit 12 Angklung)</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main5.jpg">
                    <div class="ph1_desc"><p>Panduan pengguna</p></div>
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
                        <td>Bahasa</td>
                        <td>:</td>
                        <td><b>VBA-Excel dan Excel formula</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Agu 2016</b> (versi beta terbaru)</td>
                    </tr>
                    <tr>
                        <td>Jenis Pekerjaan</td>
                        <td>:</td>
                        <td><b>Perorangan</b></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><b>Mendukung proses latihan KPA-ITB</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>KPA-ITB melabeli Angklung mereka menggunakan <b>Nomor dan Warna Angklung</b> yang bersesuaian dengan nada mutlaknya (contoh Angklung nomor 6 untuk nada C4, dsb.). Proses <b>Distribusi Angklung</b> menentukan Angklung mana saja yang harus dimainkan oleh seorang pemain dalam suatu lagu.</p>

                    <p>Sebuah tim paduan Angklung dapat menampilkan hingga 3 lagu dalam sebuah penampilan reguler. Namun, jika karakter lagu-lagunya terlalu berbeda, maka set distribusi Angklung untuk setiap lagu juga dapat berbeda satu sama lain. Angklung dapat ditukarkan antar pemain selama jeda penampilan. Tetapi jika dilakukan tanpa panduan, hal ini dapat membingungkan. Program ini dapat membuat sebuah <b>Tabel Sengketa Angklung.</b> yang dapat menjadi jawaban atas masalah ini.</p>

                    <p>Saya juga membuat algoritma Sengketa Angklung Minimal. Jumlah Angklung yang dibutuhkan dalam sebuah penampilan dapat diminimalkan, sehingga dapat meningkatkan efektivitas distribusi Angklung.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Algoritma Sengketa Angklung Minimal</li>
                    <li>Tabel instruksi perpindahan Angklung</li>
                    <li>Tabel nomor Angklung dengan nama pemain</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Mempercepat pembuatan Tabel Sengketa Angklung dan meminimalkan faktor kesalahan manusia</li>
                    <li>Meminimalkan total jumlah Angklung yang dibutuhkan dalam sebuah penampilan</li>
                </ul>
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
                    <img class="ph2_pic" src="pr_angk-shift/hist1.jpg">
                    <div class="ph2_desc"><p>Tabel Sengketa Angklung yang dibuat secara manual. Proses ini dapat memakan waktu lebih lama dan menimbulkan faktor kesalahan manusia.</p></div>
                    <img class="ph2_pic" src="pr_angk-shift/hist2.jpg">
                    <div class="ph2_desc"><p>Catatan tentang skema algoritma Sengketa&nbsp;Angklung&nbsp;Minimal</p></div>
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
                <p>"Mempercepat proses pemeriksaan kebutuhan Angklung yang biasanya dapat membutuhkan waktu berjam-jam jika dikerjakan secara manual."</p>
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
    <meta name="description" content="Shifting Angklungs between players during performance break can be complicated. This program can generate an Angklung Shift Guide Table. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/angk-shift.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Angklung Shift Guide Table | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Shifting Angklungs between players during performance break can be complicated. This program can generate an Angklung Shift Guide Table. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/sengk.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Angklung Shift Guide Table | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/sengk.jpg"/>
    <meta name="twitter:description" content="Shifting Angklungs between players during performance break can be complicated. This program can generate an Angklung Shift Guide Table. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Angklung Shift Guide Table | Eko Khoirunnas Priyadi</title>
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
        <h2>Angklung Shift Guide Table</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_angk-shift/main1.jpg">
                    <div class="ph1_desc"><p><b>Preparation</b>: Available amount of Angklung per label number and color</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main2.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: song name, player name and Angklung number-color</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main3.jpg">
                    <div class="ph1_desc"><p><b>Result example: Normal</b> Angklung shift table (169 Angklungs needed)</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main4.jpg">
                    <div class="ph1_desc"><p><b>Result example: Minimal</b> Angklung shift table (157 Angklungs needed -- 12 less than Normal).</p></div>
                    <img class="ph1_pic" src="pr_angk-shift/main5.jpg">
                    <div class="ph1_desc"><p>User Manual</p></div>
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
                        <td><b>VBA-Excel and Excel formula</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Aug 2016</b> (latest beta update)</td>
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
                    <p>KPA-ITB label their Angklungs with <b><i>Angklung number and color</i></b> which corresponds to its absolute notes (e.g. Angklung number 6 is for C4 note, etc.). <b><i>Angklung distribution process</b></i> determines which Angklung set that must be played by a player in a song.</p>

                    <p>An Angklung group can perform up to 3 songs in one regular performance. However, if the song characteristics are too different, then Angklung distribution set for each song can also be different one another. Angklungs can be shifted between players during performance break. But without a guide, this practice can be complicated. This program can generate an <b><i>Angklung Shift Guide Table</i></b>.</p>

                    <p>I also created the Minimal Angklung Shift algorithm, so that the amount of Angklungs required in a performance can be reduced, thus increasing Angklung distribution efficiency.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Minimal Angklung Shift algorithm</li>
                    <li>Angklung Shift Instruction table</li>
                    <li>Angklung number table with corresponding player name</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Accelerating Angklung Shift Guide table making and minimizing human error factors.</li>
                    <li>Minimizing total amount of Angklungs requirement in a performance</li>
                </ul>
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
                    <img class="ph2_pic" src="pr_angk-shift/hist1.jpg">
                    <div class="ph2_desc"><p>Manually-made Angklung Shift guide table. This process can take a longer time with human error factors.</p></div>
                    <img class="ph2_pic" src="pr_angk-shift/hist2.jpg">
                    <div class="ph2_desc"><p>Notes about Minimal Angklung Shift algorithm scheme.</p></div>
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
                <p>"Accelerates Angklung requirement checking process. It will take hours if it done manually."</p>
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
