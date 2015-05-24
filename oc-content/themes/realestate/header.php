<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2013 Osclass
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


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php') ; ?>
        <?php
        if(osc_is_search_page()){
            if(osc_count_items() == 0) {
                osc_add_filter('meta_robots','meta_robots_custom');
                function meta_robots_custom(){
                    return 'noindex, nofollow';
                }
            }
        };?>
        <meta name="robots" content="<?php echo osc_apply_filter('meta_robots','index, follow'); ?>" />
        <meta name="googlebot" content="<?php echo osc_apply_filter('meta_robots','index, follow'); ?>" />
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
    </head>
<body>

<?php if(osc_get_preference('header-728x90', 'realestate')!='') { ?>
<!-- header ad 728x60-->
<div style="width: 728px; height: 120px; margin-left: auto;margin-right: auto;">
    <?php echo osc_get_preference('header-728x90', 'realestate'); ?>
</div>
<!-- /header ad 728x60-->
<?php } ?>

<div style="clear:both;"></div>
<?php osc_show_flash_message() ; ?>
<!-- header -->
<div class="wrapper">
<div id="header">
    <div class="logo_header"> 
    <a id="logo" href="<?php echo osc_base_url() ; ?>"><?php echo logo_header(); ?></a>
	</div>
    
	   <div class="search-container">
			<?php if(1) { #show search box?>
				<form action="<?php echo osc_base_url(true); ?>" method="get" class="main-search nocsrf" <?php /* onsubmit="javascript:return doSearch();"*/ ?>>
					<input type="hidden" name="page" value="search"/>
					<div class="category_list">
                    <?php osc_categories_select('sCategory', null, __('Select a game', 'realstate')) ; ?>
                    </div>
					<div id="search_header">
							<?php ?>
							
							<input id="search_input" class="ui-input-text" type="text" name="city" id="city" value="" 							placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'bender_theme'), 'bender')); ?>" />
						
					</div>
					
					<button id="go_button"><?php _e("Go", 'realestate');?></button>
					<div id="message-seach"></div>
				</form>
			<?php } ?>
			</div>
   
   <div id="user_menu">
        <ul>
            <?php if(osc_users_enabled()) { ?>
                <?php if( osc_is_web_user_logged_in() ) { ?>
                    <li class="first logged" style="color: rgb(255, 255, 255);">
                        <?php echo sprintf(__('Hi %s', 'realestate'), osc_logged_user_name() . '!'); ?> &bull;
                        <strong><a style="color: rgb(255, 255, 255);" href="<?php echo osc_user_dashboard_url() ; ?>"><?php _e('My account', 'realestate') ; ?></a></strong> &bull;
                        <a style="color: rgb(255, 255, 255);" href="<?php echo osc_user_logout_url() ; ?>"><?php _e('Logout', 'realestate') ; ?></a>
                    </li>
                <?php } else { ?>
                    <li class="first" style="color: rgb(255, 255, 255);">
					<?php fbc_button(); ?>
                        <a id="login_open" style="color: rgb(255, 255, 255);" href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'realestate') ; ?></a>
                        <?php if(osc_user_registration_enabled()) { ?>
                            &bull; <a href="<?php echo osc_register_account_url() ; ?>" style="color: rgb(255, 255, 255);"><?php _e('Register for a free account', 'realestate'); ?></a>
                        <?php }; ?>
                    </li>
                <?php } ?>
            <?php } ?>
            <?php if ( osc_count_web_enabled_locales() > 1) { ?>
                <?php osc_goto_first_locale() ; ?>
                <li class="last with_sub">
                    <strong><?php _e("Language", 'realestate') ; ?></strong>
                    <ul>
                        <?php $i = 0 ;  ?>
                        <?php while ( osc_has_web_enabled_locales() ) { ?>
                            <li <?php if( $i == 0 ) { echo "class='first'" ; } ?>><a id="<?php echo osc_locale_code() ; ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ) ; ?>"><?php echo osc_locale_name() ; ?></a></li>
                            <?php $i++ ; ?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
			
            
        </ul>
        
        
		<!--<div class="locality-menu ui-actionbox" >
			<?php if(osc_count_list_regions() > 0 ) { ?>
			<div class="box location">
				<span class="action-title"><?php _e('Find all venues in:', 'realestate') ; ?></span>				
				<?php while(osc_has_list_regions() ) { ?>
					<a href="<?php echo osc_list_region_url(); ?>"><?php echo osc_list_region_name() ; ?></a>				
				<?php } ?>
				
			</div>
			<?php } ?>
		</div>-->
    </div>
   <!-- <div id="header-shadow"></div>-->
</div>
</div>
	<div class="header_footer">
		    </div>
	
<!-- /header -->
<?php if( function_exists('breadcrumbs') ) { ?>
    <?php if( !osc_is_home_page() ) { ?>
    <div class="breadcrumb">
        <?php breadcrumbs('&raquo;'); ?>
    </div>
    <?php } ?>
<?php } ?>
