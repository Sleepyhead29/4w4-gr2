<?php 
wp_enqueue_style(   'style-principale',
                    get_template_directory_uri() . '/style.css',
                    array(), 
                    filemtime(get_template_directory(). '/style.css'));
?>
<?php 
if(! function_exists('enregistrement_nav_menu'))
{
    function enregistrement_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => 'Menu principal', 
	    	'footer'  => 'Menu pied de page',
		) );
	}
	add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
}


?>