<?php

/**
 * dashEE Boilerplate Widget
 *
 * Standard custom widget template.
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Widget
 * @author		Chris Monnat
 * @link		http://chrismonnat.com
 */

/**
 * Widgets can now be packaged in their own folders within a modules "widgets"
 * directory. This will come in handy if you wish to package models or views 
 * with your widget. Use the widget name without the preceeding wgt as the naming
 * convention. Then create "models" and "views" directories as needed.
 */

class Wgt_boilerplate
{
	// widget name and description can be defined here or in the module language file
	public $widget_title		= 'Widget Boilerplate';
	public $widget_description	= 'Code template for developing custom widgets.';

	public $title;		// title displayed at top of widget
	public $settings;	// array of widget settings (required for dynamic widgets only)
	public $wclass;		// class name for additional styling capabilities
	
	private $EE;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{	
		$this->title  	= 'Displayed Title';
		$this->wclass 	= 'eedefault';	
		
		// define default widget settings if applicable
		$this->settings = array();
	
		$this->EE 		=& get_instance();
	}
		
	/**
	 * Permissions Function
	 *
	 * Defines permissions needed for user to be able to add widget.
	 *
	 * @access 		public
	 * @return 		bool
	 */
	public function permissions()
	{
		// add any additional custom permission checking here and 
		// return FALSE if user doesn't have permission
	
		return TRUE;
	}

	/**
	 * Index Function
	 *
	 * @access 		public
	 * @return 		string
	 */
	public function index($settings = NULL)
	{
		return 'Widget content.';
	}
	
	/**
	 * Settings Form Function
	 *
	 * HTML for widget settings form.
	 *
	 * @access		public
	 * @param		object
	 * @return 		string
	 */
	public function settings_form($settings)
	{
		return form_open('', array('class' => 'dashForm')).'
			
			<p><label for=""></label>
			<input type="text" name="" value="'.$settings->value.'" /></p>
			
			<p><input type="submit" value="Save" /></p>
			
			'.form_close();
	}

	/**
	 * Widget Add Function
	 *
	 * Run everytime members add widget to their dashboard.
	 *
	 * @access 		public
	 * @return 		void
	 */
	public function widget_add()
	{
		// good place to put code that executes every time a 
		// user adds this widget to their dashboard
	}

	/**
	 * Widget Installer Function
	 *
	 * Is run everytime members add widget AND is the first instance of widget.
	 *
	 * @access 		public
	 * @return 		void
	 */
	public function widget_install()
	{
		// good place to put any DB work necessary for widget
		// to function

		$this->EE->load->dbforge();
	}

	/**
	 * Widget Remove Function
	 *
	 * Is run everytime members remove widget from their dashboard.
	 *
	 * @access 		public
	 * @param		obj 		$settings 		Object containing member widget settings.
	 * @return 		void
	 */
	public function widget_remove($settings)
	{
		// good place to put code that executes every time a
		// user removes this widget from their dashboard
	}

	/**
	 * Widget Uninstaller Function
	 *
	 * Is run everytime members remove widget AND it's the last
	 * instance of that widget across all dashboards.
	 *
	 * @access 		public
	 * @return 		void
	 */
	public function widget_uninstall()
	{
		// good place to put any DB work necessary to clean-up
		// widget tables or files because all instances have 
		// been removed from user dashboards
	}
}
/* End of file wgt.biolerplate.php */
/* Location: /system/expressionengine/third_party/dashee/widgets/wgt.biolerplate.php */