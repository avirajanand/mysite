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
 $locales   = __get('locales');
    $user = osc_user();
    osc_enqueue_style('jquery-ui-custom', osc_current_web_theme_styles_url('jquery-ui/jquery-ui-1.8.20.custom.css'));
    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />

        <?php UserForm::location_javascript(); ?>
        <?php
        if(osc_images_enabled_at_items() && !paris_is_fineuploader()) {
            ItemForm::photos_javascript();
        }
        ?>
        <script type="text/javascript">

            $(document).ready(function(){
                $('body').on("created", '[name^="select_"]',function(evt) {
                    $(this).uniform();
                });
                $('body').on("removed", '[name^="select_"]',function(evt) {
                    $(this).parent().remove();
                });
            });


            function uniform_input_file(){
                photos_div = $('div.photos');
                $('div',photos_div).each(
                    function(){
                        if( $(this).find('div.uploader').length == 0  ){
                            divid = $(this).attr('id');
                            if(divid != 'photos'){
                                divclass = $(this).hasClass('box');
                                if( !$(this).hasClass('box') & !$(this).hasClass('uploader') & !$(this).hasClass('row')){
                                    $("div#"+$(this).attr('id')+" input:file").uniform({fileDefaultText: fileDefaultText,fileBtnText: fileBtnText});
                                }
                            }
                        }
                    }
                );
            }

            setInterval("uniform_plugins()", 250);
            function uniform_plugins() {

                var content_plugin_hook = $('#plugin-hook').text();
                content_plugin_hook = content_plugin_hook.replace(/(\r\n|\n|\r)/gm,"");
                if( content_plugin_hook != '' ){

                    var div_plugin_hook = $('#plugin-hook');
                    var num_uniform = $("div[id*='uniform-']", div_plugin_hook ).size();
                    if( num_uniform == 0 ){
                        if( $('#plugin-hook input:text').size() > 0 ){
                            $('#plugin-hook input:text').uniform();
                        }
                        if( $('#plugin-hook select').size() > 0 ){
                            $('#plugin-hook select').uniform();
                        }
                    }
                }
            }
            <?php if(osc_locale_thousands_sep()!='' || osc_locale_dec_point() != '') { ?>
            $().ready(function(){
                $("#price").blur(function(event) {
                    var price = $("#price").prop("value");
                    <?php if(osc_locale_thousands_sep()!='') { ?>
                    while(price.indexOf('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>')!=-1) {
                        price = price.replace('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>', '');
                    }
                    <?php }; ?>
                    <?php if(osc_locale_dec_point()!='') { ?>
                    var tmp = price.split('<?php echo osc_esc_js(osc_locale_dec_point())?>');
                    if(tmp.length>2) {
                        price = tmp[0]+'<?php echo osc_esc_js(osc_locale_dec_point())?>'+tmp[1];
                    }
                    <?php }; ?>
                    $("#price").prop("value", price);
                });
            });
            <?php }; ?>
        </script>
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
        <div id="content" class="container">
            <div class="col-md-8">
             <div class="row">
              <div class="col-md-12">
<style>.qq-uploader {
  position: inherit;
  width: 100%;
}
.qq-upload-button {background: #0088CC;}
.qq-upload-button:hover {background: #097CB5;}</style>
<div class="panel panel-default row">
  <div class="panel-heading">
                 <h1><strong><?php _e('Publish a listing', 'paris'); ?></strong></h1></div>
  <div class="panel-body">
           
            <div class="col-md-12">
<ul id="error_list"></ul>
             <form name="item" action="<?php echo osc_base_url(true);?>" method="post" enctype="multipart/form-data">
                <fieldset>
                <input type="hidden" name="action" value="item_add_post" />
                <input type="hidden" name="page" value="item" />
                    <div class="gener">
                        
                       <div class="form-group">
                            <label class="control-label" for="select_1"><?php _e('Select a category', 'paris'); ?></label>
                            <div class="controls">
                                <?php ItemForm::category_select(null, null, __('Select a category', 'paris')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title[<?php echo osc_locale_code(); ?>]"><?php _e('Title', 'paris'); ?></label>
                            <div class="controls">
                                <?php ItemForm::title_input('title',osc_locale_code(), osc_esc_html( paris_item_title() )); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description[<?php echo osc_locale_code(); ?>]"><?php _e('Description', 'paris'); ?></label>
                            <div class="controls">
                                <?php ItemForm::description_textarea('description',osc_locale_code(), osc_esc_html( paris_item_description() )); ?>
                            </div>
                          
                        </div>
                    </div>
                    <?php if( osc_price_enabled_at_items() ) { ?>
                    <div class="box price">
                        <label for="price"><?php _e('Price', 'paris'); ?></label>
                        <?php ItemForm::price_input_text(); ?>
                        <?php ItemForm::currency_select(); ?>
                    </div>
                    <?php } ?>
                    <?php if( osc_images_enabled_at_items() ) {
                            ItemForm::ajax_photos();
                         } ?>
                    <div class="box location">
                        
                       <div class="form-group">
                            <label class="control-label" for="country"><?php _e('Country', 'paris'); ?> *</label>
                            <?php UserForm::country_select(osc_get_countries(), osc_user()); ?>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="region"><?php _e('Region', 'paris'); ?> *</label>
                            <?php UserForm::region_select(osc_get_regions(), osc_user()); ?>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="city"><?php _e('City', 'paris'); ?> *</label>
                              <?php UserForm::city_select(osc_get_cities(), osc_user()); ?>
                        </div>
                        <div class="form-group">
                            <label for="city"><?php _e('City Area', 'paris'); ?></label>
                            <?php ItemForm::city_area_text(osc_user()); ?>
                        </div>
                        <div class="form-group">
                            <label for="address"><?php _e('Address', 'paris'); ?></label>
                            <?php ItemForm::address_text(osc_user()); ?>
                        </div>
                        

                    </div>
                    <!-- seller info -->
                    <?php if(!osc_is_web_user_logged_in() ) { ?>
                    <div class="box seller_info">
                        <h2><?php _e("Seller's information", 'paris'); ?></h2>
                        <div class="form-group">
                            <label for="contactName"><?php _e('Name', 'paris'); ?></label>
                            <?php ItemForm::contact_name_text(); ?>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail"><?php _e('E-mail', 'paris'); ?> *</label>
                            <?php ItemForm::contact_email_text(); ?>
                        </div>
                        
                    </div>
                    <?php }; ?>
                    <?php ItemForm::plugin_post_item(); ?>
                     <div class="form-group">
                            <div style="text-align:left;float:left;">
                                <?php ItemForm::show_email_checkbox(); ?>
                            </div>
                            <label for="showEmail"><?php _e('Show e-mail on the listing page', 'paris'); ?></label>
                        </div>
                        <div class="form-group">
                            
                            <label><input type="checkbox" required=""><?php _e('I agree to the', 'paris'); ?> <a target="_blank" href="<?php echo osc_get_preference('tos-me', 'paris'); ?>"><?php _e('Terms of Use', 'paris'); ?></a></label>
                        </div>
                    <?php if( osc_recaptcha_items_enabled() ) {?>
                    <div class="box">
                        <div class="row">
                            <?php osc_show_recaptcha(); ?>
                        </div>
                    </div>
                    <?php }?>
                <div class="clear"></div>
                <button class="btn btn-success btn-lg"  type="submit"><i class="fa fa-plus"></i> <?php _e('Publish a listing', 'paris'); ?></button>
                </fieldset>
            </form>



          </div>

            </div>
          </div>
        </div>
        </div>
        </div>
<?php osc_current_web_theme_path('sidebar.php'); ?>
</div>
        <?php osc_current_web_theme_path('footer.php'); ?>


    </body>
</html>