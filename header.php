<!DOCTYPE html>

<?php
if ($_COOKIE['language'] == "id") {
    $navlang = "?language=id";
} else {
    $navlang = "";
}

$prlink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . $navlang;
?>

<?php if ($_COOKIE['language'] == "id") { ?>
<html lang="id">
    <head>
        <meta charset="UTF-8"/>
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>
    </head>
    <body>
        <div id="header">
            <header class="header1">
                <h1>Eko Khoirunnas Priyadi</h1>
            </header>
            <nav class="topnav">
                <a class="topnav_h" href="javascript:void(0);">
                    <span role="img" class="fas fa-bars"></span>
                </a>
                <nav class="topnav_lhov">
                    <?php if ($hdindex == 1) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="Pengalaman kerja saya">
                            <span role="img" class="topnav_l3 fas fa-briefcase"></span>Pekerjaan
                        </a>
                    <?php } else { ?>
                        <a href="/works.php?language=id" class="topnav_l" title="Pengalaman kerja saya">
                            <span role="img" class="topnav_l3 fas fa-briefcase"></span>Pekerjaan
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 2) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="Proyek pemrograman saya">
                            <span role="img" class="topnav_l3 fas fa-tasks"></span>Proyek
                        </a>
                    <?php } else { ?>
                        <a href="/?language=id" class="topnav_l" title="Proyek pemrograman saya">
                            <span role="img" class="topnav_l3 fas fa-tasks"></span>Proyek
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 3) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="Proyek lain saya">
                            <span role="img" class="topnav_l3 fas fa-project-diagram"></span>Proyek Lain
                        </a>
                    <?php } else { ?>
                        <a href="/sdprojects.php?language=id" class="topnav_l" title="Proyek lain saya">
                            <span role="img" class="topnav_l3 fas fa-project-diagram"></span>Proyek Lain
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 4) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="Lebih banyak tentang saya">
                            <span role="img" class="topnav_l3 fas fa-user"></span>Tentang Saya
                        </a>
                    <?php } else { ?>
                        <a href="/about.php?language=id" class="topnav_l" title="Lebih banyak tentang saya">
                            <span role="img" class="topnav_l3 fas fa-user"></span>Tentang Saya
                        </a>
                    <?php } ?>
                    <div class="vl1"></div>
                    <a class="topnav_l" onclick="changeLang('en');" title="Show website in English">Show in English</a>
                </nav>
            </nav>
        </div>

        <?php if ($shr == 1) { ?>
            <nav id="share_s">
                <a class="share_hs" href="javascript:void(0);">
                    <span role="img" class="topnav_l3 fas fa-share-alt"></span>
                </a>
                <div class="share_hovs">
                    <a class="share_hovs" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo($prlink); ?>" target="_blank" title="Bagikan di Facebook">
                        <span role="img" class="fab fa-facebook-f"></span>
                    </a>
                    <a class="share_hovs" href="https://twitter.com/intent/tweet?url=<?php echo($prlink); ?>" target="_blank" title="Bagikan di Twitter">
                        <span role="img" class="fab fa-twitter"></span>
                    </a>
                </div>
            </nav>
        <?php } ?>
    </body>
    <script>
        function changeLang(lang) {
            var url = window.location.href;
            url = url.substr(0, url.indexOf("?"));
            window.location = url + "?language=" + lang;
        }
    </script>
</html>
<?php } else { ?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Eko Khoirunnas Priyadi"/>
    </head>
    <body>

        <div id="header">
            <header class="header1"><h1>Eko Khoirunnas Priyadi</h1></header>

            <nav class="topnav">
                <a class="topnav_h" href="javascript:void(0);">
                    <span role="img" class="fas fa-bars"></span>
                </a>
                <nav class="topnav_lhov">
                    <?php if ($hdindex == 1) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="My Work Experiences">
                            <span role="img" class="topnav_l3 fas fa-briefcase"></span>Works
                        </a>
                    <?php } else { ?>
                        <a href="/works.php" class="topnav_l" title="My Work Experiences">
                            <span role="img" class="topnav_l3 fas fa-briefcase"></span>Works
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 2) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="My Programming Projects">
                            <span role="img" class="topnav_l3 fas fa-tasks"></span>Projects
                        </a>
                    <?php } else { ?>
                        <a href="/" class="topnav_l" title="My Programming Projects">
                            <span role="img" class="topnav_l3 fas fa-tasks"></span>Projects
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 3) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="My Other Projects">
                            <span role="img" class="topnav_l3 fas fa-project-diagram"></span>Side Projects
                        </a>
                    <?php } else { ?>
                        <a href="/sdprojects.php" class="topnav_l" title="My Other Projects">
                            <span role="img" class="topnav_l3 fas fa-project-diagram"></span>Side Projects
                        </a>
                    <?php } ?>
                    <?php if ($hdindex == 4) { ?>
                        <a id="actpg" href="javascript:void(0);" class="topnav_l" title="More About Me">
                            <span role="img" class="topnav_l3 fas fa-user"></span>About Me
                        </a>
                    <?php } else { ?>
                        <a href="/about.php" class="topnav_l" title="More About Me">
                            <span role="img" class="topnav_l3 fas fa-user"></span>About Me
                        </a>
                    <?php } ?>
                    <div class="vl1"></div>
                    <a class="topnav_l" onclick="changeLang('id');" title="Show website in Indonesian language">Tampilan B.&nbsp;Indonesia</a>
                </nav>
            </nav>
        </div>

        <?php if ($shr == 1) { ?>
            <nav id="share_s">
                <a class="share_hs" href="javascript:void(0);"><span role="img" class="topnav_l3 fas fa-share-alt"></span></a>
                <div class="share_hovs">
                    <a class="share_hovs" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo($prlink); ?>" target="_blank" title="Share on Facebook">
                        <span role="img" class="fab fa-facebook-f"></span>
                    </a>
                    <a class="share_hovs" href="https://twitter.com/intent/tweet?url=<?php echo($prlink); ?>" target="_blank" title="Share on Twitter">
                        <span role="img" class="fab fa-twitter"></span>
                    </a>
                </div>
            </nav>
        <?php } ?>
    </body>
    <script>
        function changeLang(lang) {
            var url = window.location.href;
            url = url.substr(0, url.indexOf("?"));
            window.location = url + "?language=" + lang;
        }
    </script>
</html>

<?php }  ?>
