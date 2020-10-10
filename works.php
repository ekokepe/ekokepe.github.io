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
        <meta name="description" content="Ketahui pengalaman kerja Eko"/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="id"/>
        <meta property="og:url" content="http://ekokepe.rf.gd/works.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Pekerjaan | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Ketahui pengalaman kerja Eko"/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

        <meta name="twitter:title" content="Pekerjaan | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Ketahui pengalaman kerja Eko"/>

        <!-- <link hreflang="id" href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style3.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Pekerjaan | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 1;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <div id="line"></div>
            <section class="works">
                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/ak.jpg" alt="AngklungKita pic"/>
                        <a href="/works/ak-design.php?language=id">Pelajari lebih lanjut</a>
                    </div>
                    <div class="wk_desc">
                        <span>Agu - Sep 18</span>
                        <h3>Pemagang Desain Grafis</h3>
                        <h4>Indolecture Pramadana Kreasi</h4>
                        <p></p>
                        <ul>
                            <li>Mendesain poster untuk promosi</li>
                            <li>Mengajukan panduan desain publikasi yang mencakup warna dan elemen grafis</li>
                            <li>Mendesain dan memesan produk <i>merchandise</i> dan portofolio perusahaan</li>
                        </ul>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/awi.jpg" alt="AWI pic"/>
                        <a href="/works/awi-program.php?language=id">Pelajari lebih lanjut</a>
                    </div>
                    <div class="wk_desc">
                        <span>Mei - Sep 17</span>
                        <h3>Pengembang Perangkat Lunak</h3>
                        <h4>Angklung Web Institute</h4>
                        <p>Mengembangkan program pembuat rapor latihan (berbasis VBA-Excel) untuk analisis kemajuan hasil latihan Angklung. Beberapa fitur yang tersedia, antara lain rekapan kehadiran anggota, entri judul lagu dan nama proyek, entri hasil latihan dan pesan pelatih, dan visualisasi hasil latihan.</p>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/ptipascal.jpg" alt="Pascal pic"/>
                    </div>
                    <div class="wk_desc">
                        <span>Jan - Apr 17</span>
                        <h3>Asisten Laboratorium Pemrograman</h3>
                        <h4>Pengenalan Teknologi Informasi B, ITB</h4>
                        <p>Membimbing mahasiswa dalam memecahkan masalah pemrograman sederhana dengan algoritma dasar dalam bahasa Pascal.</p>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/pticpp.jpg" alt="Cpp pic"/>
                    </div>
                    <div class="wk_desc">
                        <span>Feb - Apr 15</span>
                        <h3>Asisten Laboratorium Pemrograman</h3>
                        <h4>Pengenalan Teknologi Informasi B, ITB</h4>
                        <p>Membimbing mahasiswa dalam memecahkan masalah pemrograman sederhana dengan algoritma dasar dalam bahasa C++.</p>
                    </div>
                </div>
            </section>
        </div>
        <?php
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
        <meta name="description" content="Discover Eko's work experiences and be assured!."/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="en_US"/>
        <meta property="og:url" content="http://ekokepe.rf.gd/works.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Works | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Discover Eko's work experiences and be assured!."/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

        <meta name="twitter:title" content="Works | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Discover Eko's work experiences and be assured!."/>

        <!-- <link hreflang="id" href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style3.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Works | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 1;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <div id="line"></div>
            <section class="works">
                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/ak.jpg" alt="AngklungKita pic"/>
                        <a href="/works/ak-design.php">Learn More</a>
                    </div>
                    <div class="wk_desc">
                        <span>Aug - Sep 18</span>
                        <h3>Graphic Design Intern</h3>
                        <h4>Indolecture Pramadana Kreasi</h4>
                        <p></p>
                        <ul>
                            <li>Designing promotional posters</li>
                            <li>Proposing publication design guidelines which includes color and graphic elements</li>
                            <li>Designing and ordering merchandise and portfolio products of the company</li>
                        </ul>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/awi.jpg" alt="AWI pic"/>
                        <a href="/works/awi-program.php">Learn More</a>
                    </div>
                    <div class="wk_desc">
                        <span>May - Sep 17</span>
                        <h3>Software Developer</h3>
                        <h4>Angklung Web Institute</h4>
                        <p>Developing a report generator software (VBA-Excel based) for Angklung rehearsal progress analysis. Various features included, such as member attendance summary, song and project name entry, rehearsal result and trainer's message entry, and rehearsal progress visualization.</p>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/ptipascal.jpg" alt="Pascal pic"/>
                    </div>
                    <div class="wk_desc">
                        <span>Jan - Apr 17</span>
                        <h3>Programming Laboratory Assistant</h3>
                        <h4>Introduction to Information Technology B, ITB</h4>
                        <p>Assisting students in solving and debugging simple programming problems using basic algorithms in Pascal language.</p>
                    </div>
                </div>

                <div class="work">
                    <div class="poin">
                        <span></span>
                    </div>
                    <div class="wk_label">
                        <img src="/works/workpic/pticpp.jpg" alt="Cpp pic"/>
                    </div>
                    <div class="wk_desc">
                        <span>Feb - Apr 15</span>
                        <h3>Programming Laboratory Assistant</h3>
                        <h4>Introduction to Information Technology B, ITB</h4>
                        <p>Assisting students in solving and debugging simple programming problems using basic algorithms in C++ language.</p>
                    </div>
                </div>
            </section>
        </div>
        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/footer.php";
            include($path);
        ?>
    </body>
    <script src="/stickyLinks.js"></script>
</html>
<?php } ?>
