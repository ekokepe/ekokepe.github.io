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
    <meta name="description" content="Tabel Tonjur menunjukkan hubungan antara 2 Angklung dalam lagu. Tabel Konversi menunjukkan nada mana yang harus dimainkan dengan Angklung tertentu. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/tonjur-table.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Pembuat Tabel Tonjur & Konversi | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Tabel Tonjur menunjukkan hubungan antara 2 Angklung dalam lagu. Tabel Konversi menunjukkan nada mana yang harus dimainkan dengan Angklung tertentu. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/tonjur.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Pembuat Tabel Tonjur & Konversi | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/tonjur.jpg"/>
    <meta name="twitter:description" content="Tabel Tonjur menunjukkan hubungan antara 2 Angklung dalam lagu. Tabel Konversi menunjukkan nada mana yang harus dimainkan dengan Angklung tertentu. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Pembuat Tabel Tonjur & Konversi | Eko Khoirunnas Priyadi</title>
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
                    <img class="ph1_pic" src="pr_tonjur/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: Partitur Angklung dalam notasi angka</p></div>
                    <img class="ph1_pic" src="pr_tonjur/main2.jpg">
                    <div class="ph1_desc"><p><b>Keluaran</b>: Tabel Tonjur (atas) dan Tabel Konversi (Bawah)</p></div>
                    <img class="ph1_pic" src="pr_tonjur/main3.jpg">
                    <div class="ph1_desc"><p>Panduan Pengguna</p></div>
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
                    <li>Pengecekan ejaan Notasi Angka</li>
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
                    <img class="ph2_pic" src="pr_tonjur/hist1.jpg">
                    <div class="ph2_desc"><p>Versi lebih lawas program ini, dalam bahasa C++</p></div>
                </div>

                <!-- <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,5)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div> -->
            </div>

            <div id="test">
                <p>"Sangat berpengaruh karena membuat (proses) Distribusi Angklung jadi lebih cepat dan praktis. Jika program ini tidak pernah ada, maka pembuatan Distribusi Angklung akan jadi ribet dan lama."</p>
                <h3>Naufal Andika</h3>
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
    <meta name="description" content="Tonjur table shows correlation between Angklungs in a song. Conversion Table shows which note that must be played using certain Angklung. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/tonjur-table.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Tonjur & Conversion Table Generator | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Tonjur table shows correlation between Angklungs in a song. Conversion Table shows which note that must be played using certain Angklung. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/tonjur.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Tonjur & Conversion Table Generator | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/tonjur.jpg"/>
    <meta name="twitter:description" content="Tonjur table shows correlation between Angklungs in a song. Conversion Table shows which note that must be played using certain Angklung. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Tonjur & Conversion Table Generator | Eko Khoirunnas Priyadi</title>
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
                    <img class="ph1_pic" src="pr_tonjur/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: Angklung musical score in Not Angka notation</p></div>
                    <img class="ph1_pic" src="pr_tonjur/main2.jpg">
                    <div class="ph1_desc"><p><b>Output</b>: Tonjur table (top) and Conversion table (bottom)</p></div>
                    <img class="ph1_pic" src="pr_tonjur/main3.jpg">
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
                    <p>Angklung can be played by a group of people. In a performance, each person can hold up to 5 Angklungs. In order to all notes in the song can be played, each person in the group should not hold Angklungs that must be played at the same time or must be played one after another. KPA-ITB label their Angklungs with <b><i>Angklung number</i></b> which corresponds to its absolute notes (e.g. Angklung number 6 is for C4 note, etc.).</p>

                    <p><b><i>Tonjur</i></b> is a table that shows correlation between Angklungs in a song. Rows and columns are numbered using Angklung numbers that present in the song. Grey-colored cells in the table means the two Angklung numbers in concern (row and column-wise) should not be played by the same person, as they must be played at the same time or must be played one after another.</p>

                    <p><b><i>Conversion Table</i></b> shows which note in a musical scale that must be played using certain Angklung. Columns are numbered with Angklung number that present in the song.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Not Angka musical notation spelling check</li>
                    <li>Musical score row recognition</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>The output can be used as a reference for Angklung distribution process, determining which Angklungs that must be played by a player.</p>
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
                    <img class="ph2_pic" src="pr_tonjur/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <!-- <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                    <span class="nav2 pasnav" onclick="changeSlide(2,5)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div> -->
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
