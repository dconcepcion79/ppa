<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'dt_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function dt_register_meta_boxes( $meta_boxes )
{
	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'ppa_';
	
	// Featured post meta box
	$meta_boxes[] = array(
		'id' => 'meeting_notes_box',
		'title' => __( 'Meeting Notes', 'ppa' ),
		'pages' => array( 'event' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			// Featured Image
			array(
				'name' => __( 'Upload Meeting Notes', 'ppa' ),
				'id'   => "{$prefix}meeting_notes",
				'type' => 'file_advanced',
				'desc'  => __( 'Upload the meeting notes here.', 'ppa' ),
			),
		),
	);

	return $meta_boxes;
}


