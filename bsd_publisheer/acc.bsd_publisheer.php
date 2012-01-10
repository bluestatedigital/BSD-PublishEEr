<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------
 
/**
 * BSD Content Type Search Accessory
 *
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Accessory
 * @author      Blue State Digital
 * @link        http://www.bluestatedigital.com
 */
 
class Bsd_publisheer_acc {
    
    public $name            = 'BSD PublishEEr';
    public $id              = 'bsd_publisheer';
    public $version         = '1.0';
    public $description     = 'Adds a searchable publish menu to the Control Panel';
    public $sections        = array();
    
    /**
     * Set Sections
     */
    public function set_sections()
    {
        $this->EE =& get_instance();
        $this->sections[] = "<script>$('#accessoryTabs a.bsd_publisheer').parent().remove();</script>";
        $this->EE->cp->load_package_js('list.min');
        $styles = '<style type="text/css"> 
        #navigationTabs #channel-list ul.listjs { display: block; overflow: auto; margin: 8px 0 0 0; position: relative; background: transparent; -webkit-border-top-left-radius: 0 !important; -webkit-border-top-right-radius: 0 !important; -moz-border-top-left-radius: 0 !important; -border-top-right-radius: 0 !important; -webkit-box-shadow: 0; -moz-box-shadow: 0; box-shadow: 0; } 
        #navigationTabs #listjs-search-label { display: block; margin: 0 auto; width: 80%; font-weight: bold; font-size: 90%; } 
        #listjs-search { width: 98%; } #navigationTabs #listjs-search-li { background: transparent; color: inherit; }
        #navigationTabs #publish-menu { padding-bottom: 0; -webkit-border-bottom-left-radius: 0 !important; -webkit-border-bottom-right-radius: 0 !important; -moz-border-bottom-left-radius: 0 !important; -border-bottom-right-radius: 0 !important; border-bottom-left-radius: 0 !important; border-bottom-right-radius: 0 !important; }
        #navigationTabs #channel-list.hover { background: transparent !important; }
        #channel-list .listjs { -webkit-border-top-left-radius: 0 !important; -webkit-border-top-right-radius: 0 !important; -moz-border-top-left-radius: 0 !important; -border-top-right-radius: 0 !important; border-top-left-radius: 0 !important; border-top-right-radius: 0 !important; }
        .clearfix:before, .clearfix:after {  content: "."; display: block; height: 0; visibility: hidden; } 
        .clearfix:after { clear: both; }
        .clearfix { zoom: 1; }
        </style>';
        $this->EE->cp->add_to_head($styles);
        $this->EE->cp->load_package_js('fix-menu');
    }
    
    // ----------------------------------------------------------------
    
}
 
/* End of file acc.bsd_content_type_search.php */
/* Location: /system/expressionengine/third_party/bsd_content_type_search/acc.bsd_content_type_search.php */