<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT PROGRAM | N8Plus Future Coffee Shop</title>
    <link rel="shortcut icon" type="image/png" href="image/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/incluce-style.css">

    <script src="js/resCarousel.js"></script>
    <script src="js/style.js"></script>
    <script src="js/tab_action.js"></script>
    <script src="js/rangeSlider.js"></script>
    <script type="text/javascript" src="js/LoadDrink.js"></script>
    <script>
        var kind = "";
        var notNull = false;

    </script>
</head>

<body>
    <?php include 'cart.php'?>
    <header class="header">
        <?php include 'header-menu.php'?>
        <nav class="navbar navbar-bottom">
            <div class="container">
                <div class="navbar-header hidden-sm hidden-md hidden-lg">
                    <button class="navbar-toggle" data-target="#main-menu" data-toggle="collapse"><i class="fa fa-navicon"></i></button>
                    <button class="navbar-toggle"><a data-toggle="modal" data-target="#searchForm"><i class="fa fa-search"></i></a></button>
                    <button class="navbar-toggle" data-toggle="modal" data-target="#shopping-bag"><i class="fa fa-shopping-cart"></i><span class="badge">0</span></button>
                    <button class="navbar-toggle" data-toggle="modal" data-target="#like-bag"><i class="fa fa-heart"></i><span class="badge">0</span></button>
                    <button class="navbar-toggle" data-target="#user" data-toggle="collapse"><i class="fa fa-user"></i></button>
                </div>
                <div class="navbar-collapse collapse" id="main-menu">
                    <ul class="navbar-nav" id="menu-main">
                        <li class="has-login"><a href="home.php?user=<?=$_SESSION['username']?>">HOME</a></li>
                        <li class="has-login" id="drinkLi"><a href="menu.php?user=<?=$_SESSION['username']?>">MENU</a><i class="toggle-menu fa fa-plus" data-target="#sub-drink"></i>
                            <ul class="sub-menu" id="sub-drink">
                                <script>
                                    var item = "";
                                    for (var i = 1; i < categoryItem.length; i++) {
                                        item += "<li><a href='menu.php?kind=" + categoryItem[i] + "&user=" + getUser() + "'>" + categoryItem[i] + "</a></li>";
                                    }
                                    document.write(item);

                                </script>
                            </ul>
                            <ul class="mega-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <script>
                                            var item = "";
                                            for (var i = 1; i < categoryItem.length / 2; i++) {
                                                item += "<li><a href='menu.php?kind=" + categoryItem[i] + "&user=" + getUser() + "'>" + categoryItem[i] + "</a></li>";
                                            }
                                            document.write(item);

                                        </script>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <script>
                                            var item = "";
                                            for (var i = Math.round(categoryItem.length / 2); i < categoryItem.length; i++) {
                                                item += "<li><a href='menu.php?kind=" + categoryItem[i] + "&user=" + getUser() + "'>" + categoryItem[i] + "</a></li>";
                                            }
                                            document.write(item);

                                        </script>
                                    </ul>
                                </li>
                                <li class="col-sm-6">
                                    <div class="resCarousel" data-items="1-1-2" data-interval="3000" data-slide="1" data-animator="lazy">
                                        <div class="resCarousel-inner" style="border: 1px dashed #8A533D;border-radius: 4px;">
                                            <script>
                                                var slider = "";
                                                for (var i = 0; i < 6; i++) {
                                                    var drink = ListDrink[i];
                                                    slider += '<div class="item">' +
                                                        '<figure class="item-container-short clearfix">' +
                                                        '<div class="image">' +
                                                        '<img src="' + drink.pathImg + '">' +
                                                        '<div class="name">' +
                                                        '<h4>' + drink.name + '</h4><span>-</span>' +
                                                        '<h4>$' + drink.price.toFixed(2) + '</h4>' +
                                                        '</div>' +
                                                        '<a class="btnQuickView" href="detailDrink.php?drink=' + drink.name + '&user=' + getUser() + '">View Details</a>' +
                                                        '</div>' +
                                                        '</figure>' +
                                                        '</div>';
                                                }
                                                document.write(slider);

                                            </script>
                                        </div>
                                        <button class='leftRs small'>
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                        <button class='rightRs small'>
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="has-login" id="bookingLi"><a href="book-table.php?user=<?=$_SESSION['username']?>">BOOKING</a><i class="toggle-menu fa fa-plus" data-target="#sub-booking"></i>
                            <ul class="sub-menu" id="sub-booking">
                                <li><a href="book-relax.php?user=<?=$_SESSION['username']?>">Relax</a></li>
                                <li><a href="book-study.php?user=<?=$_SESSION['username']?>">Study</a></li>
                                <li><a href="book-entertainment.php?user=<?=$_SESSION['username']?>">Entertainment</a></li>
                                <li><a href="book-dating.php?user=<?=$_SESSION['username']?>">Dating</a></li>
                                <li><a href="book-party.php?user=<?=$_SESSION['username']?>">Party</a></li>
                                <li><a href="book-kid.php?user=<?=$_SESSION['username']?>">For Kid</a></li>
                            </ul>
                            <ul class="mega-menu slider-item clearfix">
                                <div class="resCarousel" data-items="1-3-3-4" data-interval="3000" data-slide="1" data-animator="lazy">
                                    <div class="resCarousel-inner">
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/relax.png">
                                                    <a class="view-detail" href="book-relax.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>DATING</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/learn.png">
                                                    <a class="view-detail" href="book-study.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>STUDY</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/entertainment.png">
                                                    <a class="view-detail" href="book-entertainment.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>RELAX</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/dating.png">
                                                    <a class="view-detail" href="book-dating.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>ENTERTAIMENT</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/party.png">
                                                    <a class="view-detail" href="book-party.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>ENTERTAIMENT</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/kid.png">
                                                    <a class="view-detail" href="book-kid.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>ENTERTAIMENT</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <button class='leftRs small'>
                                        <i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class='rightRs small'>
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </ul>
                        </li>
                        <li class="has-login  active" id="serviceLi"><a href="service.php?user=<?=$_SESSION['username']?>">SERVICE</a><i class="toggle-menu fa fa-plus" data-target="#sub-service"></i>
                            <ul class="sub-menu" id="sub-service">
                                <li><a href="karaoke.php?user=<?=$_SESSION['username']?>">Karaoke</a></li>
                                <li><a href="movie.php?user=<?=$_SESSION['username']?>">Watch Movies</a></li>
                                <li><a href="private.php?user=<?=$_SESSION['username']?>">Private Mode</a></li>
                                <li><a href="sport_program.php?user=<?=$_SESSION['username']?>">Watch Sport Program</a></li>
                            </ul>
                            <ul class="mega-menu slider-item clearfix">
                                <div class="resCarousel" data-items="1-3-3-4" data-interval="5000" data-slide="1" data-animator="lazy">
                                    <div class="resCarousel-inner">
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/karaoke-edit.png">
                                                    <a class="view-detail" href="karaoke.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Karaoke</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/movie.png">
                                                    <a class="view-detail" href="movie.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Watch Movies</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/private.jpg">
                                                    <a class="view-detail" href="private.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Private Mode</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/sport.jpg">
                                                    <a class="view-detail" href="sport_program.php?user=<?=$_SESSION['username']?>">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Watch Sport Program</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <button class='leftRs small'>
                                        <i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class='rightRs small'>
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </ul>
                        </li>
                        <li class="no-login"><a href="home.php">HOME</a></li>
                        <li class="no-login" id="drinkLi"><a href="menu.php">MENU</a><i class="toggle-menu fa fa-plus" data-target="#sub-drink"></i>
                            <ul class="sub-menu" id="sub-drink">
                                <script>
                                    var item = "";
                                    for (var i = 1; i < categoryItem.length; i++) {
                                        item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                    }
                                    document.write(item);

                                </script>
                            </ul>
                            <ul class="mega-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <script>
                                            var item = "";
                                            for (var i = 1; i < categoryItem.length / 2; i++) {
                                                item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                            }
                                            document.write(item);

                                        </script>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <script>
                                            var item = "";
                                            for (var i = Math.round(categoryItem.length / 2); i < categoryItem.length; i++) {
                                                item += "<li><a href='menu.php?kind=" + categoryItem[i] + "'>" + categoryItem[i] + "</a></li>";
                                            }
                                            document.write(item);

                                        </script>
                                    </ul>
                                </li>
                                <li class="col-sm-6">
                                    <div class="resCarousel" data-items="1-1-2" data-interval="4000" data-slide="1" data-animator="lazy">
                                        <div class="resCarousel-inner" style="border: 1px dashed #8A533D;border-radius: 4px;">
                                            <script>
                                                var slider = "";
                                                for (var i = 0; i < 6; i++) {
                                                    var drink = ListDrink[i];
                                                    slider += '<div class="item">' +
                                                        '<figure class="item-container-short clearfix">' +
                                                        '<div class="image">' +
                                                        '<img src="' + drink.pathImg + '">' +
                                                        '<div class="name">' +
                                                        '<h4>' + drink.name + '</h4><span>-</span>' +
                                                        '<h4>$' + drink.price.toFixed(2) + '</h4>' +
                                                        '</div>' +
                                                        '<a class="btnQuickView" href="detailDrink.php?drink=' + drink.name + '">View Details</a>' +
                                                        '</div>' +
                                                        '</figure>' +
                                                        '</div>';
                                                }
                                                document.write(slider);

                                            </script>
                                        </div>
                                        <button class='leftRs small'>
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                        <button class='rightRs small'>
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-login" id="bookingLi"><a href="book-table.php">BOOKING</a><i class="toggle-menu fa fa-plus" data-target="#sub-booking"></i>
                            <ul class="sub-menu" id="sub-booking">
                                <li><a href="book-relax.php">Relax</a></li>
                                <li><a href="book-study.php">Study</a></li>
                                <li><a href="book-entertainment.php">Entertainment</a></li>
                                <li><a href="book-dating.php">Dating</a></li>
                                <li><a href="book-party.php">Party</a></li>
                                <li><a href="book-kid.php">For Kid</a></li>
                            </ul>
                            <ul class="mega-menu slider-item clearfix">
                                <div class="resCarousel" data-items="1-3-3-4" data-interval="5000" data-slide="1" data-animator="lazy">
                                    <div class="resCarousel-inner">
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/relax.png">
                                                    <a class="view-detail" href="book-relax.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>DATING</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/learn.png">
                                                    <a class="view-detail" href="book-study.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>STUDY</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/entertainment.png">
                                                    <a class="view-detail" href="book-entertainment.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>RELAX</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/dating.png">
                                                    <a class="view-detail" href="book-dating.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Dating</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/party.png">
                                                    <a class="view-detail" href="book-party.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Party</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="booking-container">
                                                <div class="image">
                                                    <img src="image/kid.png">
                                                    <a class="view-detail" href="book-kid.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>For Kid</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <button class='leftRs small'>
                                        <i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class='rightRs small'>
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </ul>
                        </li>
                        <li class="no-login active" id="serviceLi"><a href="service.php">SERVICE</a><i class="toggle-menu fa fa-plus" data-target="#sub-service"></i>
                            <ul class="sub-menu" id="sub-service">
                                <li><a href="karaoke.php">Karaoke</a></li>
                                <li><a href="movie.php">Watch Movies</a></li>
                                <li><a href="private.php">Private Mode</a></li>
                                <li><a href="sport_program.php">Watch Sport Program</a></li>
                            </ul>
                            <ul class="mega-menu slider-item clearfix">
                                <div class="resCarousel" data-items="1-3-3-4" data-interval="5000" data-slide="1" data-animator="lazy">
                                    <div class="resCarousel-inner">
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/karaoke-edit.png">
                                                    <a class="view-detail" href="karaoke.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Karaoke</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/movie.png">
                                                    <a class="view-detail" href="movie.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Watch Movies</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/private.jpg">
                                                    <a class="view-detail" href="private.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Private Mode</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="service-container">
                                                <div class="image">
                                                    <img src="image/sport.jpg">
                                                    <a class="view-detail" href="sport_program.php">Quich View</a>
                                                </div>
                                                <figcaption>
                                                    <h4>Watch Sport Program</h4>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <button class='leftRs small'>
                                        <i class="fa fa-angle-left"></i>
                                    </button>
                                    <button class='rightRs small'>
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#searchForm"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="searchForm">
            <button type="button" class="close">×</button>
            <form>
                <input type="text" value="" placeholder="type drink name, atmosphere here" id="myInput" />
                <button type="submit" class="btn btn-primary">Search</button>
                <div class="resultSearch"></div>
            </form>
        </div>
        <div class="navbar-background"></div>
    </header>
    <div id="logout" class="modal-cs">
        <div class="modal-dialog" style="margin:150px auto; text-align: center; width: 350px">
            <div class="modal-content clearfix">
                <div class="modal-header">
                    <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Logout</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="logout.php?page=menu.php">
                        <p>Do want to logout your account?</p><br>
                        <input class="btn" type="submit" name="logout" value="Logout">
                        <input class="btn" type="reset" name="cancel" value="Cancel">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog" style="margin-top:150px; width: 452px;">
            <div class="modal-content clearfix">
                <div class="modal-header">
                    <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Login</h3>
                </div>
                <div class="main_login clearfix">
                    <ul class="tabs">
                        <li data-target="#tab1">Account</li>
                        <li data-target="#tab2">QR Code</li>
                    </ul>
                    <div class="tab_container">
                        <div class="tab_content" id="tab1">
                            <form method="POST" action="login.php">
                                <div class="phone-number">
                                    <span>    <i class="fa fa-mobile"></i></span>
                                    <select name="first-num">
                                            <option>
                                                +84<span>    Vietnam</span>
                                            </option>
                                            <option>
                                                +61<span>    Australia</span>
                                            </option>                        <option>
                                            +55<span>    Brazil</span>
                                            </option>
                                            <option>
                                                +86<span>    China</span>
                                            </option>
                                            <option>
                                                +33<span>    France</span>
                                            </option>
                                            <option>
                                                +49<span>    Germany</span>
                                            </option>
                                            <option>
                                                +62<span>    Indonesia</span>
                                            </option>
                                            <option>
                                                +81<span>    Japan</span>
                                            </option>
                                            <option>
                                                +82<span>    South Korea</span>
                                            </option>
                                            <option>
                                                +64<span>    New Zealand</span>
                                            </option>
                                            <option>
                                                <span>&nbsp;</span>+7 <span>Russian</span>
                                            </option>
                                            <option>
                                                +34<span>    Spain</span>
                                            </option>
                                            <option>
                                                +44<span>    United Kingdom</span>
                                            </option>
                                            <option>
                                                <span>&nbsp;</span>+1 <span>United States</span>
                                            </option>
                                        </select>
                                    <input placeholder="Your phone number" type="tel" name="phone">
                                </div>
                                <div class="password">
                                    <span>    <i class="fa fa-lock"></i></span>
                                    <input placeholder="Your password" type="password" name="pwd">
                                </div>
                                <button type="submit" name="login" value="sport_program.php">Login</button>
                            </form>
                            <div class="link_sign_up">You don't have an account yet , <a style="text-decoration:none" data-toggle="modal" data-target="#signup">Register</a> now!</div>
                        </div>
                        <div class="tab_content" id="tab2">
                            <table cellpadding="10" align="center" border="0">
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <div class="qrcode">
                                        <img src="image/qr-code.png" alt="QR Code" style="width: 224px; height:224px;">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="scan-qrcode">Scan QR code to log in</div>
                                </tr>
                                <tr>
                                    <div class="link_sign_up">You don't have an account yet, <a style="text-decoration:none" data-toggle="modal" data-target="#signup">Register </a> now!</div>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="signup" class="modal fade" role="dialog">
        <div class="modal-dialog" style="max-width:500px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Sign Up</h3>
                </div>
                <div class="modal-body">
                    <?php include"sign-up.php"?>
                </div>
            </div>
        </div>
    </div>
    <section class="body-content">
        <div class="container">
            <div class="service-detail clearfix">
                <div class="service-info clearfix">
                    <div class="col-sm-5 image-service">
                        <img src="image/sport.jpg">
                    </div>
                    <div class="col-sm-7">
                        <div class="info-service">
                            <div class="title-detail-dervice">
                                <h1>Watch Sports Program</h1>
                            </div>
                            <hr>
                            <label style="width: 300px">Set your using time: (10$/h)</label>
                            <br>
                            <label>Using time:</label>
                            <input onchange="myFunction(this.value)" type="number" min="0" value="0">
                            <label>minute(s)</label>
                            <br>
                            <label>Total cost:</label>
                            <input class="movie-cost" value="0" readonly>
                            <label>$</label>
                            <br>
                            <div class="btn-detail-service">
                                <button data-dismiss="modal" class="use-service" onclick="usesv()">
                                    Use Service
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-des">
                    <h2>Description:</h2>
                    <p>When you use this mode, your table will be surrounded by walls of glasses which prevented sound. Then you can see your favorite sport without annoying everyone.</p>
                </div>
                <hr>
                <div class="other-service">
                    <div class="col-sm-4">
                        <div class="frame">
                            <div class="div-pic">
                                <img class="pic" src="image/karaoke-edit.png" alt="Karaoke">

                            </div>
                            <div class="link">
                                <b class="title-table">Karaoke</b>
                                <a href="karaoke.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="frame">
                            <div class="div-pic">
                                <img class="pic" src="image/cinema-edit.png" alt="Watch Movies">
                            </div>
                            <div class="link">
                                <b class="title-table">Watch Movies</b>
                                <a href="movie.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="frame">
                            <div class="div-pic">
                                <img class="pic" src="image/private.jpg" alt="Private Mode">
                            </div>
                            <div class="link">
                                <b class="title-table">Private Mode</b>
                                <a href="private.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'pin.php'?>
    <?php include'footer.php';?>
</body>

<script src="js/book-table.js "></script>
<script src="js/search.js"></script>
<script src="js/pin.js"></script>
<script type="text/javascript" src="js/process.js"></script>

</html>
