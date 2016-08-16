<?php
/*
Template Name: Meeting Events
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="meeting-notes-accordian">
            <?php   
                global $post;

                $EM_Event = em_get_event($post->ID, 'post_id');

                $even_date = EM_Events::output(array(
                    'format'        => '#_EVENTDATES',
                    'scope'         => 'past',
                    'limit'         => 10,
                    'pagination'    => 1
                ));
            ?>
<?php
    // Get years that have posts
    $years = $wpdb->get_results( "SELECT YEAR(post_date) AS year FROM wp_posts WHERE post_type = 'event' AND post_status = 'publish' GROUP BY year DESC" );

    //  For each year, do the following
    foreach ( $years as $year ) {
        
        $months = $wpdb->get_results( "SELECT MONTH(post_date) AS month FROM wp_posts WHERE post_type = 'event' AND post_status = 'publish' AND YEAR(post_date) = '" . $year->year . "' GROUP BY month DESC" );
        //print_r($months);

        // Get all posts for the year
        $posts_this_year = $wpdb->get_results( "SELECT ID, post_title FROM wp_posts WHERE post_type = 'event' AND post_status = 'publish' AND YEAR(post_date) = '" . $year->year . "'" );

        // Display the year as a header
        echo '<h2 class="mn-year-title mn-title">' . $year->year . '</h2>';

        // Start an unorder list
        echo '<ul class="mn-months">';
        
        foreach ( $months as $month ) {
            echo '<h3 class="mn-month-title mn-title">' . $monthName = date('F', mktime(0, 0, 0, $month->month, 10)) . '</h3>';

            echo '<ul>';
            // For each post for that year, do the following
            foreach ( $posts_this_year as $post ) {
                $ppa_meeting_note_url = '';
                // Display the title as a hyperlinked list item
                if ( function_exists( 'rwmb_meta' ) ) {
                    $ppa_meeting_notes = rwmb_meta( 'ppa_meeting_notes', $args = array('type' => 'file_advanced'), get_the_ID() );
                    foreach ($ppa_meeting_notes as $ppa_meeting_note) {
                        $ppa_meeting_note_url = $ppa_meeting_note['url'];
                    }
                }
                
                if ( $ppa_meeting_note_url ) {
                    $ppa_meeting_note_url = '<a href="' . esc_url( $ppa_meeting_note_url ) . '"><i class="fa fa-download"></i></a>';
                } else {
                    $ppa_meeting_note_url = '';
                }
                
                echo '<li><span class="mn-date">' . $even_date . '</span>' . $post->post_title . $ppa_meeting_note_url . '</li>';
            }
            echo '</ul>';
        }

        // End the unordered list
        echo '</ul>';
    }
?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>