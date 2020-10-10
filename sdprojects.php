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
        <meta name="description" content="Temukan berbagai proyek lain karya Eko"/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="id"/>
        <meta property="og:url" content="http://ekokepe.rf.gd/sdprojects.php?language=id"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Proyek Lain | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Temukan berbagai proyek lain karya Eko"/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

        <meta name="twitter:title" content="Proyek Lain | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Temukan berbagai proyek lain karya Eko"/>

        <!-- <link hreflang=id href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style5.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Proyek Lain | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 3;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <section class="projects" id="design">
                <div class="hdr"><h2>Desain & Pengeditan Foto</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/merch.jpg" alt="gambar Desain Merchandise"/>
                    <div class="prj_label">
                        <h3>Desain <i>Merchandise</i></h3>
                        <p>Agu 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/eid.jpg" alt="gambar Ucapan Idul Fitri"/>
                    <div class="prj_label">
                        <h3>Ucapan Idul&nbsp;Fitri</h3>
                        <p>Jun 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/wisuda.jpg" alt="gambar Desain Hadiah Wisuda"/>
                    <div class="prj_label">
                        <h3>Desain & Produksi Hadiah&nbsp;Wisuda</h3>
                        <p>Okt 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/editing.jpg" alt="gambar Pengeditan Foto"/>
                    <div class="prj_label">
                        <h3>Pengeditan Foto</h3>
                        <p>2016 - sekarang</p>
                    </div>
                </div>
            </section>

            <section class="projects" id="astro">
                <div class="hdr"><h2>Astronomi</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/supermoon.jpg" alt="ambar Fotografi Bulan Super"/>
                    <div class="prj_label">
                        <h3>Fotografi Bulan&nbsp;Super</h3>
                        <p>Des 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/sundial.jpg" alt="gambar Desain Jam Matahari"/>
                    <div class="prj_label">
                        <h3>Desain Jam&nbsp;Matahari</h3>
                        <p>Nov 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/qibla.jpg" alt="gambar Stiker Arah Kiblat"/>
                    <div class="prj_label">
                        <h3>Stiker Arah Kiblat</h3>
                        <p>Agu 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/soleclipse.jpg" alt="gambar Fotografi Gerhana Matahari"/>
                    <div class="prj_label">
                        <h3>Fotografi Gerhana&nbsp;Matahari</h3>
                        <p>Mar 16</p>
                    </div>
                </div>
            </section>

            <section class="projects" id="music">
                <div class="hdr"><h2>Musik</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/fontpart.jpg" alt="gambar Seri Font Partitur"/>
                    <div class="prj_label">
                        <h3>Seri <i>Font</i> Partitur</h3>
                        <p>Apr - Mei 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/soundfont.jpg" alt="gambar Soundfont Angklung"/>
                    <div class="prj_label">
                        <h3><i>Soundfont</i> Angklung</h3>
                        <p>2016</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/musiced.jpg" alt="gambar Pengajaran Aransemen Lagu Angklung"/>
                    <div class="prj_label">
                        <h3>Pengajaran Aransemen Lagu&nbsp;Angklung</h3>
                        <p>2016 - sekarang</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/musicarr.jpg" alt="gambar Aransemen Lagu Angklung"/>
                    <div class="prj_label">
                        <h3>Aransemen Lagu&nbsp;Angklung</h3>
                        <p>2014 - sekarang</p>
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
    <script>
        var bdpd = 0;
    </script>
    <script src="/stickyLinks.js"></script>
</html>
<?php } else { ?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Discover Eko's various side projects!"/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="en_US"/>
        <meta property="og:url" content="http://ekokepe.rf.gd/sdprojects.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Side Projects | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Discover Eko's various side projects!"/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

        <meta name="twitter:title" content="Side Projects | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Discover Eko's various side projects!"/>

        <!-- <link hreflang="id" href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style5.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Side Projects | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 3;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <section class="projects" id="design">
                <div class="hdr"><h2>Design & Photo Editing</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/merch.jpg" alt="Merchandise Design pic"/>
                    <div class="prj_label">
                        <h3>Merchandise Design</h3>
                        <p>Aug 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/eid.jpg" alt="Eid al-Fitr Greeting pic"/>
                    <div class="prj_label">
                        <h3>Eid al-Fitr Greeting</h3>
                        <p>Jun 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/wisuda.jpg" alt="Graduation Present Design pic"/>
                    <div class="prj_label">
                        <h3>Graduation Present Design</h3>
                        <p>Oct 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/editing.jpg" alt="Photo Editing pic"/>
                    <div class="prj_label">
                        <h3>Photo Editing</h3>
                        <p>2016 - now</p>
                    </div>
                </div>
            </section>

            <section class="projects" id="astro">
                <div class="hdr"><h2>Astronomy</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/supermoon.jpg" alt="Supermoon Photography pic"/>
                    <div class="prj_label">
                        <h3>Supermoon Photography</h3>
                        <p>Des 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/sundial.jpg" alt="Sundial Design pic"/>
                    <div class="prj_label">
                        <h3>Sundial Design</h3>
                        <p>Nov 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/qibla.jpg" alt="Qibla Direction Sticker pic"/>
                    <div class="prj_label">
                        <h3>Qibla Direction Sticker</h3>
                        <p>Aug 17</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/soleclipse.jpg" alt="Solar Eclipse Photography pic"/>
                    <div class="prj_label">
                        <h3>Solar Eclipse Photography</h3>
                        <p>Mar 16</p>
                    </div>
                </div>
            </section>

            <section class="projects" id="music">
                <div class="hdr"><h2>Music</h2></div>

                <div class="prj">
                    <img class="prj" src="/sideproject/fontpart.jpg" alt="Partitur Font Series pic"/>
                    <div class="prj_label">
                        <h3>"Partitur" Font Series</h3>
                        <p>Apr - May 18</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/soundfont.jpg" alt="Angklung Soundfont pic"/>
                    <div class="prj_label">
                        <h3>Angklung Soundfont</h3>
                        <p>2016</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/musiced.jpg" alt="Angklung Song Arrangement Mentor pic"/>
                    <div class="prj_label">
                        <h3>Angklung Song Arrangement Mentor</h3>
                        <p>2016 - now</p>
                    </div>
                </div>
                <div class="prj">
                    <img class="prj" src="/sideproject/musicarr.jpg" alt="Angklung Song Arrangement pic"/>
                    <div class="prj_label">
                        <h3>Angklung Song Arrangement</h3>
                        <p>2014 - now</p>
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
    <script>
        var bdpd = 0;
    </script>
    <script src="/stickyLinks.js"></script>
</html>

<?php } ?>
