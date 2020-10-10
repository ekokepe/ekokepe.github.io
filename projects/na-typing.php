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
    <meta name="description" content="Kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/na-typing.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Toolbar Notasi Angka | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/peditor.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Toolbar Notasi Angka | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/peditor.jpg"/>
    <meta name="twitter:description" content="Kini kita dapat dengan mudah menulis partitur Notasi Angka Angklung menggunakan Microsoft Excel dan program ini. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Toolbar Notasi Angka | Eko Khoirunnas Priyadi</title>
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
        <h2><i>Toolbar</i> Pengetikan Partitur Notasi Angka</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_na-typing/main1.jpg">
                    <div class="ph1_desc"><p>Antarmuka pengguna <i>toolbar</i> pengetikan partitur notasi angka</p></div>
                    <img class="ph1_pic" src="pr_na-typing/main2.jpg">
                    <div class="ph1_desc"><p><b>Contoh penggunaan</b>: Partitur Notasi Angka sebelum (atas) dan sesudah (bawah) ditandai dengan <i>toolbar</i> ini.</p></div>
                    <img class="ph1_pic" src="pr_na-typing/main3.jpg">
                    <div class="ph1_desc"><p>Panduan penggunaan</p></div>
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
                        <td><b>Jul 2016 - Apr 2017</b> (versi beta terbaru)</td>
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
                    <p><i>Toolbar</i> yang mendukung pengetikan partitur notasi angka di Microsoft Excel. Program ini memiliki bermacam-macam fitur musik, di antaranya pembuatan tanda pengulangan, garis birama spesial, tanda tuplet, dinamika lagu, aturan aliran lagu, transposisi nada, dan tanda teknik permainan Angklung.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Antarmuka pengguna</li>
                    <li>Berbagai fitur musik</li>
                    <li>Panduan pengguna</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <ul>
                    <li>Mempercepat pengetikan partitur notasi angka KPA-ITB</li>
                    <li>Merumuskan purwarupa bentuk standar partitur Notasi Angka Angklung</li>
                </ul>
            </div>
            <div>
                <h3>Hal yang Dipelajari</h3>
                <ul>
                    <li>Kemampuan pemrograman dalam VBA-Excel</li>
                    <li>Kemampuan mendesain antarmuka pengguna</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_na-typing/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"TERBAIK! Sangat mempercepat pengetikan partitur angka. Karena jika dilakukan secara manual, cukup susah menambahkan simbol-simbol musik apalagi kalau partiturnya repetitif dan panjang."</p>
                <h3>Safira Az-zahra</h3>
                <h4>Kepala bidang Angklung Music Development Keluarga Paduan Angklung (KPA) ITB</h4>
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
    <meta name="description" content="We can now easily make a musical score in Not Angka notation using Microsoft Excel and this toolbar. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/na-typing.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Not Angka Typing Toolbar | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="We can now easily make a musical score in Not Angka notation using Microsoft Excel and this toolbar. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/peditor.jpg"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Not Angka Typing Toolbar | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/peditor.jpg"/>
    <meta name="twitter:description" content="We can now easily make a musical score in Not Angka notation using Microsoft Excel and this toolbar. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Not Angka Typing Toolbar | Eko Khoirunnas Priyadi</title>
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
        <h2>Not Angka Typing Toolbar</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_na-typing/main1.jpg">
                    <div class="ph1_desc"><p>Not Angka typing toolbar UI</p></div>
                    <img class="ph1_pic" src="pr_na-typing/main2.jpg">
                    <div class="ph1_desc"><p><b>Usage example</b>: Not Angka musical score before (top) and after (bottom) marked using this toolbar</p></div>
                    <img class="ph1_pic" src="pr_na-typing/main3.jpg">
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
                        <td><b>Jul 2016 - Apr 2017</b> (latest beta update)</td>
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
                    <p>A toolbar which supports Not Angka musical score typing in Microsoft Excel. It contains various musical features, such as making repetition mark, special barline, tuplet mark, song dynamics, song flow directions, note transposition, and Angklung playing techniques mark.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>User Interface</li>
                    <li>Various musical features</li>
                    <li>User manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <ul>
                    <li>Accelerating Not Angka musical score typing process by KPA-ITB</li>
                    <li>Establishing standard rules to Not Angka musical score typing</li>
                </ul>
            </div>
            <div>
                <h3>Lesson Learned</h3>
                <ul>
                    <li>Programming skill in VBA-Excel</li>
                    <li>UI designing skill</li>
                </ul>
            </div>
        </div>

        <div id="ending">
            <!-- <div id="ph_hist">
                <div id="photo2">
                    <img class="ph2_pic" src="pr_na-typing/hist1.jpg">
                    <div class="ph2_desc"><p>Older version of the program in C++ language</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div> -->

            <div id="test">
                <p>"It's the best,<br/>greatly accelerates Not Angka musical score writing process. It eases musical symbols making, especially if the score is repetitive and quite long."</p>
                <h3>Safira Az-zahra</h3>
                <h4>Head of Angklung Music Development division of Keluarga Paduan Angklung (KPA) ITB</h4>
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
