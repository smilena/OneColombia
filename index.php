<?php
  /* Short and sweet */
  define('WP_USE_THEMES', false);
  require('./blog/wp-blog-header.php');

  include('main/func/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title> Mozilla Colombia | </title>

    <link rel="icon"
      type="image/ico"
      href="favicon.ico" />

    <!--  CSS Normalize -->
    <link rel="stylesheet" type="text/css" href="main/css/normalize.css">

    <!--  CSS Fonts -->
    <link rel="stylesheet" type="text/css" href="main/css/fonts.css">

    <!--  CSS Tabzilla -->
    <link href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />

	<!-- CSS MAIN -->
    <link rel="stylesheet" type="text/css" media="screen" href="main/css/_css.css">

  </head>
  <body>
    <div id="wrap">

      <!-- :::::: Social -->
<!--       <div id="social">
          <ul>
            <li><a href="" id="twitter-icon" class="flip" title="Síguenos en Twitter">Síguenos en Twitter</a></li>
            <li><a href="" id="facebook-icon" class="flip" title="Síguenos en Facebook">Síguenos en Facebook</a></li>
            <li><a href="" id="gplus-icon" class="flip" title="Síguenos en Google Plus">Síguenos en Google Plus</a></li>
            <li><a href="" id="youtube-icon" class="flip" title="Nuestros vídeos en YouTube">Nuestros vídeos en YouTube</a></li>
            <li><a href="" id="flickr-icon" class="flip" title="Nuestros fotos en Flickr">Nuestras fotos en Flickr</a></li>
            <li><a href="" id="rss-icon" class="flip" title="Feed RSS">Feed RSS</a></li>
          </ul>
        </div>
 -->

      <!-- :::::: Header -->
      <header id="header">
        <!-- Tabzilla -->
        <a href="http://www.mozilla.org/" id="tabzilla" data-locale="es-ES">mozilla</a>

        <div id="logo-mc"></div>
        <!-- <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/mozilla-colombia-logo.png" alt=""> -->
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>
        <!-- Mozilla Hispano -->
        <ul>
          <a target="_blank" href="http://www.mozilla-hispano.org/">
            <li><span class="box-six"></span></li>
          </a>
        </ul>
      </header>

      <!-- ::::::: Mosaico -->
      <div id="mosaico"></div>



      <!-- ::::::: Content -->
      <div id="content">
        <!--  News -->
        <div id="banner-news">
          <?php
            global $post;
            $args = array( 'posts_per_page' => 1, 'category' => 12 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :  setup_postdata($post); ?>
            <a id="link_title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>

            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
           <?php the_post_thumbnail(array(100)); ?></a>
            <?php endforeach; ?>
        </div>

        <!--  Menu -->
        <div class="sec1">
          <nav>
            <ul>
              <a href="./blog">
                <li><span class="box-tree"></span> <p>Blog</p> </li>
              </a>
              <a href="./blog/web-abierta">
                <li><span class="box-four"></span> <p>Web Abierta</p> </li>
              </a>
              <a href="./blog/universo-mozilla">
                <li><span class="box-five"></span> <p>Universo Mozilla</p> </li>
              </a>
            </ul>
          </nav>
        </div>
        <div class="sec2">
          &nbsp;&nbsp;&nbsp;
        </div>
        <div class="sec3">


          <!-- Colabora-->
          <a href="./blog/comunidad/" class="button_colabora">PARTICIPA &nbsp;►</a>

          <!-- Facebook -->
          <div class="fb-like" data-href="http://facebook.com/mozillacolombia" data-send="false" data-width="300" data-show-faces="false"></div>

          <!-- Tweeter -->
          <a class="twitter-timeline"  href="https://twitter.com/mozillacolombia"  data-widget-id="355369031546589184" data-tweet-limit="1" width="300px" height="300px"  data-chrome="nofooter noheader" ></a>

          <!-- Twitter-->
          <a href="https://twitter.com/MozillaColombia" class="twitter-follow-button" data-show-count="false" data-lang="es" data-dnt="true">Seguir a @MozillaColombia</a>

          </div>

      </div>


      <!-- :::::: Comunidad -->
      <div id="comunity">
        <h4>Comunidad Mozilla Colombia</h4>
    <?php
      if (function_exists('comunidad')) {
        comunidad ();
      }
    ?>
      </div>
      <!-- :::::: Productos -->
      <div id="products">
        <h4>Productos Mozilla</h4>
        <div id="prod_01" class="productos"><a href="https://www.mozilla.org/firefox/" target="BLANK"></a></div>
        <div id="prod_02" class="productos"><a href="http://www.mozilla.org/firefox/os/" target="BLANK"></a></div>
        <div id="prod_03" class="productos"><a href="https://www.mozilla.org/apps/" target="BLANK"></a></div>
        <div id="prod_04" class="productos"><a href="https://www.mozilla.org/persona/" target="BLANK"></a></div>
        <div id="prod_05" class="productos"><a href="https://www.mozilla.org/thunderbird/" target="BLANK"></a></div>
        <div id="prod_06" class="productos"><a href="https://webmaker.org/" target="BLANK"></a></div>
      </div>

      <!-- :::::: Footer -->
      <div id="footer-wrap">
          <footer id="colophon">

            <div class="row">
              <div class="footer-logo">
                <a target="_blank" href="http://mozilla.org"> <img alt="mozilla" src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png"></a>
              </div>

              <div class="footer-license">
                <a target="_blank" href="http://www.mozilla.org/es-AR/about/manifesto/">
                   ... Creamos comunidades de personas dedicadas a lograr una mejor experiencia en Internet para todos. ... &nbsp;&nbsp;&nbsp;¿Conoces el manifiesto de Mozilla?
                </a>
              </div>

              <div class="footer-nav">
                <a target="_blank" href="http://www.mozilla.org/mission/">
                  <img src="main/img/love-the-web.png" alt="">
                </a>
              </div>

            </div>
        </footer>
      </div>
    </div><!-- END Footer -->


    <!-- JS live -->
    <!-- // <script src="js/live.js"></script> -->

    <!-- JS Tabzilla -->
    <!-- <script src="//mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script> -->
    <script src="//mozorg.cdn.mozilla.net/es/tabzilla/tabzilla.js"></script>

    <!-- JS jQuery -->
    <script src="main/js/jquery.js"></script>

    <!-- JS MAIN -->
    <script src="main/js/_js.js"></script>

    <!-- JS Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- JS Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Facebook -->
    <script>
          (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  </body>
</html>
