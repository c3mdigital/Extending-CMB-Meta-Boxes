<?php
/**
 * Extensions for CMB Custom Meta Boxes and Fields
 *
 * @package CMB_Meta_Box
 * @subpackage Meta_Box_Extensions
 * 
 * @version 1.0
 *
 */
 
 
 add_filter( 'cmb_meta_boxes', 'cmb_metabox_extensions' );
 
 /**
  * Includes the meta box extensions
  *
  * @since 1.0
  * @param array $extensions 
  *
  */
  
  function cmb_metabox_extensions() {
	  
	  $extensions = array(
	  /** @var array   'field_type' => array(  
	  	  @var string  'name' 			=> 'The Name of your New Field',
	  	  @var string  'description' 	=> 'Describe your field (optional)',
	  	  @var bool	   'validate'		=> true /** @var bool 
	  		), */
	  	'sidebar_select' => array(
	  		'name'			=> 'Sidebar Select',
	  		'description'	=> 'Select box that grabs all registered sidebars',
	  		'validate'		=> true,
	  		),
	  );
	  
	  
	  foreach( $extensions as $key => $value ) {
		  include_once( 'lib/'.$key.'php');
		  
		  if ( $value['validate'] ) 
		  		add_filter( 'cmb_validate_'.$key, 'cmb_validate_'.$key );
		  		
		  add_action( 'cmb_render_'.$key, 'cmb_'.$key );
	  }
  }
  
  function cmb_get_cmb() {
	  if ( ! class_exists( 'CMB_Meta_Box' ) )
	  		require_once 'init.php';
  }
  
  add_action( 'init', 'cmb_get_cmb', 9999 );
  