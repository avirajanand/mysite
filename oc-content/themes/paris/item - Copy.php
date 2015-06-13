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

    osc_enqueue_script('fancybox');
    osc_enqueue_style('fancybox', osc_assets_url('js/fancybox/jquery.fancybox.css'));
    osc_enqueue_script('jquery-validate');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>

       
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
    </head>
    <body class="item-page">
        <?php osc_current_web_theme_path('header.php'); ?>
        <?php osc_current_web_theme_path(''.osc_get_preference('single-vera', 'paris').'.php') ; ?>
		<div id="sidebar">
                <?php if( osc_images_enabled_at_items() ) { ?>
                    <?php if( osc_count_item_resources() > 0 ) { ?>
			<span class='st_sharethis_large' st_image="<?php echo osc_resource_url(); ?>" displayText='ShareThis'></span>
			<span class='st_facebook_large' st_title="<?php echo osc_item_title() . ' ' . osc_item_city(); ?> | http://lakeshoredeals.com/index.php?page=item&id=<?php echo osc_item_id() ; ?>"  st_image="<?php echo osc_resource_url(); ?>" displayText='Facebook'></span>
			<span class='st_twitter_large' st_title="Lakeshoredeals.com | <?php echo osc_item_title() . ' ' . osc_item_city(); ?>" st_image="<?php echo osc_resource_url(); ?>" displayText='Tweet'></span>
			<span class='st_googleplus_large' st_image="<?php echo osc_resource_url(); ?>" displayText='Google +'></span>
			<span class='st_myspace_large' st_image="<?php echo osc_resource_url(); ?>" displayText='MySpace'></span>
			<span class='st_pinterest_large' st_image="<?php echo osc_resource_url(); ?>" displayText='Pinterest'></span>
                    <div id="photos">
                        <?php for ( $i = 0; osc_has_item_resources() ; $i++ ) { ?>
                        <a href="<?php echo osc_resource_url(); ?>" rel="image_group" title="<?php _e('Image', 'modern'); ?> <?php echo $i+1;?> / <?php echo osc_count_item_resources();?>">
                            <?php if( $i == 0 ) { ?>
                            <img src="<?php echo osc_resource_url(); ?>" width="315" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />
				
                            <?php } else { ?>
                                <img src="<?php echo osc_resource_thumbnail_url(); ?>" width="75" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />
			
                            <?php } ?>			
                        </a>
                     <?php } ?>
		
                    </div>
			                <?php } else { ?>
			<span class='st_sharethis_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='ShareThis'></span>
			<span class='st_facebook_large' st_title="<?php echo osc_item_title() . ' ' . osc_item_city(); ?> | http://lakeshoredeals.com/index.php?page=item&id=<?php echo osc_item_id() ; ?>"  st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Facebook'></span>
			<span class='st_twitter_large' st_title="Lakeshoredeals.com | <?php echo osc_item_title() . ' ' . osc_item_city(); ?>" st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Tweet'></span>
			<span class='st_googleplus_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Google +'></span>
			<span class='st_myspace_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='MySpace'></span>
			<span class='st_pinterest_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Pinterest'></span>
		 <?php } ?>
		<?php } ?>
		</div>
    </body>
</html>