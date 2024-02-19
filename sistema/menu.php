<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<script></script>
<style>
*{
    margin: 0%;
    padding: 0%;
    text-decoration: none;
    list-style-type: none;
}

.menu-area {
    background-color: #363352;
    padding-left: 20%;
}

.dropdown-menu {
    padding: 0;
    margin: 0;
    border: 0 solid transition!important;
    border: 0 solid rgba(0, 0, 0, .15);
    border-radius: 0;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    
}
/*.mainmenu a,*/
.navbar-default .navbar-nav > li > a,
.mainmenu ul li a,
.navbar-expand-lg .navbar-nav .nav-link {
    color: #fff;
    font-size: 16px;
    text-transform: capitalize;
    padding: 26px 25px;
    font-family: 'Roboto', sans-serif;
    display: block !important;
    
}
.mainmenu .active a,
.mainmenu .active a:focus,
.mainmenu .active a:hover,
.mainmenu li a:hover,
.mainmenu li a:focus,
.navbar-default .navbar-nav>.show>a,
.navbar-default .navbar-nav>.show>a:focus,
.navbar-default .navbar-nav>.show>a:hover {
    color: #fff;
    background-color: #79508f;
    outline: 0;
}
.navbar-light .navbar-toggler{
    padding: 0;
}
.navbar-light .navbar-toggler .fa-bars{
    color: #fff;
    border: 1px solid #fff;
    padding: 5px 10px;
}
.only-mobile{
    display: none;
}
.only-desktop{
    display: block;
}

/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a {
    background-color: #9e0f48;
    text-decoration: none;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.mainmenu .collapse ul ul > li:hover > a
/*.navbar-default .navbar-nav .show .dropdown-menu > li > a:focus,
.navbar-default .navbar-nav .show .dropdown-menu > li > a:hover*/ {
    background-color: #ba4171;
}
.mainmenu .collapse ul ul ul > li:hover > a {
    background-color: #c7638b;
}
.mainmenu .collapse ul ul,
.mainmenu .collapse ul ul.dropdown-menu {
    background-color: #131d33;
}
.mainmenu .collapse ul ul ul,
.mainmenu .collapse ul ul ul.dropdown-menu {
    background-color: #131d33
}
.mainmenu .collapse ul ul ul ul,
.mainmenu .collapse ul ul ul ul.dropdown-menu {
    background-color: #131d33
}


/******************************Drop-down menu work on hover**********************************/
.mainmenu {
    background: none;
    border: 0 solid;
    margin: 0;
    padding: 0;
    min-height: 20px;
    width: 100%;
}
@media only screen and (min-width: 767px) {
    /* Level 1 */
    .mainmenu .collapse ul ul {
        position: absolute;
        top: 80px;
        left: 0;
        min-width: 200px;
        display: block;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: 0.5s ease all;
        transition: 0.5s ease all;
    }
    .mainmenu .collapse ul li:hover> ul {
        visibility: visible;
        opacity: 1;
        top: 100%;
    }

    /* Level 2 */
    .mainmenu .collapse ul ul li {
        position: relative;
    }
    .mainmenu .collapse ul ul ul {
        position: absolute;
        top: 0;
        left: 120%;
        min-width: 250px;
        display: block;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: 0.5s ease all;
        transition: 0.5s ease all;
    }
    .mainmenu .collapse ul ul li:hover> ul {
        visibility: visible;
        opacity: 1;
        top: 0;
        left: 100%;
    }
    .mainmenu .collapse ul ul li a .fa-angle-right{
        position: absolute;
        right: 20px;
        top: 20px;
    }


    /* Level 3 */
    .mainmenu .collapse ul ul ul li {
        position: relative
    }
    .mainmenu .collapse ul ul ul ul {
        position: absolute;
        top: 0;
        left: -120%;
        min-width: 250px;
        display: block;
        z-index: 1;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: 0.5s ease all;
        transition: 0.5s ease all;
    }
    .mainmenu .collapse ul ul ul li:hover ul {
        visibility: visible;
        opacity: 1;
        top: 0;
        left: -100% !important;
    }
    
}
@media only screen and (max-width: 767px) {
    .only-mobile{
        display: inline-block;
    }
    .only-desktop{
        display: none;
    }
    /*.navbar-nav .show .dropdown-menu .dropdown > li > a{        
        background-color: #fff;
    }*/
    .mainmenu .collapse ul ul > li.dropdown > a,
    .mainmenu .collapse ul ul > li.dropdown > ul.dropdown-menu > li.dropdown > a{
        background-color: #0f3c9e;
        padding: 16px 15px 16px 15px;
    }
    .navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a,
    .navbar-nav .show .dropdown-menu .dropdown-menu > li > a,
    .navbar-nav .show .dropdown-menu > li > a {
        padding: 16px 15px 16px 35px;
        background-color: #202e4c;
    }
    .navbar-nav .show .dropdown-menu .dropdown-menu > li > a:hover,
    .navbar-nav .show .dropdown-menu > li > a:hover{
        background-color: #0f3c9e;
    }


    /* Level 1 mobile arrow */
    .mainmenu ul li a .fa-angle-down{
        position: absolute;
        right: 15px;
        top: 15px;
        width: 25px;
        height: 25px;
        background-color: #fff;
        color: #0f3c9e;
        text-align: center;
        line-height: 25px;
    }
}






/*custom css*/
.mainmenu ul li a.dropdown-toggle::after{
    display: none;
}</style>
<script>(function($){
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	    if (!$(this).next().hasClass('show')) {
		    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	    }
	    var $subMenu = $(this).next(".dropdown-menu");
	    $subMenu.toggleClass('show');

	    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
	       $('.dropdown-submenu .show').removeClass("show");
	    });

	    return false;
	});
})(jQuery)</script>
</head>
<body>
<div class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars" aria-hidden="true"></span>
                </button><img src="" alt="">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="active">
                            <a href="http://localhost/high-beauty-salon/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li><a href="http://localhost/high-beauty-salon/sistema/profissionais/index.php" >Profissionais</a></li>
                        <li class="dropdown">
                            <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Serviços &#9660;
                                <i ></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#">Serviço 1</a></li>
                                <li><a href="#">Serviço 2</a></li>
                                <li><a href="#">Serviço 3</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Mais &#10095;
                                        <i></i>
                                        <i></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Serviço 1</a></li>
                                        <li><a href="#">Serviço 2</a></li>
                                        <li><a href="#">Serviço 3</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    Mais &#10094;
                                                <i class="fa fa-angle-down only-mobile" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Serviço 1</a></li>
                                                <li><a href="#">Serviço 2</a></li>
                                                <li><a href="#">Serviço 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Produtos</a></li>
                    </ul>    <ul><li><a href="http://localhost/high-beauty-salon/sistema/base-conhecimentos/base-conhecimentos.php">Base de conhecimento</a></li></ul>
                <ul><li><a class="" href="http://localhost/high-beauty-salon/sistema/"><span>Logim/</span><span>cadastre-se</span></a></li></ul>
            
                </div>
            </nav>
        </div>
    </div>
</div>

</body>
</html>