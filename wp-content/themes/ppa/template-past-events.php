<?php
/*
Template Name: Past Events
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php   
                global $post;

                $EM_Event = em_get_event($post->ID, 'post_id');

                echo '<div class="events-count"><span>' . EM_Events::count( array( 'scope' => 'past') ) . ' Events' . '</div></span>';

                echo EM_Events::output(array(
                    'format'        => '<div class="event-detail clear">
                            <div class="event-image">{has_image}#_EVENTIMAGE{596,370}{/has_image}{no_image}#_CATEGORYIMAGE{/no_image}</div>
                            <div class="event-info">
                                <span> #_EVENTDATES #_EVENTLINK </span>
                            #_EVENTEXCERPT</div><a class="button learn-more-btn" href="#_EVENTURL">Learn More</a>
                        </div>',
                    'scope'         => 'past',
                    'limit'         => 10,
                    'pagination'    => 1
                ));
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>