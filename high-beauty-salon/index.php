<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo-index.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    
    <?php include 'sistema/variaveis.php'; ?>
    
    <title><?php echo $nome_site;?></title>

    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body><!-- Menu -->
    <header class="top-line">
<?php include 'sistema/menu.php'; ?>
    </header>
    <!-- informações--><br><br><br><br>
<div>
    <h1><?php echo $nome_site;?></h1>
</div>
<!--carossel-->
    <div class="gradiente">
        <div class="container-2">
            <h2>Nossas modelos</h2>
            <hr>
            <section class="customer-logos slider">
                <div class="slide"><img src="img/cabelo-1.png"></div>
                <div class="slide"><img src="img/cabelo-2.png"></div>
                <div class="slide"><img src="img/cabelo-3.png"></div>
                <div class="slide"><img src="img/cabelo-4.png"></div>
                <div class="slide"><img src="img/cabelo-5.png"></div>
                <div class="slide"><img src="img/cabelo-6.png"></div>
                <div class="slide"><img src="img/cabelo-7.png"></div>
                <div class="slide"><img src="img/cabelo-8.png"></div>
                <div class="slide"><img src="img/cabelo-9.png"></div>
            </section>
            <hr>
        </div>
        <div class="parallax"><br><br><br><br><br><br><br><br><br>
        <script src='<PathTo file="htm/js/scratch-card.js">'></script>
<link rel="stylesheet" href='<PathTo file="htm/css/scratch-card.css">'>
            <!--quadros-->
            <div class="box">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="box-part text-center">

                                <img src="img/insta.png" alt="">
                                <div class="title">
                                    <h4>Instagram</h4>
                                </div>

                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>

                                <a href="#">Learn More</a>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="box-part text-center">

                                <img src="img/whuats.png" alt="">

                                <div class="title">
                                    <h4>WhatsApp</h4>
                                </div>

                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>

                                <a href="#">Learn More</a>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="box-part text-center">

                                <img src="img/face.png" alt="">
                                <div class="title">
                                    <h4>Facebook</h4>
                                </div>

                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>

                                <a href="#">Learn More</a>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="box-part text-center">

                                <img src="img/Pinterest.png" alt="">
                                <div class="title">
                                    <h4>Pinterest</h4>
                                </div>

                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>

                                <a href="#">Learn More</a>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                            <div class="box-part text-center">

                                <img src="img/youtube.png" alt="">
                                <div class="title">
                                    <h4>Youtube</h4>
                                </div>

                                <div class="text">
                                    <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                                </div>

                                <a href="#">Learn More</a>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div></div>


    <!--footer-->
    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="images/footer_logo.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                            Site de referência sobre Lorem Ipsum, também com informações sobre suas origens.
                        </p>
                        <div class="footer-social-link">
                            <h3>Siga-nos</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i><img src="img/face-2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <!-- <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>-->
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/insta2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/whats.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i><img src="img/youtube-2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                                    </a>
                                </li>
                                <!--<a href="#">
                                    <i><img src="img/Pinterest-2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>Melhor salão da região.</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i aria-hidden="true"><img src="img/mapa.png" alt="Mapa" width="30px"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3><?php echo $nome_site;?></h3>
                                    <p>Endereço</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                               <!-- <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                 End contact Icon 
                                <div class="contact-info">
                                    <h3>95 711 9 5353</h3>
                                    <p>Give us a call</p>
                                </div>
                                End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Links Úteis</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Sobre nos</a>
                                    </li>
                                    <li>
                                        <a href="#">Serviços</a>
                                    </li>
                                    <li>
                                        <a href="#">Projetos</a>
                                    </li>
                                    <li>
                                        <a href="#">Nosso time</a>
                                    </li>
                                    <li>
                                        <a href="#">Testemunho</a>
                                    </li>
                                </ul>
                                <!--<ul>
                                    
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>-->
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Inscreva-se</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                Site de referência sobre Lorem Ipsum, também com informações sobre suas origens.</p>
                                <!--<form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>-->
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2024, Todos os direitos reservados.</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Termos</a>
                                </li>
                                <li>
                                    <a href="#">Politica de privacidade</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <script>
            jQuery(document).ready(function() {
                // Exibe ou oculta o botão
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > 200) {
                        jQuery('.voltar-ao-topo').fadeIn(200);
                    } else {
                        jQuery('.voltar-ao-topo').fadeOut(200);
                    }
                });

                // Faz animação para subir
                jQuery('.voltar-ao-topo').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: 0
                    }, 300);
                })
            })
        </script>
        <div id="voltar-ao-topo" class="voltar-ao-topo">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>

</body>

</html>