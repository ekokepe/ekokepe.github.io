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
        <meta name="description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung."/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="id" />
        <meta property="og:url" content="http://www.ekokepe.rf.gd/about.php?language=id"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Tentang Saya | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung."/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="<?php echo(date("c", filemtime(__FILE__))); ?>"/>

        <meta name="twitter:title" content="Tentang Saya | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Eko Khoirunnas Priyadi adalah seorang pemrogram otodidak lulusan jurusan Astronomi Institut Teknologi Bandung."/>

        <!-- <link hreflang="id" href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style6.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Tentang Saya | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 4;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <div class="mydesc">
                <div class="md_desc">
                    <h2>Pemrogram Otodidak</h2>
                    <p>Individu dengan kemampuan perencanaan&nbsp;strategis, komunikasi&nbsp;efektif,<br/>dan berpikir&nbsp;analitik. Memperhatikan&nbsp;detail dan bertanggung jawab.</p>
                </div>
                <div class="md_photo"><img src="/about/photo.jpg"/></div>
            </div>

            <div class="org_exp">
                <div class="oe_hdr"><h2>Pengalaman Organisasi</h2></div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="http://kpa.unit.itb.ac.id/" title="KPA-ITB | Situs Web" target="_blank">
                                <img src="/about/kpa.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/angklungITB/" title="KPA-ITB | Laman Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/kpa.itb/" title="KPA-ITB | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/user/angklungITB" title="KPA-ITB | Kanal YouTube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Keluarga Paduan Angklung</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Unit kegiatan mahasiswa yang bergerak di bidang seni dan budaya dengan Angklung sebagai alat musik andalan</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Keluarga Paduan Angklung</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Unit kegiatan mahasiswa yang bergerak di bidang seni dan budaya dengan Angklung sebagai alat musik andalan</p>
                        </div>
                        <ul>
                            <li>Pembicara <i>Workshop</i> Pengetikan Partitur Angklung (Nov 2018)</li>
                            <li>Staf bidang <i>Music Director</i> (2016 - 2017)</li>
                            <li>Kepala divisi Manajemen Rumah Tangga (2015 - 2016)</li>
                            <li>Pengembang program-program pendukung latihan (2014 - sekarang)</li>
                            <li>Pengaransemen lagu (2014 - sekarang)</li>
                        </ul>
                    </div>
                </div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="https://himastron.as.itb.ac.id/" title="Himastron ITB | Situs Web" target="_blank">
                                <img src="/about/himastron.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/Himastron-ITB-199669547188023/" title="Himastron ITB | Laman Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/himastronitb/" title="Himastron ITB | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCKRRVYOuFWJ8gv2oLDjQaCA" title="Himastron ITB | Kanal YouTube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Himpunan Mahasiswa Astronomi</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Organisasi mahasiswa Astronomi dengan semangat mengedukasi</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Himpunan Mahasiswa Astronomi</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Organisasi mahasiswa Astronomi dengan semangat mengedukasi</p>
                        </div>
                        <ul>
                            <li>Staf biro Media, Komunikasi, dan Informasi (2016)</li>
                            <li>Staf divisi Internal (2015)</li>
                        </ul>
                    </div>
                </div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="http://angklungis15surabaya.blogspot.com/" title="Anabel Libels | Situs Web" target="_blank">
                                <img src="/about/anabel.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/LibelsAnabel/" title="Anabel Libels | Laman Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/libels_anabel/" title="Anabel Libels | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/user/LibelsAnabel" title="Anabel Libels | Kanal YouTube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Angklung Ansambel Libels</h3>
                            <h4>SMAN 15 Surabaya</h4>
                            <p>Aktivitas ekstrakurikuler siswa bertema penampilan Angklung dan Kolintang</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Angklung Ansambel Libels</h3>
                            <h4>SMAN 15 Surabaya</h4>
                            <p>Aktivitas ekstrakurikuler siswa bertema penampilan Angklung dan Kolintang</p>
                        </div>
                        <ul>
                            <li>Pelatih Angklung dan Kolintang (2012 - 2013)</li>
                            <li>Asisten Administratif (2011)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="wisdom">
                <h2>Sebaik-baik manusia adalah<br/>yang paling bermanfaat bagi manusia&nbsp;lain</h2>
                <div id="vl1"></div>
                <h4>Nabi Muhammad SAW</h4>
            </div>
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
        <meta name="description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung."/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>

        <meta property="og:locale" content="en_US" />
        <meta property="og:url" content="http://www.ekokepe.rf.gd/about.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="About Me | Eko Khoirunnas Priyadi"/>
        <meta property="og:site_name" content="Eko Khoirunnas Priyadi"/>
        <meta property="og:description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung."/>
        <meta property="og:image" itemprop="image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta property="og:updated_time" content="2019-03-03T20:00:00+07:00"/>

        <meta name="twitter:title" content="About Me | Eko Khoirunnas Priyadi"/>
        <meta name="twitter:image" content="http://ekokepe.rf.gd/about/photo.jpg"/>
        <meta name="twitter:description" content="Eko Khoirunnas Priyadi is a self-taught programmer and an Astronomy graduate of Institut Teknologi Bandung."/>

        <!-- <link hreflang="id" href="" rel="alternate"/> -->
        <link href="/favicon.ico" rel="icon"/>
        <link href="/favicon.ico" rel="shortcut icon"/>
        <link href="/favicon.ico" rel="apple-touch-icon"/>

        <link href="/hdstyle.css" rel="stylesheet"/>
        <link href="/style6.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>About Me | Eko Khoirunnas Priyadi</title>
    </head>
    <body>
        <?php
            global $hdindex;
            global $shr;
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/header.php";
            $hdindex = 4;
            $shr = 1;
            include($path);
        ?>
        <div id="body">
            <div class="mydesc">
                <div class="md_desc">
                    <h2>Self-taught Programmer</h2>
                    <p>Detail-oriented and organized person with strategic planning,
                    effective communication,<br>and analytical thinking skill.</p>
                </div>
                <div class="md_photo"><img src="/about/photo.jpg"/></div>
            </div>

            <div class="org_exp">
                <div class="oe_hdr"><h2>Organizational Experiences</h2></div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="http://kpa.unit.itb.ac.id/" title="KPA-ITB | Website" target="_blank">
                                <img src="/about/kpa.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/angklungITB/" title="KPA-ITB | Facebook Page" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/kpa.itb/" title="KPA-ITB | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/user/angklungITB" title="KPA-ITB | YouTube Channel" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Keluarga Paduan Angklung</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Student art and culture activity unit with Angklung as primary musical instrument</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Keluarga Paduan Angklung</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Student art and culture activity unit with Angklung as primary musical instrument</p>
                        </div>
                        <ul>
                            <li>Angklung Musical Score Typing Workshop speaker (Nov 2018)</li>
                            <li>Music Director staff (2016 - 2017)</li>
                            <li>Head of Household Management division (2015 - 2016)</li>
                            <li>Rehearsal programs developer (2014 - now)</li>
                            <li>Angklung song arranger (2014 - now)</li>
                        </ul>
                    </div>
                </div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="https://himastron.as.itb.ac.id/" title="Himastron ITB | Website" target="_blank">
                                <img src="/about/himastron.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/Himastron-ITB-199669547188023/" title="Himastron ITB | Facebook Page" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/himastronitb/" title="Himastron ITB | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCKRRVYOuFWJ8gv2oLDjQaCA" title="Himastron ITB | YouTube Channel" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Himpunan Mahasiswa Astronomi</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Astronomy student organization with educational spirit</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Himpunan Mahasiswa Astronomi</h3>
                            <h4>Institut Teknologi Bandung</h4>
                            <p>Astronomy student organization with educational spirit</p>
                        </div>
                        <ul>
                            <li>Media, Communication and Information staff (2016)</li>
                            <li>Internal division staff (2015)</li>
                        </ul>
                    </div>
                </div>

                <div class="oe_unit">
                    <div class="unit_top">
                        <div class="unit_photo">
                            <a href="http://angklungis15surabaya.blogspot.com/" title="Anabel Libels | Website" target="_blank">
                                <img src="/about/anabel.png"/>
                            </a>
                        </div>
                        <div class="unit_link">
                            <a href="https://www.facebook.com/LibelsAnabel/" title="Anabel Libels | Facebook Page" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/libels_anabel/" title="Anabel Libels | Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/user/LibelsAnabel" title="Anabel Libels | YouTube Channel" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="unit_desc_0">
                            <h3>Angklung Ansambel Libels</h3>
                            <h4>SMAN 15 Surabaya</h4>
                            <p>Student extracurricular activity of Angklung and Kolintang performance</p>
                        </div>
                    </div>
                    <div class="unit_desc">
                        <div class="unit_desc_1">
                            <h3>Angklung Ansambel Libels</h3>
                            <h4>SMAN 15 Surabaya</h4>
                            <p>Student extracurricular activity of Angklung and Kolintang performance</p>
                        </div>
                        <ul>
                            <li>Angklung and Kolintang trainer (2012 - 2013)</li>
                            <li>Administrative assistant (2011)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="wisdom">
                <h2>The best of people are those<br>
                that bring the most benefit to the rest of mankind</h2>
                <div id="vl1"></div>
                <h4>Prophet Muhammad PBUH</h4>
            </div>
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
