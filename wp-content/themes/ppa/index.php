<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ppa
 */

get_header(); ?>
<div class="content-area">
  <div class="intro">
      <h2><?php _e("Publishers' Publicity Association","ppa") ?></h2>
      <p><?php _e('Bringing together book publicists and the media since 1963.','ppa') ?> </p>
    </div>
   <div class="content-left">
        <h1 class="event-title">Upcoming Events</h1>
        <div class="upcoming-events flexslider">
           <ul class="slides">
            <?php
                if (class_exists('EM_Events')) {
                   echo EM_Events::output( array(
                       'format'        => '{is_future}
                                                <li class="event-detail clearfix">
                                                    <div class="event-image">
                                                        #_EVENTIMAGE{596,370}
                                                    </div>
                                                    <div class="event-info">
                                                        <span> #_EVENTDATES #_EVENTLINK </span>
                                                        #_EVENTEXCERPT
                                                    </div>
                                                </li>
                                            {/is_future}',
                       'limit'          => 10,
                       'orderby'        => 'start_date'
                   ) );
                }
            ?>
            </ul>
            <a class="button view-all-btn" href="<?php echo home_url(); ?>/events/">View All</a>
       </div>
       <div class="event-contact">
           <h1 class="event-title"> <?php _e(' Contact ','ppa') ?> </h1>
           <div class="contact-info">
               <div class="contact"><p><?php _e('Thoughts? Questions? Suggestions? Reach out now to find out more about our organization and to join us!','ppa'); ?></p></div>
               <a href="mailto:publisherspublicity@gmail.com"><button><?php _e('EMAIL US','ppa'); ?></button></a>
           </div>
       </div>
    </div>
    <div class="content-right">
        <div class="meeting-notes">
            <h1 class="event-title"><?php _e('Meeting Notes','ppa'); ?></h1>
            <img src="<?php bloginfo('template_directory'); ?>/images/meeting-notes.jpg">
            <a class="button view-all-btn" href="<?php echo home_url(); ?>/meeting-notes/">View All</a>
        </div>
        <h1 class="event-title"><?php _e('Past Events','ppa'); ?></h1>
        <div class="past-events">
           <ul class="slides">
            <?php
                if (class_exists('EM_Events')) {
                   echo EM_Events::output( array(
                       'format'        => '{is_past}
                                                <li class="event-detail clearfix">
                                                    <div class="event-image">
                                                        #_EVENTIMAGE{596,370}
                                                    </div>
                                                    <div class="event-info">
                                                        <span> #_EVENTDATES #_EVENTLINK </span>
                                                        #_EVENTEXCERPT
                                                    </div>
                                                </li>
                                            {/is_past}',
                       'limit'          => 10,
                       'orderby'        => 'name',
                       'scope'=>'past'
                   ) );
                }
            ?>
            </ul>
            <a class="button view-all-btn" href="<?php echo home_url(); ?>/past-events/">View All</a>
       </div>
    </div>
</div>
<?php
get_footer();
