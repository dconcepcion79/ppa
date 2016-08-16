<?php
/*
Template Name: Contact
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="contact-section clearfix">
                <div class="about-us">
                    <h1 class="event-title"><?php _e('About','ppa'); ?></h1>
                    <p>The Publishers' Publicity Association is a non-profit, professional group open to publicists of book publishing houses, as well as public relations personnel in related media. Its purpose is to raise the professional level of book publishers' publicity by conducting research into all media and by providing a meeting place for the discussion and exchange of ideas and techniques.</p>
                </div>
            
                <div class="reach-out">
                    <div class="event-contact">
                       <h1 class="event-title"> <?php _e(' Contact ','ppa') ?> </h1>
                       <div class="contact-info">
                           <div class="contact"><p><?php _e('Thoughts? Questions? Suggestions?','ppa'); ?></p></div>
                           <a href="mailto:publisherspublicity@gmail.com"><button><?php _e('EMAIL US','ppa'); ?></button></a>
                       </div>
                   </div>
                </div>
            </div><!--.contact-section-->
            
            <div class="contact-section join-us">
                <h1 class="event-title"><?php _e('Join Us','ppa'); ?></h1>
                <p>
                    The PPA Planning Committee organizes all events (both luncheons and social events). This is a great way to make new connections with the media, network across the industry, and be the first to hear about new events and opportunities. Interested in joining? Contact the PPA Planning Committee Co-Chairs.
                </p>
                
                <p>
                    <h4 class="contact-person-name">Emily Brock</h4>
                    <span class="contact-person-desg">Publicist, Dutton</span>
                    <a class="button" href="mailto:ebrock@penguinrandomhouse.com ">Email Emily</a>
                </p>
            
                <h4 class="contact-person-name">Staci Burt</h4>
                <span class="contact-person-desg">Associate Publicist, St. Martin’s Press</span>
                <a class="button" href="mailto:ebrock@penguinrandomhouse.com ">Email Staci</a>
            </div><!--.contact-section-->
            
            <div class="contact-section board-members">
                <h1 class="event-title"><?php _e('Board Members','ppa'); ?></h1>
                <p>
                    <strong>President |</strong> Selina Meere, Workman Publishing<br/>
                    <strong>Vice President |</strong> Patty Garcia, Tor & Forge Books<br/>
                    <strong>Secretary |</strong> Michelle Blankenship, Blankenship Public Relations<br/>
                    <strong>Treasurer |</strong> Peter Miller, Liveright Publishing Corporation
                </p>
                
                <p>
                    <strong>Members of the Board:</strong> Christine Ball, Dutton | Courtney Greenhalgh, Time Inc. | Dennelle Catlett, Amazon Publishing | Harry Burton, Thames & Hudson Inc. | James Meader, Picador | Michael McKenzie, Algonquin Books | Paul Samuelson, Twelve Books | Sarita Varma, Farrar, Straus and Giroux | Shanta Newlin, Penguin Young Readers | Shara Alexander, Harlequin 
                    | Tanya Farrell, Wunderkind PR
                </p>

                <p>
                    <strong>Event Planning Committee Co-Chairs:</strong> Emily Brock, Dutton | Staci Burt, St. Martin’s Press
                </p>
            </div><!--.contact-section-->
            
            <div class="contact-section job-board">
                <h1 class="event-title"><?php _e('Job Board','ppa'); ?></h1>
                <p>
                    Our Facebook page is a great place to let other PPA members know about new publicity openings at your imprint, house, or company! Feel free to post positions yourself or contact one of the Planning Committee chairs if you’d like to post anonymously.
                </p>
            </div><!--.contact-section-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>