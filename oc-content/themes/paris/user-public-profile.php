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

    $address = '';
    if(osc_user_address()!='') {
        if(osc_user_city_area()!='') {
            $address = osc_user_address().", ".osc_user_city_area();
        } else {
            $address = osc_user_address();
        }
    } else {
        $address = osc_user_city_area();
    }
    $location_array = array();
    if(trim(osc_user_city()." ".osc_user_zip())!='') {
        $location_array[] = trim(osc_user_city()." ".osc_user_zip());
    }
    if(osc_user_region()!='') {
        $location_array[] = osc_user_region();
    }
    if(osc_user_country()!='') {
        $location_array[] = osc_user_country();
    }
    $location = implode(", ", $location_array);
    unset($location_array);

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
        <div class="container">
        <div class="veraari">
            
            <div class="col-md-3">
            <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h2><?php echo sprintf(__('%s\'s profile', 'paris'), osc_user_name()); ?></h2></div>
  <div class="panel-body">
                
                    <ul id="user_data">
                        <li><b><?php _e('Full name', 'paris'); ?></b>: <?php echo osc_user_name(); ?></li>
                         <li><b><?php _e('Phone', 'paris'); ?></b>: <?php echo osc_user_phone(); ?></li>
                        <li><b><?php _e('Address', 'paris'); ?></b>: <?php echo $address; ?></li>
                        <li><b><?php _e('Location', 'paris'); ?></b>: <?php echo $location; ?></li>
                        <li><b><?php _e('Website', 'paris'); ?></b>: <?php echo osc_user_website(); ?></li>
                        <li><b><?php _e('User Description', 'paris'); ?></b>: <?php echo osc_user_info(); ?></li>
                    </ul>
            </div></div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h2><?php _e("Contact seller", 'paris'); ?></h2></div>
  <div class="panel-body">
                
                    

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <?php _e("Contact", 'paris'); ?> <?php echo osc_user_name(); ?>
</button>

<!-- Modal -->
<?php if(osc_logged_user_id()!=  osc_user_id()) { ?>
                <?php     if(osc_reg_user_can_contact() && osc_is_web_user_logged_in() || !osc_reg_user_can_contact() ) { ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php _e("Contact publisher", 'paris'); ?></h4>
      </div>
      <div class="modal-body">
       <ul id="error_list"></ul>
                    <?php ContactForm::js_validation(); ?>
                    <form action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact_form">
                        <input type="hidden" name="action" value="contact_post" />
                        <input type="hidden" name="page" value="user" />
                        <input type="hidden" name="id" value="<?php echo osc_user_id();?>" />
                        <?php osc_prepare_user_info(); ?>
                        <fieldset>
                            <label for="yourName"><?php _e('Your name', 'paris'); ?>:</label> <?php ContactForm::your_name(); ?>
                            <label for="yourEmail"><?php _e('Your e-mail address', 'paris'); ?>:</label> <?php ContactForm::your_email(); ?>
                            <label for="phoneNumber"><?php _e('Phone number', 'paris'); ?> (<?php _e('optional', 'paris'); ?>):</label> <?php ContactForm::your_phone_number(); ?>
                            <label for="message"><?php _e('Message', 'paris'); ?>:</label> <?php ContactForm::your_message(); ?>
                            <?php if( osc_recaptcha_public_key() ) { ?>
                            <script type="text/javascript">
                                var RecaptchaOptions = {
                                    theme : 'custom',
                                    custom_theme_widget: 'recaptcha_widget'
                                };
                            </script>
                            <style type="text/css"> div#recaptcha_widget, div#recaptcha_image > img { width:280px; } </style>
                            <div id="recaptcha_widget">
                                <div id="recaptcha_image"><img /></div>
                                <span class="recaptcha_only_if_image"><?php _e('Enter the words above','paris'); ?>:</span>
                                <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
                                <div><a href="javascript:Recaptcha.showhelp()"><?php _e('Help', 'paris'); ?></a></div>
                            </div>
                            <?php } ?>
                            <?php osc_show_recaptcha(); ?>
                            
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"><?php _e('Send', 'paris'); ?></button>
      </div>

</fieldset>
                    </form>
    </div>
  </div>
</div>

<?php     } ?>
                <?php } ?>





            </div></div>


            </div>
            <div class="col-md-9">
              <div class="panel panel-default row">
  <div class="panel-heading">
                <h1><?php _e('Latest listings', 'paris'); ?></h1></div>
  <div class="panel-body">
                    
               
                    <table border="0" cellspacing="0">
                        <tbody>
                            
                            <?php while(osc_has_items()) { ?>
                                <div class="col-md-12 bowo" >
                                    <?php if( osc_images_enabled_at_items() ) { ?>
                                     <div class="col-md-3 hanik">
                                         <?php if(osc_count_item_resources()) { ?>
                                            <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a>
                                        <?php } else { ?>
                                            <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" />
                                        <?php } ?>
                                     </div>
                                     <?php } ?>
                                     <div class="col-md-9">
                                         <h3>
                                             <a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a>
                                         </h3>
                                         <p>
                                             <strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); ?> - <?php } echo osc_item_city(); ?> (<?php echo osc_item_region(); ?>) - <?php echo osc_format_date(osc_item_pub_date()); ?></strong>
                                         </p>
                                         <p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p>
                                     </div>
                                 </div>
                                <?php } ?>
                        </tbody>
                    </table>
                    <?php if(osc_search_total_pages() > osc_max_results_per_page_at_search() ) { ?>
                    <p class="see_more_link"><a href="<?php echo osc_base_url(true).'&page=search&sUser[]='.osc_user_id(); ?>"><strong>See all offers »</strong></a></p>
                    <?php } ?>
                </div>
            </div>
            
        </div> </div>
        </div> </div>
        
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>