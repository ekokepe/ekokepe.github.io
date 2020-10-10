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
    <meta name="description" content="Kita dapat mengonversi tabel Distribusi Angklung menjadi tabel kebutuhan Angklung dengan nama pemain yang bersesuaian. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/dist_tanpa.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Distribusi Angklung (tanpa Tonjur) | Eko Khoirunnas P"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Kita dapat mengonversi tabel Distribusi Angklung menjadi tabel kebutuhan Angklung dengan nama pemain yang bersesuaian. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/dist_tton.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Distribusi Angklung (tanpa Tonjur) | Eko Khoirunnas P"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/dist_tton.JPG"/>
    <meta name="twitter:description" content="Kita dapat mengonversi tabel Distribusi Angklung menjadi tabel kebutuhan Angklung dengan nama pemain yang bersesuaian. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Distribusi Angklung (tanpa Tonjur) | Eko Khoirunnas P</title>
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
        <h2>Tabel Distribusi Angklung (tanpa Tonjur)</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_dist-tanpa/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: tabel Distribusi Angklung dengan nama pemain (kiri). <b>Keluaran</b>: tabel kebutuhan Angklung (kanan).</p></div>
                    <img class="ph1_pic" src="pr_dist-tanpa/main2.jpg">
                    <div class="ph1_desc"><p>Fitur Tabel Konversi (kanan)</p></div>
                    <img class="ph1_pic" src="pr_dist-tanpa/main3.jpg">
                    <div class="ph1_desc"><p>Panduan pengguna</p></div>
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
                        <td><b>Excel Formula</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Apr 2014 - Jan 2018 </b> (versi beta terbaru)</td>
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
                    <p>KPA-ITB melabeli Angklung mereka menggunakan <b>Nomor Angklung</b> yang bersesuaian dengan nada mutlaknya (contoh Angklung nomor 6 untuk nada C4, dsb.). Proses <b>Distribusi Angklung</b> menentukan Angklung mana saja yang harus dimainkan oleh seorang pemain dalam suatu lagu.</p>

                    <p>Sederhananya, program ini mengonversi tabel Distribusi Angklung menjadi sebuah tabel yang menunjukkan kebutuhan Angklung dalam lagu, beserta nama pemain yang bersesuaian.</p>

                    <p><b>Tabel Konversi</b> menunjukkan nada mana yang harus dimainkan dengan sebuah Angklung pada suatu nada dasar.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Pengecekan nomor Angklung</li>
                    <li>Pembuatan Tabel Konversi</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Mendukung proses pengecekan kelengkapan jumlah Angklung dalam lagu yang dilakukan pada awal sesi latihan</p>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan penggunaan Excel formula</li>
                    <li>Pembuatan susunan tabel ramah pengguna</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_dist-tanpa/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

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
    <meta name="description" content="We can convert Angklung distribution tabel into Angklung number requirement table with its corresponding player name in a song. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/dist_tanpa.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Angklung Distribution (without Tonjur) | Eko Khoirunnas P"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="We can convert Angklung distribution tabel into Angklung number requirement table with its corresponding player name in a song. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/dist_tton.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Angklung Distribution (without Tonjur) | Eko Khoirunnas P"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/dist_tton.JPG"/>
    <meta name="twitter:description" content="We can convert Angklung distribution tabel into Angklung number requirement table with its corresponding player name in a song. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Angklung Distribution (without Tonjur) | Eko Khoirunnas P</title>
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
        <h2>Angklung Distribution Table (without Tonjur)</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_dist-tanpa/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: Angklung Distribution Table with player name (left). <b>Output</b>: Angklung requirement table (right)</p></div>
                    <img class="ph1_pic" src="pr_dist-tanpa/main2.jpg">
                    <div class="ph1_desc"><p>Conversion table feature (right)</p></div>
                    <img class="ph1_pic" src="pr_dist-tanpa/main3.jpg">
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
                        <td><b>Excel Formula</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Apr 2014 - Jan 2018 </b> (latest beta update)</td>
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
                    <p>KPA-ITB label their Angklungs with <b><i>Angklung number</i></b> which corresponds to its absolute notes (e.g. Angklung number 6 is for C4 note, etc.). <b><i>Angklung distribution process</b></i> determines which Angklung that must be played by a player in a song.</p>

                    <p>Simply put, this program converts Angklung distribution tabel into a table that shows Angklung number requirement list with its corresponding player name in a song.</p>

                    <p><b><i>Conversion Table</i></b> shows which note in a musical scale that must be played using certain Angklung.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Angklung number validity check</li>
                    <li>Conversion table generator</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Supporting Angklung amount completeness checking process in the beginning of rehearsal session</p>
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
                    <img class="ph2_pic" src="pr_dist-tanpa/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"Accelerates Angklung distribution checking process. It will take hours if it done manually."</p>
                <h3>Bobi Aulia Syafiq</h3>
                <h4>Former Music Director staff of KPA-ITB</h4>
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
