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
    <meta name="description" content="Acara kuis keluarga Indonesia, Famili 100, diadaptasi ke dalam program ini. Pelajari lebih lanjut di sini."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="id" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/famili-100.php?language=id"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Antarmuka Permainan Famili 100 | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Acara kuis keluarga Indonesia, Famili 100, diadaptasi ke dalam program ini. Pelajari lebih lanjut di sini."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/famili100.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Antarmuka Permainan Famili 100 | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/famili100.JPG"/>
    <meta name="twitter:description" content="Acara kuis keluarga Indonesia, Famili 100, diadaptasi ke dalam program ini. Pelajari lebih lanjut di sini."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Antarmuka Permainan Famili 100 | Eko Khoirunnas Priyadi</title>
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
        <h2>Antarmuka Permainan Famili 100</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_famili-100/main1.JPG">
                    <div class="ph1_desc"><p>Antarmuka permainan Famili 100</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main2.jpg">
                    <div class="ph1_desc"><p>Indikator jawaban tidak tepat</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main3.JPG">
                    <div class="ph1_desc"><p>Antarmuka operator permainan</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main4.JPG">
                    <div class="ph1_desc"><p>Daftar pertanyaan dan jawaban</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main5.JPG">
                    <div class="ph1_desc"><p>Panduan operator permainan</p></div>
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
                        <td><b>VBA-Excel</b></td>
                    </tr>
                    <tr>
                        <td>Pengerjaan</td>
                        <td>:</td>
                        <td><b>Jan 2019</b> and <b>Des 2016</b> (versi lebih lawas)</td>
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
                    <p>Acara kuis keluarga Indonesia, Famili 100, adalah pertandingan antara 2 tim untuk meraih poin tertinggi. Caranya dengan menebak beberapa kata yang terkait dengan pertanyaan yang diberikan. Seiring dengan kemasyhurannya, permainan ini diadaptasi ke dalam program ini.</p>

                    <p>Terdapat 2 bagian utama program ini, yaitu antarmuka permainan dan antarmuka operator. Antarmuka permainan digunakan untuk menampilkan pertanyaan, jawaban, dan perolehan poin tim. Sedangkan antarmuka operator, berisi beberapa tombol, digunakan sebagai kendali tampilan pertanyaan dan pesan permainan tertentu pada antarmuka permainan.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Fitur</h3>
                <ul>
                    <li>Antarmuka operator permainan</li>
                    <li>Simpan dan muat permainan sebelumnya</li>
                    <li>Animasi permainan</li>
                    <li>Panduan operator permainan</li>
                </ul>
            </div>
            <div>
                <h3>Manfaat</h3>
                <p>Mendukung <i>Gathering</i> KPA-ITB 2019 dan <i>Home Tournament</i> KPA-ITB 2016</p>
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
                    <img class="ph2_pic" src="pr_famili-100/hist1.jpg">
                    <div class="ph2_desc"><p>Diagram kendali program permainan</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist2.jpg">
                    <div class="ph2_desc"><p>Foto program ini digunakan saat acara</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist3.jpg">
                    <div class="ph2_desc"><p>Foto program ini digunakan saat acara</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist4.jpg">
                    <div class="ph2_desc"><p>Versi lebih lawas program ini</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p>"Saya tidak menyangka program ini dibuat hanya menggunakan Microsoft Excel dan VBA. Tampilan permainannya sangat bagus, mirip dengan tampilan aslinya. Program ini mudah digunakan, benar-benar bagus untuk dimainkan bersama-sama."</p>
                <h3>Nafidzah Nur Amalina</h3>
                <h4>Kepala divisi Kekeluargaan Keluarga Paduan Angklung (KPA) ITB</h4>
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
    <meta name="description" content="Indonesia's classic TV game show, Famili 100, was adapted into this program. Learn more about it here."/>
    <meta name="author" content="Eko Khoirunnas Priyadi"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="http://ekokepe.rf.gd/projects/famili-100.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Famili 100 Game Interface | Eko Khoirunnas Priyadi"/>
    <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
    <meta property="og:description" content="Indonesia's classic TV game show, Famili 100, was adapted into this program. Learn more about it here."/>
    <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/projects/projectpic/famili100.JPG"/>
    <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

    <meta name="twitter:title" content="Famili 100 Game Interface | Eko Khoirunnas Priyadi"/>
    <meta name="twitter:image" content="http://ekokepe.rf.gd/projects/projectpic/famili100.JPG"/>
    <meta name="twitter:description" content="Indonesia's classic TV game show, Famili 100, was adapted into this program. Learn more about it here."/>

    <!-- <link hreflang="id" href="" rel="alternate"/> -->
    <link href="../favicon.ico" rel="icon"/>
    <link href="../favicon.ico" rel="shortcut icon"/>
    <link href="../favicon.ico" rel="apple-touch-icon"/>

    <link href="../hdstyle.css" rel="stylesheet"/>
    <link href="style2.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Kalam" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Famili 100 Game Interface | Eko Khoirunnas Priyadi</title>
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
        <h2>Famili 100 Game Interface</h2>

        <div id="intro">
            <div id="ph_main">
                <div id="photo1">
                    <img class="ph1_pic" src="pr_famili-100/main1.JPG">
                    <div class="ph1_desc"><p>Famili 100 game interface</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main2.jpg">
                    <div class="ph1_desc"><p>Wrong answer indicator</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main3.JPG">
                    <div class="ph1_desc"><p>Game operator interface</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main4.JPG">
                    <div class="ph1_desc"><p>Question and answer bank</p></div>
                    <img class="ph1_pic" src="pr_famili-100/main5.JPG">
                    <div class="ph1_desc"><p>Game operator manual</p></div>
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
                        <td><b>Jan 2019</b> and <b>Des 2016</b> (older version)</td>
                    </tr>
                    <tr>
                        <td>Work type</td>
                        <td>:</td>
                        <td><b>Individual</b></td>
                    </tr>
                    <tr>
                        <td>Purpose</td>
                        <td>:</td>
                        <td><b>Supporting KPA-ITB gathering event</b></td>
                    </tr>
                </table>
                <div id="d_desc">
                    <p>Indonesia's classic TV game show, Famili 100, is a match between 2 teams to reach the highest score by guessing several words related to a question. Along with its fame, this game was adapted into this program.</p>

                    <p>There are 2 main parts of the program, game interface and operator interface. The game interface is used to display the questions, answers, and team's score. While the operator interface, mainly contains several buttons, is used to control the question and certain game message display on the game interface.</p>
                </div>
            </div>
        </div>

        <div id="desc2">
            <div>
                <h3>Features</h3>
                <ul>
                    <li>Game operator interface</li>
                    <li>Save and load game</li>
                    <li>Game animation</li>
                    <li>Game operator manual</li>
                </ul>
            </div>
            <div>
                <h3>Benefit</h3>
                <p>Supporting KPA-ITB Gathering 2019 and KPA-ITB Home Tournament 2016</p>
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
                    <img class="ph2_pic" src="pr_famili-100/hist1.jpg">
                    <div class="ph2_desc"><p>Control flow diagram of the program</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist2.jpg">
                    <div class="ph2_desc"><p>Photo of this program being used in the event</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist3.jpg">
                    <div class="ph2_desc"><p>Photo of this program being used in the event</p></div>
                    <img class="ph2_pic" src="pr_famili-100/hist4.jpg">
                    <div class="ph2_desc"><p>Older version of the program</p></div>
                </div>

                <div id="ph2_nav" style="display:none;">
                    <div>
                        <span class="nav2 actnav" onclick="changeSlide(2,1)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,2)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,3)"></span>
                        <span class="nav2 pasnav" onclick="changeSlide(2,4)"></span>
                    </div>
                </div>
                <div id="ph2_prev" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)-1)">&#10094;</div>
                <div id="ph2_next" style="display:none;" onclick="changeSlide(2,getcurrentSlideNum (2)+1)">&#10095;</div>
            </div>

            <div id="test">
                <p>"I didn't expect one can make this program using only Microsoft Excel and VBA. The game interface is very good. It's almost similar to the original game interface. It's easy to use and really a nice game to be played together."</p>
                <h3>Nafidzah Nur Amalina</h3>
                <h4>Head of Fellowship Affair division of Keluarga Paduan Angklung (KPA) ITB</h4>
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
