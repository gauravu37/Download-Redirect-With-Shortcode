<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://prontoinfosys.com/
 * @since      1.0.0
 *
 * @package    Pi_redirect_shortcode
 * @subpackage Pi_redirect_shortcode/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Pi_redirect_shortcode
 * @subpackage Pi_redirect_shortcode/public
 * @author     Pronto Infosystem LLP <info@prontoinfosys.com>
 */
class Pi_redirect_shortcode_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $pirs_plugin_name    The ID of this plugin.
	 */
	private $pirs_plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $pirs_plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $pirs_plugin_name, $version ) {

		$this->pirs_plugin_name = $pirs_plugin_name;
		$this->version = $version;
		add_shortcode('pi_redirect', array($this,'pi_redirect_shortcode'));
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pi_redirect_shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pi_redirect_shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->pirs_plugin_name, plugin_dir_url( __FILE__ ) . 'css/pi_redirect_shortcode-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pi_redirect_shortcode_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pi_redirect_shortcode_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->pirs_plugin_name, plugin_dir_url( __FILE__ ) . 'js/pi_redirect_shortcode-public.js', array( 'jquery' ), $this->version, false );

	}
	
	

	public function pi_redirect_shortcode($atts)

	{

		ob_start();

		$myURL = (isset($atts['url']) && !empty($atts['url']))?esc_url($atts['url']):"";    //URL of redirect

		$mySEC = (isset($atts['sec']) && !empty($atts['sec']))?esc_attr($atts['sec']):"0";  //Redirect after how many seconds
		
		$textstatus = (isset($atts['hide_text']) && !empty($atts['hide_text']))?esc_attr($atts['hide_text']):"no";  //Show or Hide Text

		if(!empty($myURL))

	  {

	?>

			<meta http-equiv="refresh" content="<?php echo $mySEC; ?>; url=<?php echo $myURL; ?>">
			
			<?php
				if($textstatus == 'no'){  //Hide text if enable to hide
					printf(
						  __( 
							'Please wait while you are redirected ... or <a href="%s">click here</a> if you do not want to wait.', 
							'piredirect' 
						  ),
						  $myURL
					);
				}
			?>

	<?php

		}

		return ob_get_clean();

	}

}
