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
        <meta name="robots" content="index, follow" />
        <meta content="<?php echo osc_esc_html( osc_get_preference('seo-keywords', 'paris') ); ?>" name="keywords"/>
    </head>
    <body>
<?php osc_current_web_theme_path('header.php') ; ?>

<?php osc_current_web_theme_path(''.osc_get_preference('select-us', 'paris').'.php') ; ?>
<div id="sidebar">

			<div>
				<span class='st_sharethis_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='ShareThis'></span>
				<span class='st_facebook_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Facebook'></span>
				<span class='st_twitter_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Tweet'></span>
				<span class='st_googleplus_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Google +'></span>
				<span class='st_myspace_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='MySpace'></span>
				<span class='st_pinterest_large' st_image="http://lakeshoredeals.com/oc-content/themes/modern/images/eth_logo.jpg" displayText='Pinterest'></span>
			</div>
                <div class="navigation">
        <div class="container margin-top-10">
            <?php paris_show_flash_message() ; ?>
        </div>

        <!-- content -->      
<?php osc_current_web_theme_path('premium.php') ; ?> 
<?php osc_current_web_theme_path('produk.php') ; ?>                
<?php osc_current_web_theme_path('footer.php') ; ?>
    </body>
</html>
