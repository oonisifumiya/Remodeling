<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

    <script>
        (function(d) {
            var config = {
                    kitId: 'owl7kpo',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <title>空間X</title>
    <?php wp_head(); ?>

</head>

<body>
    <header>
        <div class="left_header">
            <div class="header_logo_ja">
                空間
            </div>
            <div class="header_logo_en">
                X
            </div>
        </div>
        <div class="right_header">
            <ul class="gnavi">
                <li><a href="<?php echo home_url(); ?>"><span>Home</span></a></li>
                <li><a href="#"><span>About</span></a></li>
                <li><a href="#"><span>Work</span></a></li>
                <li><a href="#"><span>Staff</span></a></li>
                <a href="<?php echo home_url('/contact-form'); ?>" class="btn3 borderbottom"><span>Constant</span></a>
            </ul>
        </div>
    </header>