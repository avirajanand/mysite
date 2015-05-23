<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2015 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    define('PARIS_THEME_VERSION', '1.9.5');

    osc_enqueue_script('php-date');

    if( !OC_ADMIN ) {
        if( !function_exists('add_close_button_action') ) {
            function add_close_button_action(){
                echo '<script type="text/javascript">';
                    echo '$(".flashmessage .ico-close").click(function(){';
                        echo '$(this).parent().hide();';
                    echo '});';
                echo '</script>';
            }
            osc_add_hook('footer', 'add_close_button_action');
        }
    }

    function theme_paris_actions_admin() {
        if( Params::getParam('file') == 'oc-content/themes/paris/admin/settings.php' ) {
            if( Params::getParam('donation') == 'successful' ) {
                osc_set_preference('donation', '1', 'paris');
                osc_reset_preferences();
            }
        }

        switch( Params::getParam('action_specific') ) {
            case('settings'):
                $footerLink  = Params::getParam('footer_link');
                $defaultLogo = Params::getParam('default_logo');
osc_set_preference('keyword_placeholder', Params::getParam('keyword_placeholder'), 'paris');
osc_set_preference('footer_link', ($footerLink ? '1' : '0'), 'paris');
osc_set_preference('default_logo', ($defaultLogo ? '1' : '0'), 'paris');
osc_set_preference('header-vera',         trim(Params::getParam('header-vera', false, false, false)),                  'paris');
osc_set_preference('footer-vera',         trim(Params::getParam('footer-vera', false, false, false)),                  'paris');
osc_set_preference('single-vera',         trim(Params::getParam('single-vera', false, false, false)),                  'paris');
osc_set_preference('select-us',         trim(Params::getParam('select-us', false, false, false)),                  'paris');
osc_set_preference('company-us',         trim(Params::getParam('company-us', false, false, false)),                  'paris');
osc_set_preference('email-us',         trim(Params::getParam('email-us', false, false, false)),                  'paris');
osc_set_preference('phone-us',         trim(Params::getParam('phone-us', false, false, false)),                  'paris');
osc_set_preference('about-us',         trim(Params::getParam('about-us', false, false, false)),                  'paris');
osc_set_preference('about1-us',         trim(Params::getParam('about1-us', false, false, false)),                  'paris');
osc_set_preference('address-us',         trim(Params::getParam('address-us', false, false, false)),                  'paris');
osc_set_preference('copyright-us',         trim(Params::getParam('copyright-us', false, false, false)),                  'paris');
osc_set_preference('judul-us',         trim(Params::getParam('judul-us', false, false, false)),                  'paris');
osc_set_preference('judul1-us',         trim(Params::getParam('judul1-us', false, false, false)),                  'paris');
osc_set_preference('judul2-us',         trim(Params::getParam('judul2-us', false, false, false)),                  'paris');
osc_set_preference('widget-us',         trim(Params::getParam('widget-us', false, false, false)),                  'paris');
osc_set_preference('memo-us',         trim(Params::getParam('memo-us', false, false, false)),                  'paris');
osc_set_preference('love-us',         trim(Params::getParam('love-us', false, false, false)),                  'paris');
osc_set_preference('facebook-us',         trim(Params::getParam('facebook-us', false, false, false)),                  'paris');
osc_set_preference('twitter-us',         trim(Params::getParam('twitter-us', false, false, false)),                  'paris');
osc_set_preference('gplus-us',         trim(Params::getParam('gplus-us', false, false, false)),                  'paris');
osc_set_preference('linkedin-us',         trim(Params::getParam('linkedin-us', false, false, false)),                  'paris');
osc_set_preference('ari-us',         trim(Params::getParam('ari-us', false, false, false)),                  'paris');
osc_set_preference('vera-us',         trim(Params::getParam('vera-us', false, false, false)),                  'paris');
osc_set_preference('slider1-us',         trim(Params::getParam('slider1-us', false, false, false)),                  'paris');
osc_set_preference('slider12-us',         trim(Params::getParam('slider12-us', false, false, false)),                  'paris');
osc_set_preference('slider12-link',         trim(Params::getParam('slider12-link', false, false, false)),                  'paris');
osc_set_preference('slider2-us',         trim(Params::getParam('slider2-us', false, false, false)),                  'paris');
osc_set_preference('slider22-us',         trim(Params::getParam('slider22-us', false, false, false)),                  'paris');
osc_set_preference('slider22-link',         trim(Params::getParam('slider22-link', false, false, false)),                  'paris');
osc_set_preference('slider3-us',         trim(Params::getParam('slider3-us', false, false, false)),                  'paris');
osc_set_preference('slider32-us',         trim(Params::getParam('slider32-us', false, false, false)),                  'paris');
osc_set_preference('slider32-link',         trim(Params::getParam('slider32-link', false, false, false)),                  'paris');
osc_set_preference('fb-us',         trim(Params::getParam('fb-us', false, false, false)),                  'paris');
osc_set_preference('wl-us',         trim(Params::getParam('wl-us', false, false, false)),                  'paris');
osc_set_preference('fb-code',         trim(Params::getParam('fb-code', false, false, false)),                  'paris');
osc_set_preference('back-url',         trim(Params::getParam('back-url', false, false, false)),                  'paris');
osc_set_preference('back-rep',         trim(Params::getParam('back-rep', false, false, false)),                  'paris');
osc_set_preference('back-pos',         trim(Params::getParam('back-pos', false, false, false)),                  'paris');
osc_set_preference('back-mode',         trim(Params::getParam('back-mode', false, false, false)),                  'paris');
osc_set_preference('back-color',         trim(Params::getParam('back-color', false, false, false)),                  'paris');
osc_set_preference('defaultShowAs@all', Params::getParam('defaultShowAs@all'), 'paris_theme');
osc_set_preference('defaultShowAs@search', Params::getParam('defaultShowAs@all'));
osc_set_preference('seo-sitename',         trim(Params::getParam('seo-sitename', false, false, false)),                  'paris');
osc_set_preference('seo-description',         trim(Params::getParam('seo-description', false, false, false)),                  'paris');
osc_set_preference('seo-keywords',         trim(Params::getParam('seo-keywords', false, false, false)),                  'paris');
osc_set_preference('seo-google',         trim(Params::getParam('seo-google', false, false, false)),                  'paris');
osc_set_preference('seo-bing',         trim(Params::getParam('seo-bing', false, false, false)),                  'paris');
osc_set_preference('seo-alexa',         trim(Params::getParam('seo-alexa', false, false, false)),                  'paris');
osc_set_preference('seo-geo',         trim(Params::getParam('seo-geo', false, false, false)),                  'paris');
osc_set_preference('seo-country',         trim(Params::getParam('seo-country', false, false, false)),                  'paris');
osc_set_preference('seo-author',         trim(Params::getParam('seo-author', false, false, false)),                  'paris');
osc_set_preference('seo-language',         trim(Params::getParam('seo-language', false, false, false)),                  'paris');
osc_set_preference('seo-copyright',         trim(Params::getParam('seo-copyright', false, false, false)),                  'paris');
osc_set_preference('seo-subject',         trim(Params::getParam('seo-subject', false, false, false)),                  'paris');
osc_set_preference('popular-dis',         trim(Params::getParam('popular-dis', false, false, false)),                  'paris');
osc_set_preference('theme-color',         trim(Params::getParam('theme-color', false, false, false)),                  'paris');
osc_set_preference('product-dis',         trim(Params::getParam('product-dis', false, false, false)),                  'paris');
osc_set_preference('premium-dis',         trim(Params::getParam('premium-dis', false, false, false)),                  'paris');
osc_set_preference('tos-me',         trim(Params::getParam('tos-me', false, false, false)),                  'paris');
osc_set_preference('header-728x90',         trim(Params::getParam('header-728x90', false, false, false)),                  'paris');
osc_set_preference('homepage-728x90',       trim(Params::getParam('homepage-728x90', false, false, false)),                'paris');
osc_set_preference('sidebar-160x600',       trim(Params::getParam('sidebar-160x600', false, false, false)),                'paris');
osc_set_preference('sidebar-300x250',       trim(Params::getParam('sidebar-300x250', false, false, false)),                'paris');
osc_set_preference('search-results-top-728x90',     trim(Params::getParam('search-results-top-728x90', false, false, false)),          'paris');
osc_set_preference('popularads_num_ads',  trim(Params::getParam('popularads_num_ads', false, false, false)),       'paris');
osc_set_preference('premiumads_num_ads',  trim(Params::getParam('premiumads_num_ads', false, false, false)),       'paris');
                osc_add_flash_ok_message(__('Theme settings updated correctly', 'paris'), 'admin');
                header('Location: ' . osc_admin_render_theme_url('oc-content/themes/paris/admin/settings.php')); exit;
            break;
            
       
        }
    }
if( !function_exists('paris_show_as') ){
        function paris_show_as(){

            $p_sShowAs    = Params::getParam('sShowAs');
            $aValidShowAsValues = array('list', 'gallery');
            if (!in_array($p_sShowAs, $aValidShowAsValues)) {
                $p_sShowAs = paris_default_show_as();
            }

            return $p_sShowAs;
        }
    }
    if( !function_exists('paris_default_show_as') ){
        function paris_default_show_as(){
            return getPreference('defaultShowAs@all','paris_theme');
        }
    }

 if( !function_exists('paris_search_number') ) {
        /**
          *
          * @return array
          */
        function paris_search_number() {
            $search_from = ((osc_search_page() * osc_default_results_per_page_at_search()) + 1);
            $search_to   = ((osc_search_page() + 1) * osc_default_results_per_page_at_search());
            if( $search_to > osc_search_total_items() ) {
                $search_to = osc_search_total_items();
            }

            return array(
                'from' => $search_from,
                'to'   => $search_to,
                'of'   => osc_search_total_items()
            );
        }
    }

if( !function_exists('paris_item_title') ) {
        function paris_item_title() {
            $title = osc_item_title();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('title') != "" ) {
                    $title_ = Session::newInstance()->_getForm('title');
                    if( @$title_[$locale['pk_c_code']] != "" ){
                        $title = $title_[$locale['pk_c_code']];
                    }
                }
            }
            return $title;
        }
    }
    if( !function_exists('paris_item_description') ) {
        function paris_item_description() {
            $description = osc_item_description();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('description') != "" ) {
                    $description_ = Session::newInstance()->_getForm('description');
                    if( @$description_[$locale['pk_c_code']] != "" ){
                        $description = $description_[$locale['pk_c_code']];
                    }
                }
            }
            return $description;
        }
    }



    if( !function_exists('logo_header') ) {
        function logo_header() {
            $html = '<img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/logo.jpg') . '" />';
            if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ) {
                return $html;
            } else if( osc_get_preference('default_logo', 'paris') && (file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/default-logo.jpg")) ) {
                return '<img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/default-logo.jpg') . '" />';
            } else {
                return osc_page_title();
            }
        }
    }

    // install update options
    if( !function_exists('paris_theme_install') ) {
        function paris_theme_install() {
            osc_set_preference('keyword_placeholder', __('ie. PHP Programmer', 'paris'), 'paris');
            osc_set_preference('version', '1.9.5', 'paris');
            osc_set_preference('footer_link', true, 'paris');
            osc_set_preference('donation', '0', 'paris');
            osc_set_preference('default_logo', '1', 'paris');
            osc_set_preference('select-us', 'home3', 'paris');
            osc_set_preference('email-us', 'yes', 'paris');
            osc_set_preference('judul-us', 'widget title 3', 'paris');
            osc_set_preference('judul1-us', 'widget title 1', 'paris');
            osc_set_preference('judul2-us', 'widget title 2', 'paris');
            osc_set_preference('about-us', 'insert your widget', 'paris');
            osc_set_preference('about1-us', 'insert your widget', 'paris');
            osc_set_preference('widget-us', 'insert your widget', 'paris');
            osc_set_preference('copyright-us', 'Copyright 2015 Osclass.me', 'paris');
            osc_set_preference('product-dis', 'yes', 'paris');
            osc_set_preference('fb-us', 'none', 'paris');
            osc_set_preference('ari-us', 'container', 'paris');
            osc_set_preference('wl-us', 'none', 'paris');
            osc_set_preference('premium-dis', 'none', 'paris');
            osc_set_preference('popular-dis', 'yes', 'paris');
            osc_set_preference('love-us', 'vera', 'paris');
            osc_set_preference('phone-us', 'none', 'paris');
            osc_set_preference('header-vera', 'header1', 'paris');
            osc_set_preference('footer-vera', 'footer2', 'paris');
            osc_set_preference('single-vera', 'single1', 'paris');
            osc_set_preference('popularads_num_ads', '8', 'paris');
            osc_set_preference('premiumads_num_ads', '8', 'paris');
            osc_reset_preferences();
        }
    }


if( !function_exists('logo_footer') ) {
        function logo_footer() {

             $html = '<a id="logo-footer" href="' . osc_base_url() . '"><img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/logo-footer.jpg') . '" /></a>';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ) {
                return $html;
             } else {
                return '<a id="logo-footer" class="logo-footer-text" href="' . osc_base_url() . '">' . osc_page_title() . '</a>';

            }
        }
    }

if( !function_exists('logo_slider') ) {
        function logo_slider() {

             $html = '<img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/slider.jpg') . '" />';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" ) ) {
                return $html;
             } else {
                return '<a id="slider" class="logo-footer-text" href="' . osc_base_url() . '">' . osc_page_title() . '</a>';

            }
        }
    }

if( !function_exists('logo_slider_1') ) {
        function logo_slider_1() {

             $html = '<img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/slider-1.jpg') . '" />';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" ) ) {
                return $html;
             } else {
                return '<a id="slider" class="logo-footer-text" href="' . osc_base_url() . '">' . osc_page_title() . '</a>';

            }
        }
    }

if( !function_exists('logo_slider_2') ) {
        function logo_slider_2() {

             $html = '<img border="0" alt="' . osc_page_title() . '" src="' . osc_current_web_theme_url('images/slider-2.jpg') . '" />';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" ) ) {
                return $html;
             } else {
                return '<a id="slider" class="logo-footer-text" href="' . osc_base_url() . '">' . osc_page_title() . '</a>';

            }
        }
    }

 function chosen_select_standard() {
        View::newInstance()->_exportVariableToView('categories', Category::newInstance()->toTree() ) ;

        if( osc_count_categories() > 0 ) {
            echo '<select name="sCategory" class="form-control anita" data-placeholder="' . __('Select any sports', 'paris') . '" class="form-control">' ;
            echo '<option>' . __('All Sports', 'paris') . '</option>' ;
            while( osc_has_categories() ) {
                echo '<option value="' . osc_category_id() . '">' . osc_category_name() . '</option>' ;
                if( osc_count_subcategories() > 0 ) {
                    while( osc_has_subcategories() ) {
                        echo '<option class="level-1" value="' . osc_category_name() . '">' . osc_category_name() . '</option>' ;
                    }
                }
            }
            echo '</select>' ;
        }

        View::newInstance()->_erase('categories') ;
    }

    function chosen_select_optgroup() {
        View::newInstance()->_exportVariableToView('categories', Category::newInstance()->toTree() ) ;

        if( osc_count_categories() > 0 ) {
            echo '<select name="sCategory" id="paris_sCategory_chosen" data-placeholder="' . __('Select a category', 'paris') . '" class="form-control ">' ;
            echo '<option>' . __('Select a category', 'paris') . '</option>' ;
            while( osc_has_categories() ) {
                echo '<optgroup label="' . osc_category_name() . '">' ;
                if( osc_count_subcategories() > 0 ) {
                    while( osc_has_subcategories() ) {
                        echo '<option value="' . osc_category_id() . '">' . osc_category_name() . '</option>' ;
                    }
                }
                echo '</optgroup>' ;
            }
            echo '</select>' ;
        }

        View::newInstance()->_erase('categories') ;
    }

    function chosen_region_select() {
        View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=', 'region_name ASC') ) ;

        if( osc_count_list_regions() > 0 ) {
            echo '<select name="sRegion" id="paris_sCategory_chosen" data-placeholder="' . __('Select a region...', 'paris') . '" class="form-control" >' ;
            echo '<option>' . __('Select a region', 'paris') . '</option>' ;
            while( osc_has_list_regions() ) {
                echo '<option value="' . osc_list_region_name() . '">' . osc_list_region_name() . '</option>' ;
            }
            echo '</select>' ;
        }

        View::newInstance()->_erase('list_regions') ;
    }

    if( !function_exists('item_detail_location') ) {
        /*
         * @return array the list of location: starting with the address and finishing with the country
         */
        function item_detail_location() {
            $location = array() ;
            if( osc_item_address() != '' ) {
                $location[] = osc_item_address() ;
            }
            if( osc_item_city_area() != '' ) {
                $location[] = osc_item_city_area() ;
            }
            if( osc_item_city() != '' ) {
                $location[] = osc_item_city() ;
            }
            if( osc_item_region() != '' ) {
                $location[] = osc_item_region() ;
            }
            if( osc_item_country() != '' ) {
                $location[] = osc_item_country() ;
            }

            return $location ;
        }
    }

if( !function_exists('paris_show_flash_message') ) {
        function paris_show_flash_message() {
            $message = Session::newInstance()->_getMessage('pubMessages') ;

            if (isset($message['msg']) && $message['msg'] != '') {
                if( $message['type'] == 'ok' ) $message['type'] = 'success' ;
                echo '<div class="alert-message ' . $message['type'] . '">' ;
                echo '<a class="close" href="#">×</a>';
                echo '<p>' . $message['msg'] . '</p>';
                echo '</div>' ;

                Session::newInstance()->_dropMessage('pubMessages') ;
            }
        }
    }


if (paris_is_fineuploader()) {
    if (!OC_ADMIN) {
        osc_enqueue_style('fine-uploader-css', osc_current_web_theme_styles_url('fineuploader.css'));
    }
    osc_enqueue_script('jquery-fineuploader');
}

function paris_is_fineuploader() {
    return Scripts::newInstance()->registered['jquery-fineuploader'] && method_exists('ItemForm', 'ajax_photos');
}




    if(!function_exists('check_install_paris_theme')) {
        function check_install_paris_theme() {
            $current_version = osc_get_preference('version', 'paris');
            //check if current version is installed or need an update
            if( !$current_version ) {
                paris_theme_install();
            }
        }
    }

    function paris_delete() {
        Preference::newInstance()->delete(array('s_section' => 'paris'));
    }

    osc_add_hook('init', 'paris_redirect_user_dashboard', 2);
    osc_add_hook('init_admin', 'theme_paris_actions_admin');
    osc_add_hook('theme_delete_paris', 'paris_delete');
    osc_admin_menu_appearance(__('Paris logo', 'paris'), osc_admin_render_theme_url('oc-content/themes/paris/admin/logo.php'), 'header_paris');
    osc_admin_menu_appearance(__('Paris Slider Images', 'paris'), osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php'), 'slider_paris');
    osc_admin_menu_appearance(__('Paris Theme Settings', 'paris'), osc_admin_render_theme_url('oc-content/themes/paris/admin/settings.php'), 'settings_paris');
/**

TRIGGER FUNCTIONS

*/

    check_install_paris_theme();

    /* ads  SEARCH */
    function search_ads_listing_top_fn1() {
        if(osc_get_preference('search-results-top-728x90', 'paris')!='') {
            echo '<div class="clear"></div>' . PHP_EOL;
            echo '<div class="ads_728">' . PHP_EOL;
            echo osc_get_preference('search-results-top-728x90', 'paris');
            echo '</div>' . PHP_EOL;
        }
    }
    osc_add_hook('search_ads_listing_top1', 'search_ads_listing_top_fn1');

    function search_ads_listing_medium_fn1() {
        if(osc_get_preference('search-results-middle-728x90', 'paris')!='') {
            echo '<div class="clear"></div>' . PHP_EOL;
            echo '<div class="ads_728">' . PHP_EOL;
            echo osc_get_preference('search-results-middle-728x90', 'paris');
            echo '</div>' . PHP_EOL;
        }
    }
    osc_add_hook('search_ads_listing_medium1', 'search_ads_listing_medium_fn1');

	if( !function_exists('get_gravatar') ) {
        function get_gravatar($email = null, $size = 65) {
			$fb_user = OSCFacebook::newInstance()->getUser();
			if($fb_user != 0)
			{
				return "https://graph.facebook.com/$fb_user/picture?width=$size";
			}
            $email = md5( strtolower( trim( $email ) ) );
            $default = urlencode( osc_current_web_theme_url('images/avatar.png') );
            return "http://www.gravatar.com/avatar/$email?s=$size&d=$default";
        }
    }
	
	if( !function_exists('get_profile_image') ) {
        function get_profile_image($size = 65) {
			$fb_user = OSCFacebook::newInstance()->getUser();
			if($fb_user != 0)
			{
				return "https://graph.facebook.com/$fb_user/picture?width=$size";
			}
            return get_gravatar(osc_logged_user_email() , $size);
        }
    }
	
    /* remove theme */
    function paris_delete_theme() {
osc_remove_preference('keyword_placeholder', 'paris');
osc_remove_preference('footer_link', 'paris');
osc_remove_preference('default_logo', 'paris');
osc_remove_preference('donation', 'paris');
osc_remove_preference('header-vera', 'paris');
osc_remove_preference('footer-vera', 'paris');
osc_remove_preference('single-vera', 'paris');
osc_remove_preference('seo-sitename', 'paris');
osc_remove_preference('seo-description', 'paris');
osc_remove_preference('seo-keywords', 'paris');
osc_remove_preference('seo-google', 'paris');
osc_remove_preference('seo-bing', 'paris');
osc_remove_preference('seo-alexa', 'paris');
osc_remove_preference('seo-geo', 'paris');
osc_remove_preference('seo-country', 'paris');
osc_remove_preference('seo-author', 'paris');
osc_remove_preference('seo-language', 'paris');
osc_remove_preference('seo-copyright', 'paris');
osc_remove_preference('seo-subject', 'paris');
osc_remove_preference('select-us', 'paris'); 
osc_remove_preference('about-us', 'paris'); 
osc_remove_preference('about1-us', 'paris'); 
osc_remove_preference('company-us', 'paris'); 
osc_remove_preference('email-us', 'paris'); 
osc_remove_preference('phone-us', 'paris'); 
osc_remove_preference('address-us', 'paris'); 
osc_remove_preference('copyright-us', 'paris');
osc_remove_preference('judul-us', 'paris');
osc_remove_preference('judul1-us', 'paris');
osc_remove_preference('judul2-us', 'paris');  
osc_remove_preference('widget-us', 'paris'); 
osc_remove_preference('memo-us', 'paris'); 
osc_remove_preference('facebook-us', 'paris'); 
osc_remove_preference('twitter-us', 'paris'); 
osc_remove_preference('gplus-us', 'paris'); 
osc_remove_preference('linkedin-us', 'paris'); 
osc_remove_preference('love-us', 'paris'); 
osc_remove_preference('ari-us', 'paris'); 
osc_remove_preference('theme-color', 'paris');
osc_remove_preference('vera-us', 'paris'); 
osc_remove_preference('slider1-us', 'paris'); 
osc_remove_preference('slider12-us', 'paris'); 
osc_remove_preference('slider12-link', 'paris'); 
osc_remove_preference('slider2-us', 'paris'); 
osc_remove_preference('slider22-us', 'paris'); 
osc_remove_preference('slider22-link', 'paris'); 
osc_remove_preference('slider3-us', 'paris'); 
osc_remove_preference('slider32-us', 'paris'); 
osc_remove_preference('slider32-link', 'paris'); 
osc_remove_preference('fb-us', 'paris');
osc_remove_preference('wl-us', 'paris'); 
osc_remove_preference('fb-code', 'paris'); 
osc_remove_preference('back-url', 'paris'); 
osc_remove_preference('back-rep', 'paris'); 
osc_remove_preference('back-pos', 'paris'); 
osc_remove_preference('tos-me', 'paris');
osc_remove_preference('popular-dis', 'paris');
osc_remove_preference('product-dis', 'paris');
osc_remove_preference('premium-dis', 'paris');
osc_remove_preference('back-mode', 'paris'); 
osc_remove_preference('back-color', 'paris'); 
osc_set_preference('defaultShowAs@all', 'list', 'paris_theme');
osc_set_preference('defaultShowAs@search', 'gallery');
osc_remove_preference('header-728x90', 'paris');
osc_remove_preference('homepage-728x90', 'paris');
osc_remove_preference('sidebar-160x600', 'paris');
osc_remove_preference('sidebar-300x250', 'paris');
osc_remove_preference('search-results-top-728x90', 'paris');
osc_remove_preference('popularads_num_ads', 'paris'); 
osc_remove_preference('premiumads_num_ads', 'paris'); 
    }
osc_add_hook('admin_page_header', 'theme_paris_admin_regions_message', 10);
?>

<?php osc_remove_hook('item_detail', 'voting_item_detail'); ?>