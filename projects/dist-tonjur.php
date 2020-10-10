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
    <meta name="description" content="Kini kita dapat dengan mudah memasangkan Angklung kepada pemain dalam tim menggunakan Tabel Distribusi ini. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/dist-tonjur.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Distribusi Angklung (dengan Tonjur) | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Kini kita dapat dengan mudah memasangkan Angklung kepada pemain dalam tim menggunakan Tabel Distribusi ini. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/dist_ton.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Distribusi Angklung (dengan Tonjur) | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/dist_ton.jpg"/>
    <meta name="twitter:description" content="Kini kita dapat dengan mudah memasangkan Angklung kepada pemain dalam tim menggunakan Tabel Distribusi ini. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Distribusi Angklung (dengan Tonjur) | Eko Khoirunnas Priyadi</title>
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
        <h2>Distribusi Angklung (dengan Tonjur)</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_dist-tonjur/main1.jpg">
                    <div class="ph1_desc"><p>Masukan Tabel Tonjur sebagai referensi program (atas) dan ringkasan distribusi Angklung (bawah)</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main2.jpg">
                    <div class="ph1_desc"><p><b>Proses</b>: Pengecekan nomor Angklung yang menampilkan peringatan saat pengguna salah memasukkan nomor Angklung.</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main3.jpg">
                    <div class="ph1_desc"><p>Distribusi dengan peringatan kesalahan pasang (atas) dan distribusi akhir (bawah)</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main4.jpg">
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
                        <td><b>Excel formula</b> (kebanyakan) <b>dan VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Jul 2015 - Mar 2017</b> (versi beta terbaru)</td>
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
                    <p>Angklung dapat dimainkan oleh sekelompok orang. Dalam sebuah penampilan, satu orang dapat memegang hingga 5 buah Angklung. Agar semua nada dalam lagu dapat dimainkan, setiap orang dalam tim seharusnya tidak memegang Angklung-angklung yang harus dimainkan pada waktu bersamaan, atau yang harus dimainkan secara berurutan. KPA-ITB melabeli Angklung mereka menggunakan <b>Nomor Angklung</b> yang bersesuaian dengan nada mutlaknya (contoh Angklung nomor 6 untuk nada C4, dsb.). Proses <b>Distribusi Angklung</b> menentukan Angklung mana saja yang harus dimainkan oleh seorang pemain dalam suatu lagu.<p>

                    <p>Mendistribusikan Angklung dalam tim dapat membingungkan. <a href="http://ekokepe.rf.gd/projects/tonjur-table.php?language=id" target="_blank">Tabel Tonjur</a> dapat digunakan sebagai referensi dalam proses ini. Tetapi, membaca tabel tersebut satu sel per satu sel akan memakan waktu lama. Dengan Tabel Distribusi ini, kita dapat dengan mudah memasangkan Angklung untuk pemain. Pengguna akan mendapatkan peringatan saat sebuah pasangan nomor Angklung tidak dapat dimainkan secara bersamaan oleh orang yang sama.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Indikator warna sel</li>
                    <li>Peringatan pasangan nomor Angklung</li>
                    <li>Pengecekan nomor Angklung</li>
                    <li>Ringkasan distribusi Angklung</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Mempercepat proses distribusi Angklung dan meminimalkan faktor kesalahan manusia.</p>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan menggunakan Excel formula</li>
                    <li>Pembuatan susunan tabel ramah pengguna</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_dist-tonjur/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"Sangat memudahkan dalam pemasangan Angklung untuk pemain. Tanpa program ini, pendistribusian Angklung dengan pertimbangan Angklung yang bentrok akan memakan waktu lama."</p>
                <h3>Nauval Rifdan</h3>
                <h4>Staf divisi Pelatihan Keluarga Paduan Angklung (KPA) ITB</h4>
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
    <meta name="description" content="With Tonjur table as a reference, we can easily pair Angklungs to the player in groups using this distribution table. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/dist-tonjur.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Angklung Distribution (with Tonjur) | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="With Tonjur table as a reference, we can easily pair Angklungs to the player in groups using this distribution table. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/dist_ton.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Angklung Distribution (with Tonjur) | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/dist_ton.jpg"/>
    <meta name="twitter:description" content="With Tonjur table as a reference, we can easily pair Angklungs to the player in groups using this distribution table. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Angklung Distribution (with Tonjur) | Eko Khoirunnas Priyadi</title>
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
        <h2>Angklung Distribution Table (with Tonjur)</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_dist-tonjur/main1.jpg">
                    <div class="ph1_desc"><p>Tonjur table input as a reference of the program (top) and Angklung distribution summary (bottom)</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main2.jpg">
                    <div class="ph1_desc"><p><b>Process</b>: Angklung number validity checking, shows a warning when an invalid Angklung number entered.</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main3.jpg">
                    <div class="ph1_desc"><p>Distribution with error warning (top) and Final distribution (bottom)</p></div>
                    <img class="ph1_pic" src="pr_dist-tonjur/main4.jpg">
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
                        <td><b>Excel formula</b> (mostly) <b>and VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Jul 2015 - Mar 2017</b> (latest beta update)</td>
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
                    <p>Angklung can be played by a group of people. In a performance, each person can hold up to 5 Angklungs. In order to all notes in the song can be played, each person in the group should not hold Angklungs that must be played at the same time or must be played one after another. KPA-ITB label their Angklungs with <b><i>Angklung number</i></b> which corresponds to its absolute notes (e.g. Angklung number 6 is for C4 note, etc.). <b><i>Angklung distribution process</b></i> determines which Angklung that must be played by a player in a song.</p>

                    <p>Distributing Angklung in a group can be complicated. <a href="http://ekokepe.rf.gd/projects/tonjur-table.php" target="_blank">Tonjur table</a> can be used as a reference of this process. But, checking it one cell at a time will take a long time. With this Distribution Table, we can easily pair Angklungs to the player. User can receive a warning when an Angklung number pair cannot be played simultaneously by a player.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Cell color indicator</li>
                    <li>Angklung number pair warning</li>
                    <li>Angklung number validity checking</li>
                    <li>Angklung distribution summary</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Accelerating Angklung distribution process and minimizing human error factors.</p>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Excel formulas usage skill</li>
                    <li>User-friendly table layout making</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_dist-tonjur/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"Very helpful for the Angklung distribution process. Without this program, the job will take a longer time."</p>
                <h3>Nauval Rifdan</h3>
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
