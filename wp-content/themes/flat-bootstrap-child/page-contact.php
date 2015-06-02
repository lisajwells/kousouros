<?php
/*
Template Name: Contact
*/

get_header(); ?>

<!-- I'm actually using a modal for Contact now instead of this page -->

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid" class="row">
        <div id="primary" class="content-area col-md-5 col-md-offset-1">
            <main id="main" class="site-main" role="main">

                <p id="contact-page-info"><b>260 Madison Ave, 22nd Floor<br>
                New York, New York 10016-2404<br>
                Phone: 212-532-1934<br>
                Fax: 212-532-1939</b></p>

                <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); 
                        the_content();
                    } // end while
                } // end if
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
