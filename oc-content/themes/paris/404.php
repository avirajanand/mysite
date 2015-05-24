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

    osc_enqueue_script('jquery-validate');
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
        <div id="content" class="container error">
            <div class="col-md-12">
<style>.flashmessage-404 h1{font-size:20px;margin:15px;font-weight:bold;
}</style>
<div style="text-align:center" class="flashmessage-404">
    <h1><?php _e("Sorry but I can't find the page you're looking for", 'paris') ; ?></h1>

    <p><?php _e("Let us help you, we have got a few tips for you to find it.", 'paris') ; ?></p>
    <ul>
        <li>
            <?php _e("<strong>Search</strong> for it:", 'paris') ; ?>
            <form action="<?php echo osc_base_url(true) ; ?>" method="get" class="search">
                <input type="hidden" name="page" value="search" />
                <fieldset class="main">
                    <input type="text" name="sPattern"  id="query" value="" />
                    <button type="submit" class="ui-button ui-button-middle"><?php _e('Search', 'paris') ; ?></button>
                </fieldset>
            </form>
        </li>
        <li><?php _e("<strong>Look</strong> for it in the most popular categories.", 'paris') ; ?>
            <div class="categories">
                <?php osc_goto_first_category() ; ?>
                <?php while ( osc_has_categories() ) { ?>
                        <h2><b><a class="category <?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></b> <span>(<?php echo osc_category_total_items() ; ?>)</h2>
                        <?php if ( osc_count_subcategories() > 0 ) { ?>
                            <?php while ( osc_has_subcategories() ) { ?>
                                <?php if( osc_category_total_items() > 0 ) { ?>
                                    <h3><a class="category <?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a> <span>(<?php echo osc_category_total_items() ; ?>)</h3>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                <?php } ?>
           </div>
           <div class="clear"></div>
        </li>
    </ul>
</div>

</div>
        </div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>