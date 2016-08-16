<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ppa
 */

get_header(); 
//ppa_breadcrumb(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			global $post;

			$EM_Event = em_get_event($post->ID, 'post_id');
		?>
            
        <div class="event-image">
            <?php echo $EM_Event->output('#_EVENTIMAGE{596,370}'); ?>
        </div>

        <div class="event-header">
            <h3 class="single-event-title"><?php echo $EM_Event->output('#_EVENTDATES'); ?> <?php echo $EM_Event->output('#_EVENTNAME'); ?></h3>
            <div class="event-time"><?php echo $EM_Event->output('#_EVENTTIMES'); ?></div>
            <div class="event-address"><?php echo $EM_Event->output('#_LOCATIONLINK'); ?></div>
        </div>
        <div class="event-info">
            <div class="event-details">
                <?php echo $EM_Event->output('#_EVENTNOTES'); ?>
            </div>
            <?php
                $ppa_meeting_note_url = '';
                // Display the title as a hyperlinked list item
                if ( function_exists( 'rwmb_meta' ) ) {
                    $ppa_meeting_notes = rwmb_meta( 'ppa_meeting_notes', $args = array('type' => 'file_advanced'), get_the_ID() );
                    foreach ($ppa_meeting_notes as $ppa_meeting_note) {
                        $ppa_meeting_note_url = $ppa_meeting_note['url'];
                    }
                }
                
                if ( $ppa_meeting_note_url ) {
                    $ppa_meeting_note_url = '<a class="button" href="' . esc_url( $ppa_meeting_note_url ) . '">Meeting Notes <i class="fa fa-download"></i></a>';
                } else {
                    $ppa_meeting_note_url = '';
                }
                echo $ppa_meeting_note_url;
            ?>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>