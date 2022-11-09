<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <link rel="icon" href="<?php echo get_theme_file_uri('/images/cropped-gen_logo-32x32.jpg'); ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo get_theme_file_uri('/images/cropped-gen_logo-192x192.jpg'); ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri('/images/cropped-gen_logo-180x180.jpg'); ?>" />
    <meta name="msapplication-TileImage"
        content="<?php echo get_theme_file_uri('/images/cropped-gen_logo-270x270.jpg'); ?>" />
</head>

<body <?php body_class(); ?>>
    <div id="preloader" class="active">
        <div class="icon">
            <svg width="552" height="504" viewBox="0 0 552 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="scissors">
                    <path id="left-side"
                        d="M252.1 228.364C196.79 188.254 156.369 179.584 160.237 166.004C163.26 155.384 172.35 160.484 178.76 132.414C184.92 105.464 162.8 77.9344 136.104 72.2144C109.941 64.5944 77.0567 76.9444 68.9387 104.574C59.0435 131.914 75.1267 164.504 102.358 174.234C133.488 188.324 174.6 195.554 209.888 241.114L236.978 276.074L407.818 397.084C429.898 410.618 459.288 418.742 487.258 401.199L252.098 228.359L252.1 228.364ZM148.98 98.5444C172.231 121.854 158.051 163.084 127.015 163.014C98.4617 164.664 72.4567 129.954 88.7547 104.164C100.183 82.4344 133.064 82.5944 148.98 98.5444Z"
                        fill="#C0392B" stroke="#C0392B" stroke-width="7.5406" />
                    <path id="right-side"
                        d="M251.33 275.416C195.94 315.406 155.498 323.986 159.336 337.577C162.34 348.204 171.44 343.12 177.79 371.201C183.88 398.163 161.7 425.646 134.994 431.307C108.814 438.867 75.9577 426.445 67.9007 398.799C58.0669 371.436 74.2227 338.883 101.476 329.216C132.637 315.186 173.77 308.056 209.156 262.576L236.316 227.666L407.426 107.046C429.546 93.5557 458.946 85.5057 486.876 103.106L251.326 275.416H251.33ZM147.93 405.006C171.232 381.752 157.144 340.492 126.109 340.494C97.5587 338.78 71.4767 373.427 87.7177 399.26C99.0967 421.007 131.978 420.924 147.93 405.006Z"
                        fill="#C0392B" stroke="#C0392B" stroke-width="7.5406" />
                </g>
            </svg>
        </div>
        <p>Šišanje...</p>
    </div>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo site_url('/#home'); ?>">
                    <span>-THE-</span>
                    <span class="mark">JOKER</span>
                </a>
            </div>

            <nav>
                <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 27.329 17">
                    <g id="menu" transform="translate(-415.671 -19)">
                        <line id="Line_1" data-name="Line 1" x1="35" transform="translate(417.171 34.5)" fill="none"
                            stroke="#ecf0f1" stroke-linecap="round" stroke-width="3" />
                        <line id="Line_2" data-name="Line 2" x1="35" transform="translate(417.171 27.5)" fill="none"
                            stroke="#ecf0f1" stroke-linecap="round" stroke-width="3" />
                        <line id="Line_3" data-name="Line 3" x1="35" transform="translate(424.5 20.5)" fill="none"
                            stroke="#ecf0f1" stroke-linecap="round" stroke-width="3" />
                    </g>
                </svg>
                <ul id="nav">
                    <svg id="close-btn" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        viewBox="0 0 48.968 48.968">
                        <g id="close" transform="translate(-378.092 -80.939)">
                            <path id="Path_21" data-name="Path 21" d="M383,82l-46.847,46.847" transform="translate(43)"
                                fill="none" stroke="#ecf0f1" stroke-width="5" />
                            <path id="Path_22" data-name="Path 22" d="M336.153,82l46.673,46.673"
                                transform="translate(43)" fill="none" stroke="#ecf0f1" stroke-width="5" />
                        </g>
                    </svg>
                    <li class="active"><a href="<?php echo site_url('/#home'); ?>">Početna</a></li>
                    <li><a href="<?php echo site_url('/#gallery'); ?>">Galerija</a></li>
                    <li><a href="<?php echo site_url('/#reviews'); ?>">Utisci mušterija</a></li>
                    <li><a href="<?php echo site_url('/#contact'); ?>">Kontakt</a></li>
                    <li>
                        <a class="btn btn--primary" href="<?php echo site_url('/#reservation'); ?>">
                            <span class="icon">
                                <i class="fa-regular fa-calendar-check"></i>
                            </span>
                            <span>Zakažite termin</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- ./container -->
    </header>