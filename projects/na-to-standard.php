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
    <meta name="description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Angka menjadi Notasi Balok. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/na-to-standard.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Pengonversi Notasi Angka ke Notasi Balok"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Angka menjadi Notasi Balok. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/a_to_s.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Pengonversi Notasi Angka ke Notasi Balok"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/a_to_s.jpg"/>
    <meta name="twitter:description" content="Kini kita dapat dengan mudah mengonversi partitur Notasi Angka menjadi Notasi Balok. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Pengonversi Notasi Angka ke Notasi Balok</title>
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
        <h2>Pengonversi Notasi Angka ke Notasi Balok</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_na-to-s/main1.jpg">
                    <div class="ph1_desc"><p><b>Masukan</b>: Partitur Notasi Angka (atas), dan tempo lagu (bawah -opsional)</p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main2.jpg">
                    <div class="ph1_desc"><p>Fitur pengecekan ejaan Notasi Angka (atas) dan jendela pemilihan <i>Clef</i> (bawah)</p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main3.jpg">
                    <div class="ph1_desc"><p><b>Keluaran</b>: Kode Notasi Balok (atas) dan partitur Notasi Balok hasil setelah kode ditempel ke program <i>Noteworthy Composer</i></p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main4.jpg">
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
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Jul 2016 - Mei 2017</b> (versi beta terakhir)</td>
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
                    <p>Notasi Angka adalah notasi yang umum digunakan untuk menulis partitur lagu Angklung. Meski begitu, untuk membuatnya dapat dikenali oleh musisi di seluruh dunia, dan untuk mempermudah pengetikan partitur dengan kebanyakan perangkat lunak, notasi tersebut harus dikonversi menjadi Notasi Balok.</p>

                    <p>Dengan program ini, kita dapat mengonversi Notasi Angka menjadi kode Notasi Balok untuk perangkat lunak <i>Noteworthy Composer</i> (NWC) yang berformat .nwc. Selanjutnya, format ini dapat dikonversi menjadi kode Notasi Balok yang lebih umum, seperti .xml atau .mxl.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Pengecekan ejaan Notasi Angka</li>
                    <li>Pemilihan <i>clef</i> baris partitur</li>
                    <li>Salin kode akhir dengan satu tombol</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Menghasilkan partitur Notasi Balok yang dapat dimainkan melalui perangkat lunak, sebagai panduan latihan Angklung.</p>
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
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_na-to-s/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"Program berjalan dengan baik, meskipun harus ada pengaturan tertentu untuk beberapa seri Office atau Windows. Hasil yang diberikan hampir memuaskan."</p>
                <h3>Bobi Aulia Syafiq</h3>
                <h4>Eks-staf bidang <i>Music Director</i> Keluarga Paduan Angklung (KPA) ITB</h4>
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
    <meta name="description" content="We can now easily convert Not Angka (numbered) musical notation into Standard musical notation. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/na-to-standard.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Not Angka to Standard Musical Notation Converter"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="We can now easily convert Not Angka (numbered) musical notation into Standard musical notation. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/a_to_s.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Not Angka to Standard Musical Notation Converter"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/a_to_s.jpg"/>
    <meta name="twitter:description" content="We can now easily convert Not Angka (numbered) musical notation into Standard musical notation. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Not Angka to Standard Musical Notation Converter</title>
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
        <h2>Not Angka to Standard Musical Notation Converter</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_na-to-s/main1.jpg">
                    <div class="ph1_desc"><p><b>Input</b>: Not Angka musical score (top), and song tempo (bottom- optional)</p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main2.jpg">
                    <div class="ph1_desc"><p>Not Angka spelling check feature (top) and clef determination window (bottom)</p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main3.jpg">
                    <div class="ph1_desc"><p><b>Output</b>: standard musical notation code (top) and standard musical notation pasted into Noteworthy Composer software (bottom)</p></div>
                    <img class="ph1_pic" src="pr_na-to-s/main4.jpg">
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
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td>:</td>
                        <td><b>Jul 2016 - May 2017</b> (latest beta update)</td>
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
                    <p>Not Angka (Numbered) musical notation is a common notation used to write Angklung song score. However, to make it recognizable by musician around the world, and ease the typing process in most musical scorewriter software, one must convert it into standard musical notation.</p>

                    <p>With this program, we can convert Not Angka musical notation into standard musical notation code of <i>Noteworthy Composer</i> (NWC) software in .nwc format. Further, this format can be converted into more common musical notation code, .xml/.mxl</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Not Angka spelling check</li>
                    <li>Musical staff clef setting</li>
                    <li>Copy final code with one button</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Converting Angklung musical score notation into standard notation that can be played using most musical notation software as a rehearsal guide.</p>
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
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_na-to-s/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"This program runs nicely, although it must be set differently across various Windows and Microsoft Office versions. The result given by this program is almost satisfying."</p>
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
