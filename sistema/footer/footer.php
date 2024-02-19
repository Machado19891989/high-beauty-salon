<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <style>
    .footer-widget p {
      margin-bottom: 27px;
    }

    p {
      font-family: 'Nunito', sans-serif;
      font-size: 16px;
      line-height: 28px;
    }

    .animate-border {
      position: relative;
      display: block;
      width: 115px;
      height: 3px;
      background: #007bff;
    }

    .animate-border:after {
      position: absolute;
      content: "";
      width: 35px;
      height: 3px;
      left: 0;
      bottom: 0;
      border-left: 10px solid #fff;
      border-right: 10px solid #fff;
      -webkit-animation: animborder 2s linear infinite;
      animation: animborder 2s linear infinite;
    }

    @-webkit-keyframes animborder {
      0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
      }

      100% {
        -webkit-transform: translateX(113px);
        transform: translateX(113px);
      }
    }

    @keyframes animborder {
      0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px);
      }

      100% {
        -webkit-transform: translateX(113px);
        transform: translateX(113px);
      }
    }

    .animate-border.border-white:after {
      border-color: #fff;
    }

    .animate-border.border-yellow:after {
      border-color: #F5B02E;
    }

    .animate-border.border-orange:after {
      border-right-color: #007bff;
      border-left-color: #007bff;
    }

    .animate-border.border-ash:after {
      border-right-color: #EEF0EF;
      border-left-color: #EEF0EF;
    }

    .animate-border.border-offwhite:after {
      border-right-color: #F7F9F8;
      border-left-color: #F7F9F8;
    }

    /* Animated heading border */
    @keyframes primary-short {
      0% {
        width: 15%;
      }

      50% {
        width: 90%;
      }

      100% {
        width: 10%;
      }
    }

    @keyframes primary-long {
      0% {
        width: 80%;
      }

      50% {
        width: 0%;
      }

      100% {
        width: 80%;
      }
    }

    .dk-footer {
      padding: 75px 0 0;
      background-color: #151414;
      position: relative;
      z-index: 2;
    }

    .dk-footer .contact-us {
      margin-top: 0;
      margin-bottom: 30px;
      padding-left: 80px;
    }

    .dk-footer .contact-us .contact-info {
      margin-left: 50px;
      color: #EEF0EF;
    }
.contact-info-2{
  color: #EEF0EF;
}
    .dk-footer .contact-us.contact-us-last {
      margin-left: -80px;
    }

    .dk-footer .contact-icon i {
      font-size: 24px;
      top: -15px;
      position: relative;
      color: #007bff;
    }

    .dk-footer-box-info {
      position: absolute;
      top: -122px;
      background: #202020;
      padding: 40px;
      z-index: 2;
    }

    .dk-footer-box-info .footer-social-link h3 {
      color: #fff;
      font-size: 24px;
      margin-bottom: 25px;
    }

    .dk-footer-box-info .footer-social-link ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .dk-footer-box-info .footer-social-link li {
      display: inline-block;
    }

    .dk-footer-box-info .footer-social-link a i {
      display: block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      background: #000;
      margin-right: 5px;
      color: #fff;
    }

    .dk-footer-box-info .footer-social-link a i.fa-facebook {
      background-color: #3B5998;
    }

    .dk-footer-box-info .footer-social-link a i.fa-twitter {
      background-color: #55ACEE;
    }

    .dk-footer-box-info .footer-social-link a i.fa-google-plus {
      background-color: #DD4B39;
    }

    .dk-footer-box-info .footer-social-link a i.fa-linkedin {
      background-color: #0976B4;
    }

    .dk-footer-box-info .footer-social-link a i.fa-instagram {
      background-color: #B7242A;
    }

    .footer-awarad {
      margin-top: 285px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -webkit-flex: 0 0 100%;
      -moz-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .footer-awarad p {
      color: #fff;
      font-size: 24px;
      font-weight: 700;
      margin-left: 20px;
      padding-top: 15px;
    }

    .footer-info-text {
      margin: 26px 0 32px;
      color: #EEF0EF;
    }

    .footer-left-widget {
      padding-left: 80px;
    }

    .footer-widget .section-heading {
      margin-bottom: 35px;
    }

    .footer-widget h3 {
      font-size: 24px;
      color: #fff;
      position: relative;
      margin-bottom: 15px;
      max-width: -webkit-fit-content;
      max-width: -moz-fit-content;
      max-width: fit-content;
    }

    .footer-widget ul {
      width: 50%;
      float: left;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .footer-widget li {
      margin-bottom: 18px;
    }

    .footer-widget p {
      margin-bottom: 27px;
    }

    .footer-widget a {
      color: #878787;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
    }

    .footer-widget a:hover {
      color: #007bff;
    }

    .footer-widget:after {
      content: "";
      display: block;
      clear: both;
    }

    .dk-footer-form {
      position: relative;
    }

    .dk-footer-form input[type=email] {
      padding: 14px 28px;
      border-radius: 50px;
      background: #2E2E2E;
      border: 1px solid #2E2E2E;
    }

    .dk-footer-form input::-webkit-input-placeholder,
    .dk-footer-form input::-moz-placeholder,
    .dk-footer-form input:-ms-input-placeholder,
    .dk-footer-form input::-ms-input-placeholder,
    .dk-footer-form input::-webkit-input-placeholder {
      color: #878787;
      font-size: 14px;
    }

    .dk-footer-form input::-webkit-input-placeholder,
    .dk-footer-form input::-moz-placeholder,
    .dk-footer-form input:-ms-input-placeholder,
    .dk-footer-form input::-ms-input-placeholder,
    .dk-footer-form input::placeholder {
      color: #878787;
      font-size: 14px;
    }

    .dk-footer-form button[type=submit] {
      position: absolute;
      top: 0;
      right: 0;
      padding: 12px 24px 12px 17px;
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px;
      border: 1px solid #007bff;
      background: #007bff;
      color: #fff;
    }

    .dk-footer-form button:hover {
      cursor: pointer;
    }

    .container {
      color: #EEF0EF;
    }
  </style>

</head>

<body>
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
                    <i><img src="../img/face-2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                  </a>
                </li>
                <li>
               
                </li>
                <li>
                  <a href="#">
                    <i><img src="../img/insta2.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i><img src="../img/whats.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i><img src="../img/youtube.png" alt="Whatsapp" width="40px" style="border-radius: 15px;"></i>
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
                  <i aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h4 class="contact-info-2"><?php echo $nome_site; ?></h4>
                </div>
                <table>
                  <tr>
                    <td><img width="30" height="30" src='../img/mapa.png'></td>
                    <td> Endereço</br>
                  </tr>
                </table>
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
<style></style>