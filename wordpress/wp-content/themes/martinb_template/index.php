<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MartinB
 */

get_header(); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nachdenkliche Bilder mit Sprüche">
    <meta name="author" content="Martin Busse">
    <title>1Seite</title>
   	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">

</head>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<class="navbar navbar-default navbar-fixed-top">
	<div>

<!-- Video zum Einbetten: <iframe width="1120" height="630" src="https://www.youtube-nocookie.com/embed/ChOhcHD8fBA?rel=0&amp;showinfo=0&amp;start=46" frameborder="0" allowfullscreen></iframe> -->

	</div>

<section id="intro">
            <div class="col-xs-12">
                <video id="bg-video" autoplay="autoplay" loop="loop" muted="" placeholder="<?php bloginfo('template_url');?>/images/Beschwoerung.jpg">
                    <!--<source src="video/b34-gebaeude_mitFilter.mp4" type="video/mp4" media="all and (min-width:768px)">
                    <source src="video/b34-gebaeude_mitFilter.webm" type="video/webm" media="all and (min-width:768px)"> -->
                   <source width="1120" height="630" src="https://www.youtube-nocookie.com/embed/ChOhcHD8fBA?rel=0&amp;showinfo=0&amp;start=46" frameborder="0" allowfullscreen media="all and (min-width:768px)">	
                </video>
                
                <div id="text-overlay-vid">
                    <h1></h1>
                    <br>
                    <a class="btn btn-warning btn-lg" href="https://www.youtube-nocookie.com/embed/55of_cgk8Xc?rel=0;autoplay=1" target="_blank">Video ansehen <i class="fa fa-video-camera"></i></a>
                    <br><br><br><br>
                    <a href="#about" class="page-scroll arrow-down"><i class="fa fa-angle-double-down fa-3x"></i></a>
                </div>
            </div>
    </section>

<div class="row max2055">
            <div class="col-md-6 no-padding">
                <img src="<?php bloginfo('template_url');?>/images/Beschwoerung.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 text-box text-justify">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
<br>
     	<div class="row max2055">
           <div class="col-md-6 text-box text-justify">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div> <div class="col-md-6 no-padding">
                <img src="<?php bloginfo('template_url');?>/images/Beschwoerung.jpg" class="img-responsive">
            </div>
            
        </div>


	

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- jQuery ist schon installiert bei wordpress

    <script src=" ?php bloginfo('template_url');?> /js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" </script> -->

    <script src="<?php bloginfo('template_url');?>/js/popper.js"></script>

    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
</body>


<?php
get_sidebar();
get_footer();



