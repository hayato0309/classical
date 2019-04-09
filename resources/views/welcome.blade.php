<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Classical Life</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="logo" href="{{ asset('img') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300">
</head>
<body>
    <header class="header">
    <div class="wrapper">
    <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Classical Life</h3>
                <!-- <strong>BS</strong> -->
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#home" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>
                </li>
                <li>
                    <a href="#concert-info" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-copy"></i>
                        Concert Infomation
                    </a>
                </li>
                <li>
                    <a href="#youtube-info" data-toggle="collapse" aria-expanded="false">
                        <i class="fab fa-youtube"></i>
                        Today's Performance
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-comments"></i>
                        Chat Room
                    </a>
                </li>
            </ul>
            <!-- <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <span>←</span>
                        </button>
                    </div>
                </nav>
            </div> -->
        </nav>

        <!-- Page Content  -->
    </div>
    </header>
    <section id="home" class="home">
        <div class="title">
            <h1>Classical Life</h1>
            <div>Classicをもっと身近に</div>
        </div>
    </section>
    <section id="about" class="about container-fluid">
        <div class="description">
            <div class="text-center">
                <span>Classic</span> をもっと身近に。
            </div>
            <div class="text-center">
                <span>Classic</span> を「もっと知りたい」「もっと知ってもらいたい」。
            </div>
        </div>
    </section>
    <div id="concert-info" class="link-dammy"></div>
    <section id="" class="concert-info">
        <div class="title grid">
            <p>Concert Information</p>
        </div>
        <a href="/professional">
            <div class="concert grid professional">
                <div>Professinal</div>
                <img src="img/orchestra.jpg" alt="">
            </div>
        </a>
        <a href="/amateur">
            <div class="concert grid amateur">
                <div>Amateur</div>
                <img src="img/orchestra.jpg" alt="">
            </div>
        </a>
        <a href="/student">
            <div class="concert grid student">
                <div>Student</div>
                <img src="img/orchestra.jpg" alt="">
            </div>
        </a>
    </section>
    <div id="youtube-info" class="link-dammy"></div>
    <section id="" class="youtube-info">
        <div class="title grid">
            <p>Today's Performance</p>
        </div>
        <div class="youtube grid">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/UFl9xuYP5T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube grid">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/UFl9xuYP5T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube grid">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/UFl9xuYP5T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube grid">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/UFl9xuYP5T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube grid">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/UFl9xuYP5T8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <section class="chatroom">
    </section>
    <footer class="footer">
    </footer>
    <!-- jqueryの読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $('#sidebarCollapse').on('click', function () {
        //         $('#sidebar').toggleClass('active');
        //     });
        // });
        // In-page scroll
        $(function(){
            $('a[href^="#"]').click(function(){
                var speed = 700;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
    </script>
</body>
</html>