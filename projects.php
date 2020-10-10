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

        <meta property="og:locale" content="id"/>
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
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style1.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Proyek | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php //Tambahkan Header
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 2;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <section class="mot">
                <div id="mot_0">
                    <p id="mot_2">dengan pengalaman selama<br/>lebih dari 2 tahun,</p>
                    <p id="mot_1"><b>Saya sangat siap</b><br/>berkolaborasi dengan Anda</p>
                </div>
            </section>

            <section class="projects">
                <div class="hdr"><h2>Visual Basic Application (VBA) - Excel</h2></div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/tonjur.jpg" alt="gambar Program Tonjur dan Tabel Konversi"/>
                        <a href="/projects/tonjur-table.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/tonjur-table.php?language=id">Program Tonjur dan Tabel&nbsp;Konversi</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/a_to_s.jpg" alt="gambar Program Konversi Notasi Angka ke Notasi Balok"/>
                        <a href="/projects/na-to-standard.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/na-to-standard.php?language=id">Pengonversi Notasi Angka ke Notasi&nbsp;Balok</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/s_to_a.jpg" alt="gambar Program Konversi Notasi Balok ke Notasi Angka"/>
                        <a href="/projects/standard-to-na.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/standard-to-na.php?language=id">Pengonversi Notasi Balok ke Notasi&nbsp;Angka</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/peditor.jpg" alt="gambar Toolbar Pengetikan Notasi Angka"/>
                        <a href="/projects/na-typing.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/na-typing.php?language=id"><i>Toolbar</i> Pengetikan Notasi&nbsp;Angka</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/sengk.jpg" alt="gaambar Tabel Sengketa Angklung"/>
                        <a href="/projects/angk-shift.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1"><a href="/projects/angk-shift.php?language=id">Tabel Sengketa Angklung</a></h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/angkmark.JPG" alt="gambar Penanda Partitur Notasi Angka"/>
                        <a href="/projects/angk-marker.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/angk-marker.php?language=id">Penanda Partitur Notasi&nbsp;Angka</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/famili100.JPG" alt="gambar Antarmuka Permainan Famili 100"/>
                        <a href="/projects/famili-100.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/famili-100.php?language=id">Antarmuka Permainan Famili 100</a>
                    </h3>
                </div>
            </section>

            <section class="projects">
                <div class="hdr"><h2 class="hdr1">bahasa pemrograman lainnya</h2></div>

                <div class="prj0 prj">
                    <h3 class="prj_title">PHP/HTML-CSS-JS</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/webpor.jpg" alt="gambar Web Portofolio ini"/>
                        <a href="/projects/web-portfolio.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1"><a href="/projects/web-portfolio.php?language=id">Portofolio Web ini</a></h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">HTML-CSS-JS</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/libels.jpg" alt="gambar Laman Web Pribadi"/>
                        <a href="/projects/personal-website.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/personal-website.php?language=id">Laman Web Pribadi (luring)</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">HTML</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/anabel.jpg" alt="gambar Blogspot Angklung Ansambel Libels (Anabel)"/>
                        <a href="/projects/anabel-blog.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/anabel-blog.php?language=id"><i>Blogspot</i> Angklung Ansambel Libels (Anabel)</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">VB.NET</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/peditor_new.jpg" alt="gambar Partitur Editor"/>
                        <a href="/projects/part-editor.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/part-editor.php?language=id"><i>Partitur Editor</i></a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Python 3</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/pythonta.jpg" alt="gambar Tugas Akhir S-1"/>
                        <a href="/projects/bach-thesis.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/bach-thesis.php?language=id">Tugas Akhir S-1</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">C</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/cgame.JPG" alt="gambar Permainan Peran berbasis teks"/>
                        <a href="/projects/c-game.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/c-game.php?language=id">Permainan Peran berbasis teks</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Excel Formula</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/dist_ton.jpg" alt="gambar Tabel Distribusi Angklung (dengan Tonjur)"/>
                        <a href="/projects/dist-tonjur.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/dist-tonjur.php?language=id">Tabel Distribusi&nbsp;Angklung (dengan&nbsp;Tonjur)</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Excel Formula</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/dist_tton.JPG" alt="gambar Tabel Distribusi Angklung (tanpa Tonjur)"/>
                        <a href="/projects/dist_tanpa.php?language=id">
                            <div class="prj_link"><p>Pelajari lebih lanjut</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/dist_tanpa.php?language=id">Tabel Distribusi&nbsp;Angklung (tanpa&nbsp;Tonjur)</a>
                    </h3>
                </div>
            </section>

            <section class="projects_s">
                <div class="hdr_s"><h2 class="hdr_s1">proyek kecil</h2></div>

                <div class="prj_s">
                    <h3 class="prj_s_title">VBA-Excel</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/jadwal.jpg" alt="gambar Tabel Jadwal Kuliah Mahasiswa"/>
                        <h3 class="prj_s">Tabel Jadwal Kuliah Mahasiswa</h3>
                        <p>Agu 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">Python 3</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/fisgal.jpg" alt="gambar Tugas Mata Kuliah Fisika Galaksi"/>
                        <h3 class="prj_s">Tugas Mata Kuliah Fisika&nbsp;Galaksi</h3>
                        <p>Jan - Jun 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">Python 3</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/aspeng.jpg" alt="gambar Tugas Mata Kuliah Astrofisika Pengamatan"/>
                        <h3 class="prj_s">Tugas Mata Kuliah Astrofisika Pengamatan</h3>
                        <p>Agu - Des 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">C</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/alstruk.jpg" alt="gambar Tugas Mata Kuliah Algoritma dan Struktur Data"/>
                        <h3 class="prj_s">Tugas Mata Kuliah Algoritma dan Struktur&nbsp;Data</h3>
                        <p>Agu - Des 16</p>
                    </div>
                </div>
            </section>
        </div>
        <?php //Tambahkan Footer
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/footer.php";
            include($path);
        ?>
    </body>
    <script src="/stickyLinks.js"></script>
</html>
<?php } else { ?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung. Find out about Eko's previous projects and see where he can fit in."/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="en_US"/>
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

        <!-- <link hreflang="id" href="/" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style1.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Projects | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php //Tambahkan Header
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 2;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <section class="mot">
                <div id="mot_0">
                    <p id="mot_2">with 2+ years of programming experience</p>
                    <p id="mot_1"><b>I'm incredibly ready</b><br/>to collaborate with you</p>
                </div>
            </section>

            <section class="projects">
                <div class="hdr"><h2>Visual Basic Application (VBA) - Excel</h2></div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/tonjur.jpg" alt="Tonjur & Conversion Table Generator pic"/>
                        <a href="/projects/tonjur-table.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1"><a href="/projects/tonjur-table.php">Tonjur & Conversion Table Generator</a></h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/a_to_s.jpg" alt="Notasi Angka to Standard Musical Notasiation Converter pic"/>
                        <a href="/projects/na-to-standard.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/na-to-standard.php">Notasi Angka to Standard Musical Notasiation Converter</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/s_to_a.jpg" alt="Standard to Notasi Angka Musical Notasiation Converter pic"/>
                        <a href="/projects/standard-to-na.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/standard-to-na.php">Standard to Notasi Angka Musical Notasiation Converter</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/peditor.jpg" alt="Notasi Angka Typing Toolbar pic"/>
                        <a href="/projects/na-typing.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/na-typing.php">Notasi Angka Typing&nbsp;Toolbar</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/sengk.jpg" alt="Angkung Shift Guide Table pic"/>
                        <a href="/projects/angk-shift.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/angk-shift.php">Angkung Shift Guide&nbsp;Table</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/angkmark.JPG" alt="Notasi Angka Musical Score Marker pic"/>
                        <a href="/projects/angk-marker.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/angk-marker.php">Notasi Angka Musical Score&nbsp;Marker</a>
                    </h3>
                </div>

                <div class="prj">
                    <div class="prj1">
                        <img src="/projects/projectpic/famili100.JPG" alt="Famili 100 Game Interface pic"/>
                        <a href="/projects/famili-100.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/famili-100.php">Famili 100 Game&nbsp;Interface</a>
                    </h3>
                </div>
            </section>

            <section class="projects">
                <div class="hdr"><h2 class="hdr1">other language</h2></div>

                <div class="prj0 prj">
                    <h3 class="prj_title">PHP/HTML-CSS-JS</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/webpor.jpg" alt="This Web Portfolio pic"/>
                        <a href="/projects/web-portfolio.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/web-portfolio.php">This Web Portfolio</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">HTML-CSS-JS</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/libels.jpg" alt="Personal Webpage (offline) pic"/>
                        <a href="/projects/personal-website.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/personal-website.php">Personal Webpage (offline)</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">HTML</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/anabel.jpg" alt="Angklung Ansambel Libels (Anabel) Blogspot pic"/>
                        <a href="/projects/anabel-blog.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/anabel-blog.php">Angklung Ansambel Libels (Anabel) Blogspot</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">VB.NET</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/peditor_new.jpg" alt="Partitur Editor pic"/>
                        <a href="/projects/part-editor.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/part-editor.php">"Partitur Editor"</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Python 3</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/pythonta.jpg" alt="Bachelors Thesis pic"/>
                        <a href="/projects/bach-thesis.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/bach-thesis.php">Bachelor's Thesis</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">C</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/cgame.JPG" alt="Text-based Role-playing Game pic"/>
                        <a href="/projects/c-game.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/c-game.php">Text-based Role&#8209;playing&nbsp;Game</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Excel Formula</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/dist_ton.jpg" alt="Angklung Distribution Table (with Tonjur) pic"/>
                        <a href="/projects/dist-tonjur.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/dist-tonjur.php">Angklung Distribution Table (with Tonjur)</a>
                    </h3>
                </div>

                <div class="prj0 prj">
                    <h3 class="prj_title">Excel Formula</h3>
                    <div class="prj1">
                        <img src="/projects/projectpic/dist_tton.JPG" alt="Angklung Distribution Table (without Tonjur) pic"/>
                        <a href="/projects/dist_tanpa.php">
                            <div class="prj_link"><p>Learn More</p></div>
                        </a>
                    </div>
                    <h3 class="prj1">
                        <a href="/projects/dist_tanpa.php">Angklung Distribution Table (without Tonjur)</a>
                    </h3>
                </div>
            </section>

            <section class="projects_s">
                <div class="hdr_s"><h2 class="hdr_s1">small projects</h2></div>

                <div class="prj_s">
                    <h3 class="prj_s_title">VBA-Excel</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/jadwal.jpg" alt="Student Timetable Generator pic"/>
                        <h3 class="prj_s">Student Timetable Generator</h3>
                        <p>Aug 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">Python 3</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/fisgal.jpg" alt="Physics of Galaxy course assignments pic"/>
                        <h3 class="prj_s">Physics of Galaxy course&nbsp;assignments</h3>
                        <p>Jan - Jun 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">Python 3</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/aspeng.jpg" alt="Observational Astrophysics course assignments pic"/>
                        <h3 class="prj_s">Observational Astrophysics course&nbsp;assignments</h3>
                        <p>Aug - Des 16</p>
                    </div>
                </div>

                <div class="prj_s">
                    <h3 class="prj_s_title">C</h3>
                    <div class="prj1_s">
                        <img src="/projects/projectpic/alstruk.jpg" alt="Algorithm and Data Structure course assignments pic"/>
                        <h3 class="prj_s">Algorithm and Data&nbsp;Structure course&nbsp;assignments</h3>
                        <p>Aug - Des 16</p>
                    </div>
                </div>
            </section>
        </div>
        <?php //Tambahkan Footer
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/footer.php";
            include($path);
        ?>
    </body>
    <script src="/stickyLinks.js"></script>
</html>

<?php } ?>
