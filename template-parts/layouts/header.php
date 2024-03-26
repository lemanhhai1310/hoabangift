<?php $projectName = "Hoa Ban Gift"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<div id="offcanvas-overlay-menu" class="header__menuoffcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar header__menuoffcanvas__bar">
        <form class="uk-search uk-search-default uk-width" action="" method="get">
            <span class="uk-search-icon-flip" uk-search-icon></span>
            <input name="s" class="uk-search-input uk-form-large" type="search" value="" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
        </form>
        <ul class="uk-nav-default" uk-nav>
            <li class="uk-parent uk-open">
                <a href="">Sản phẩm <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="">TQ - Wuling N300P</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="">Dịch vụ <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="">dịch vụ bảo Dưỡng</a></li>
                    <li><a href="">dịch vụ Bảo hành</a></li>
                    <li><a href="">Dịch Vụ Cứu Hộ 24/7</a></li>
                    <li><a href="">Thiết bị / phụ tùng</a></li>
                </ul>
            </li>
            <li><a href="">hệ thống  đại lý</a></li>
            <li><a href="">Tin Tức</a></li>
            <li><a href="">Về chúng tôi</a></li>
        </ul>
        <div class="header__menuoffcanvas__boxSeach">

        </div>
    </div>
</div>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <img class="uk-visible@l" src="images/baner-bia-ngang-website1.png" alt="">
    <nav class="header uk-navbar-container" uk-sticky>
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle uk-hidden@l uk-navbar-toggle-animate" href="#offcanvas-overlay-menu" uk-toggle>
                        <span uk-navbar-toggle-icon></span>
                        <span class="uk-margin-small-left">Menu</span>
                    </a>
                    <div class="uk-navbar-item">

                    </div>
                </div>
                <div class="uk-navbar-center">
                    <a href="" class="uk-navbar-item uk-logo uk-hidden@l"><img style="height: 50px;" src="images/logo.jpeg" alt=""></a>
                    <ul class="uk-navbar-nav uk-visible@l">
                        <li class="uk-active"><a href="#" uk-icon="icon: home"></a></li>
                        <li>
                            <a href="#">Giới thiệu <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Quà tặng khách hàng Khu Công nghiệp</a></li>
                                    <li>
                                        <a href="#">Quà tặng ngành nghề</a>
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300" style="left: 250px; top: 0px;">
                                            <li><a href="#">Kế hoạch đấu thầu</a></li>
                                            <li><a href="#">Thông báo mời thầu</a></li>
                                            <li><a href="#">Kết quả lựa chọn nhà thầu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Dịch vụ <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li>
                            <a href="#">Báo giá <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Catalogue lịch tết</a></li>
                        <li>
                            <a href="#">Hướng dẫn <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <div class="uk-visible@l">
                        <a class="uk-navbar-toggle" href uk-search-icon></a>
                        <div class="uk-navbar-dropdown uk-padding-small" style="padding: 15px; width: 300px" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !.uk-navbar; flip: false">

                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                                    </form>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-drop-close" href="#" uk-close></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>



            </div>
        </div>
    </nav>