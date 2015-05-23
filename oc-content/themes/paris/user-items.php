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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
        <div class="container">
        <div class="veraari">
            
            <div class="col-md-3">
                <?php echo osc_private_user_menu(); ?>
            </div>
            <div class="col-md-9">
              <div class="panel panel-default row">
  <div class="panel-heading">
                <h1><?php _e('Your listings', 'paris'); ?></h1></div>
  <div class="panel-body">
                
                <?php if(osc_count_items() == 0) { ?>
                    <h3><?php _e("You don't have any listings yet", 'paris'); ?></h3>
                <?php } else { ?>
                    <?php while(osc_has_items()) { ?><div class="col-md-12 row">
<?php if (osc_images_enabled_at_items()) { ?>
                            <div class="col-md-3">
                            <?php if (osc_count_item_resources()) { ?>
                                <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>" width="100px" height="80px" title="" alt="" /></a>
                            <?php } else { ?>
                                <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" />
                            <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="col-md-9" >
                                    <h3>
                                        <a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a>
                                        <?php if(osc_item_is_active()) { echo '<span class="user-listing-active">'.__('Active', 'paris').'</span>'; } else { echo '<span class="user-listing-inactive">'.__('Inactive', 'paris').'</span>'; }; ?>
                                        <?php if(osc_item_is_premium()) { echo '<span class="user-listing-premium">'.__('Premium', 'paris').'</span>'; }; ?>
                                        <?php if(osc_item_is_spam()) { echo '<span class="user-listing-spam">'.__('Spam', 'paris').'</span>'; }; ?>
                                    </h3>
                                    <p>
                                    <?php _e('Publication date', 'paris'); ?>: <?php echo osc_format_date(osc_item_pub_date()); ?><br />
                                    <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { _e('Price', 'paris'); ?>: <?php echo osc_format_price(osc_item_price()); } ?>
                                    </p>
                                    <p class="options">
                                        <strong><a href="<?php echo osc_item_edit_url(); ?>"><?php _e('Edit', 'paris'); ?></a></strong>
                                        <span>|</span>
                                        <a class="delete" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'paris')); ?>')" href="<?php echo osc_item_delete_url();?>" ><?php _e('Delete', 'paris'); ?></a>
                                        <?php if(osc_item_is_inactive()) {?>
                                        <span>|</span>
                                        <a href="<?php echo osc_item_activate_url();?>" ><?php _e('Activate', 'paris'); ?></a>
                                        <?php } ?>
                                    </p>
                                    <br />
                            </div></div>
                    <?php } ?>
                    <br />
                    <div class="paginate" >
                    <?php for($i = 0; $i < osc_list_total_pages(); $i++) {
                        if($i == osc_list_page()) {
                            printf('<a class="searchPaginationSelected" href="%s">%d</a>', osc_user_list_items_url($i+1), ($i + 1));
                        } else {
                            printf('<a class="searchPaginationNonSelected" href="%s">%d</a>', osc_user_list_items_url($i+1), ($i + 1));
                        }
                    } ?>
                    </div>
                <?php } ?>
            </div>
        </div></div>
        </div></div>
        
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>