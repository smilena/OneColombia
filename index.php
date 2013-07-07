<?php
  /* Short and sweet */
  define('WP_USE_THEMES', false);
  require('./blog/wp-blog-header.php');
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
      <header id="header">
      	<a href="http://www.mozilla.org/" id="tabzilla" data-locale="es-ES">mozilla</a>
        <div id="logo-mc"></div>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>

        <div id="social">
          <ul>
            <li><a href="" id="twitter-icon" class="flip" title="Síguenos en Twitter">Síguenos en Twitter</a></li>
            <li><a href="" id="facebook-icon" class="flip" title="Síguenos en Facebook">Síguenos en Facebook</a></li>
            <li><a href="" id="gplus-icon" class="flip" title="Síguenos en Google Plus">Síguenos en Google Plus</a></li>
            <li><a href="" id="youtube-icon" class="flip" title="Nuestros vídeos en YouTube">Nuestros vídeos en YouTube</a></li>
            <li><a href="" id="flickr-icon" class="flip" title="Nuestros fotos en Flickr">Nuestras fotos en Flickr</a></li>
            <li><a href="" id="rss-icon" class="flip" title="Feed RSS">Feed RSS</a></li>
          </ul>
        </div>
      </header>


      <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Contenido     :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      <div id="mosaico"></div>
      <div id="content">

        <!-- -->
        <div id="banner-news">
          <?php
            global $post;
            $args = array( 'posts_per_page' => 1 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) :  setup_postdata($post); ?>
            <a id="link_title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>

            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
           <?php the_post_thumbnail(array(100)); ?></a>
            <?php endforeach; ?>
        </div>
        <nav>
          <ul>
            <a href="./blog/objetivo">
              <li><span class="box-one"></span> Objetivo </li>
            </a>
            <a href="./blog/objetivo">
              <li><span class="box-two"></span> Nuestra Comunidad </li>
            </a>
            <a href="./blog/web-abierta">
              <li><span class="box-tree"></span> Web Abierta </li>
            </a>
            <a href="./blog">
              <li><span class="box-four"></span> Noticias </li>
            </a>
            <a href="./blog/sitios-destacados">
              <li><span class="box-five"></span> Sitios Destacados </li>
            </a>
            <a target="_blank" href="http://www.mozilla-hispano.org/">
              <li><span class="box-six"></span></li>
            </a>
          </ul>
        </nav>
        <a href="./blog/colabora" class="button_colabora">COLABORA &nbsp;►</a>
        <!-- Tweeter -->
        <a class="twitter-timeline"  href="https://twitter.com/Migueldavidq/mozilla"  data-widget-id="346747120050659331" data-tweet-limit="1" width="300px" height="300px"  data-chrome="nofooter noheader" ></a>
      </div>
      <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Comunidad	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      <div id="comunity">
        <h4>Comunidad Mozilla</h4>
<?php
$args = array( 'post_type' => 'miembros', 'posts_per_page' => 6, 'orderby' => 'rand' );
  $pm = get_posts( $args );

  foreach($pm as $p) {
          $pc = get_post_complete($p->ID);
          echo "<div>";
          print_r( $image = wp_get_attachment_image( $pc['imagen_miembros'], array(100) ) );
          echo "</div>";
          //print_r($pc); // <-- prints out all available fields, both built-in and custom fields
  }

?>
      </div>
      <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Productos	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      <div id="products">
        <h4>Productos Mozilla</h4>
        <div id="prod_01" class="productos"><a href="https://www.mozilla.org/firefox/" target="BLANK"></a></div>
        <div id="prod_02" class="productos"><a href="http://www.mozilla.org/firefox/os/"

            target="BLANK"></a></div>
        <div id="prod_03" class="productos"><a href="https://www.mozilla.org/apps/" target="BLANK"></a></div>
        <div id="prod_04" class="productos"><a href="https://www.mozilla.org/persona/" target="BLANK"></a></div>
        <div id="prod_05" class="productos"><a href="https://www.mozilla.org/thunderbird/" target="BLANK"></a></div>
        <div id="prod_06" class="productos"><a href="https://webmaker.org/" target="BLANK"></a></div>
      </div>

      <!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
			Footer	 :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
      <footer id="colophon">
        <div class="row">
          <div class="footer-logo"> <a href="/en-US/"> <img alt="mozilla" src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png"></a>
          </div>
          <div class="footer-license">
<!--             <p> Portions of this content are ©1998–2013 by individual
              mozilla.org contributors. Content available under a <a href="/foundation/licensing/website-content.html">Creative
                Commons license</a> . </p>
            <p> <a href="/en-US/contribute/page/">Contribute to this page</a> </p> -->
          </div>

<!--
          <ul class="footer-nav">
            <li> <a href="/en-US/about/contact.html#map-mountain_view">Contact
                Us</a> </li>
            <li> <a href="/en-US/privacy/">Privacy Policy</a> </li>
            <li> <a href="/en-US/about/legal.html">Legal Notices</a> </li>
            <li> <a href="/en-US/legal/fraud-report/index.html">Report
                Trademark Abuse</a> </li>
          </ul>
          <ul class="footer-nav2">
            <li> <a href="http://twitter.com/firefox">Twitter</a> </li>
            <li> <a href="http://facebook.com/Firefox">Facebook</a> </li>
            <li> <a href="https://affiliates.mozilla.org/">Firefox Affiliates</a>
            </li>
          </ul>
-->

        </div>
      </footer>
    </div>


    <!-- JS live -->
    <!-- // <script src="js/live.js"></script> -->

    <!-- JS Tabzilla -->
    <!-- <script src="//mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script> -->
    <script src="//mozorg.cdn.mozilla.net/es/tabzilla/tabzilla.js"></script>

    <!-- JS jQuery -->
    <script src="main/js/jquery.js"></script>

    <!-- JS MAIN -->
    <script src="main/js/_js.js"></script>

    <!-- Twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </body>
</html>
