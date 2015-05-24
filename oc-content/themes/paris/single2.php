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
<style>img.irmacinta {
  background: #fff;
}
.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: 10px;
  margin-top: 5px;
}
.panel {
  margin-bottom: 21px;
  background-color: #ffffff;
  border: 1px solid rgb(221, 221, 221);
}
span.price {
  float: right;
  font-weight: bold;
}
</style>
<div class="container item">
            
            <div id="content">

            
            <div id="main" class="col-md-8">
<div id="item_head" style="margin-bottom:5px" class="col-md-12 row panel panel-body"> <h1><strong><?php echo osc_item_title() . ' ' . osc_item_city(); ?></strong> <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?><span class="price"><?php echo osc_item_formated_price(); ?></span> <?php } ?></h1>
               
            </div>

<?php if( osc_images_enabled_at_items() ) { ?>
        <?php
        if( osc_count_item_resources() > 0 ) {
            $i = 0;
        ?>
     
           
 <div id="slider1_container" style="max-width:100%; position: relative; top: 0px; left: 0px; width: 728px;
        height: 550px; background:#555; overflow: hidden;" class="col-md-12 row">

        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(<?php echo osc_current_web_theme_url() ; ?>/images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 728px; height: 456px; overflow: hidden;">
           <?php for ( $i = 0; osc_has_item_resources(); $i++ ) { ?> <div>
                <img class="irmacinta" u="image" src="<?php echo osc_resource_url(); ?>" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />

                <img u="thumb" src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />
            </div>
                   
                    <?php } ?>
            
            
        </div>
        
        <!--#region Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(<?php echo osc_current_web_theme_url() ; ?>/images/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 158px; left: 6px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 158px; right: 32px">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <style>

            /* jssor slider thumbnail navigator skin 01 css */
            /*
            .jssort01 .p            (normal)
            .jssort01 .p:hover      (normal mouseover)
            .jssort01 .p.pav        (active)
            .jssort01 .p.pdn        (mousedown)
            */

            .jssort01 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 730px;
                height: 100px;
            }

                .jssort01 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 72px;
                    height: 72px;
                }
textarea, input {
  width: 100%;
}

                .jssort01 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    opacity:.5;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    
                    _background: none;
                }

                .jssort01 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                }


                .jssort01 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                }

                .jssort01 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 72px;
                    height /**/: 72px;
                }
        </style>

        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        
    </div>
       
<?php } else { ?>
                                 <div id="photos" style="margin-bottom:5px" class="col-md-12 row panel"><center style="padding:20px;border: #ddd 1px solid;"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/></center></div>
                   
                   
                    <?php } ?>
    <?php } ?>
<div style="margin-bottom:5px" class="col-md-12 row panel panel-body">

                   <div class="khanisa">
                    <?php if(osc_is_web_user_logged_in() && osc_logged_user_id()==osc_item_user_id()) { ?>
                        <p id="edit_item_view">
                            <strong>
                                <a href="<?php echo osc_item_edit_url(); ?>" rel="nofollow"><?php _e('Edit item', 'paris'); ?></a>
                            </strong>
                        </p>
                    <?php } else { ?>
                        
                            <b><span class="fa fa-info-circle" aria-hidden="true"></span><?php _e('Mark as', 'paris'); ?></b>
                            <span>
                                <a class="label label-default" href="<?php echo osc_item_link_spam(); ?>" rel="nofollow"><?php _e('spam', 'paris'); ?></a>
                               </span><span> <a class="label label-default" href="<?php echo osc_item_link_bad_category(); ?>" rel="nofollow"><?php _e('misclassified', 'paris'); ?></a>
                                </span><span><a class="label label-default" href="<?php echo osc_item_link_repeated(); ?>" rel="nofollow"><?php _e('duplicated', 'paris'); ?></a>
                                </span><span><a class="label label-default" href="<?php echo osc_item_link_expired(); ?>" rel="nofollow"><?php _e('expired', 'paris'); ?></a>
                                </span><span><a class="label label-default" href="<?php echo osc_item_link_offensive(); ?>" rel="nofollow"><?php _e('offensive', 'paris'); ?></a>
                            </span>
                        
                    <?php }; ?></div>
                </div>


                <div id="type_dates" style="margin-bottom:5px" class="col-md-12 row panel panel-body">
                    <strong><?php echo osc_item_category(); ?></strong>
                    <em class="publish"><?php if ( osc_item_pub_date() != '' ) echo __('Published date', 'paris') . ': ' . osc_format_date( osc_item_pub_date() ); ?></em>
                    <em class="update"><?php if ( osc_item_mod_date() != '' ) echo __('Modified date', 'paris') . ': ' . osc_format_date( osc_item_mod_date() ); ?></em>
                </div>
                <ul id="item_location" style="margin-bottom:5px" class="col-md-12 row panel panel-body" >
                    <?php if ( osc_item_country() != "" ) { ?><li><?php _e("Country", 'paris'); ?>: <strong><?php echo osc_item_country(); ?></strong></li><?php } ?>
                    <?php if ( osc_item_region() != "" ) { ?><li><?php _e("Region", 'paris'); ?>: <strong><?php echo osc_item_region(); ?></strong></li><?php } ?>
                    <?php if ( osc_item_city() != "" ) { ?><li><?php _e("City", 'paris'); ?>: <strong><?php echo osc_item_city(); ?></strong></li><?php } ?>
                    <?php if ( osc_item_city_area() != "" ) { ?><li><?php _e("City area", 'paris'); ?>: <strong><?php echo osc_item_city_area(); ?></strong></li><?php } ?>
                    <?php if ( osc_item_address() != "" ) { ?><li><?php _e("Address", 'paris'); ?>: <strong><?php echo osc_item_address(); ?></strong></li><?php } ?>
                </ul>
                <div id="descript" style="margin-bottom:5px" class="panel col-md-12 row panel-body">
                    <p><?php echo osc_item_description(); ?></p>
                    <div id="custom_fields">
                        <?php if( osc_count_item_meta() >= 1 ) { ?>
                            <br />
                            <div class="meta_list">
                                <?php while ( osc_has_item_meta() ) { ?>
                                    <?php if(osc_item_meta_value()!='') { ?>
                                        <div class="meta">
                                            <strong><?php echo osc_item_meta_name(); ?>:</strong> <?php echo osc_item_meta_value(); ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php osc_run_hook('item_detail', osc_item() ); ?>
                    <p class="contact_button">
                        <?php if( !osc_item_is_expired () ) { ?>
                        <?php if( !( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) ) { ?>
                            <?php     if(osc_reg_user_can_contact() && osc_is_web_user_logged_in() || !osc_reg_user_can_contact() ) { ?>
                                
                            <?php     } ?>
                        <?php     } ?>
                        <?php } ?>
                        <strong class="share"><a href="<?php echo osc_item_send_friend_url(); ?>" rel="nofollow"><?php _e('Share', 'paris'); ?></a></strong>
                    <style>.related_ads table td.photo img {
width: 100px;}.related_ads table td.text {
width: 100%;
}</style>
                        <?php if (function_exists('related_ads_start')) {related_ads_start();} ?> 
                    </p>
                    <?php osc_run_hook('location'); ?>
                </div>
                <!-- plugins -->
                <div id="useful_info" style="margin-bottom:5px" class="col-md-12 row panel panel-body">
                    <h2><b><?php _e('Useful information', 'paris'); ?></b></h2>
                    <ul>
                        <li><?php _e('Avoid scams by acting locally or paying with PayPal', 'paris'); ?></li>
                        <li><?php _e('Never pay with Western Union, Moneygram or other anonymous payment services', 'paris'); ?></li>
                        <li><?php _e('Don\'t buy or sell outside of your country. Don\'t accept cashier cheques from outside your country', 'paris'); ?></li>
                        <li><?php _e('This site is never involved in any transaction, and does not handle payments, shipping, guarantee transactions, provide escrow services, or offer "buyer protection" or "seller certification"', 'paris'); ?></li>
                    </ul>
                </div>
                <?php if( osc_comments_enabled() ) { ?>
                    <?php if( osc_reg_user_post_comments () && osc_is_web_user_logged_in() || !osc_reg_user_post_comments() ) { ?>
                    <div id="comments" style="margin-bottom:5px" class="col-md-12 row panel panel-body">
                        <h2><?php _e('Comments', 'paris'); ?></h2>
                        <ul id="comment_error_list"></ul>
                        <?php CommentForm::js_validation(); ?>
                        <?php if( osc_count_item_comments() >= 1 ) { ?>
                            <div class="comments_list">
                                <?php while ( osc_has_item_comments() ) { ?>
                                    <div class="comment">
                                        <h3><strong><?php echo osc_comment_title(); ?></strong> <em><?php _e("by", 'paris'); ?> <?php echo osc_comment_author_name(); ?>:</em></h3>
                                        <p><?php echo nl2br( osc_comment_body() ); ?> </p>
                                        <?php if ( osc_comment_user_id() && (osc_comment_user_id() == osc_logged_user_id()) ) { ?>
                                        <p>
                                            <a rel="nofollow" href="<?php echo osc_delete_comment_url(); ?>" title="<?php _e('Delete your comment', 'paris'); ?>"><?php _e('Delete', 'paris'); ?></a>
                                        </p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <div class="paginate" style="text-align: right;">
                                    <?php echo osc_comments_pagination(); ?>
                                </div>
                            </div>
                        <?php } ?>
<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><?php _e('Comment', 'paris'); ?></button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     
    
                        <form action="<?php echo osc_base_url(true); ?>" method="post" name="comment_form" id="comment_form">
                            <fieldset>
                                
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php _e('Comment', 'paris'); ?></h4>
      </div>
      <div class="modal-body">
                                <input type="hidden" name="action" value="add_comment" />
                                <input type="hidden" name="page" value="item" />
                                <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
                                <?php if(osc_is_web_user_logged_in()) { ?>
                                    <input type="hidden" name="authorName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                                    <input type="hidden" name="authorEmail" value="<?php echo osc_logged_user_email();?>" />
                                <?php } else { ?>
                                    <label for="authorName"><?php _e('Your name', 'paris'); ?>:</label> <?php CommentForm::author_input_text(); ?><br />
                                    <label for="authorEmail"><?php _e('Your e-mail', 'paris'); ?>:</label> <?php CommentForm::email_input_text(); ?><br />
                                <?php }; ?>
                                <label for="title"><?php _e('Title', 'paris'); ?>:</label><?php CommentForm::title_input_text(); ?><br />
                                <label for="body"><?php _e('Comment', 'paris'); ?>:</label><?php CommentForm::body_input_textarea(); ?><br />
                                <button class="btn btn-success ulfa" type="submit"><?php _e('Send', 'paris'); ?></button></div>
                            </fieldset>
                        </form>
</div>
  </div>
</div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>


<div id="sidebar" class="col-md-4">



<div class="panel panel-default">
  <div class="panel-heading"><h2><?php _e("Contact publisher", 'paris'); ?></h2></div>
  <div class="panel-body">
<ul id="user_data">
<?php if( osc_item_is_expired () ) { ?>
                        <p><span class="fa fa-remove" aria-hidden="true"></span> <?php _e("The listing is expired. You can't contact the publisher.", 'paris'); ?>
                        </p>
                    <?php } else if( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) { ?>
                        <p>
                            <span class="fa fa-th-large" aria-hidden="true"></span> <?php _e("It's your own listing, you can't contact the publisher.", 'paris'); ?>
                        </p>
                    <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                        <p><span class="fa fa-user" aria-hidden="true"></span> <?php _e("You must log in or register a new account in order to contact the advertiser", 'paris'); ?>
                        </p>
                        <p class="contact_button">
                            <strong><a class="btn btn-small btn-success" href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'paris'); ?></a></strong>
                            <strong><a class="btn btn-small btn-primary" href="<?php echo osc_register_account_url(); ?>"><?php _e('Register for a free account', 'paris'); ?></a></strong>
                        </p>
                    <?php } else { ?>
                        <?php if( osc_item_user_id() != null ) { ?>
                            <li><b><span class="fa fa-user" aria-hidden="true"></span> <?php _e('Name', 'paris') ?>: </b><a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><?php echo osc_item_contact_name(); ?></a></li>
                        <?php } else { ?>
                            <li><b><span class="fa fa-user" aria-hidden="true"></span> <?php _e('Name', 'paris') ?>: </b><?php echo osc_item_contact_name(); ?></li>
                        <?php } ?>
                        <?php if( osc_item_show_email() ) { ?>
                            <li><b><span class="fa fa-envelope" aria-hidden="true"></span> <?php _e('E-mail', 'paris'); ?>: </b><?php echo osc_item_contact_email(); ?></li>
                        <?php } ?>
                        <?php if ( osc_user_phone() != '' ) { ?>
                            <li><b><span class="fa fa-phone" aria-hidden="true"></span> <?php _e("Phone", 'paris'); ?>.: </b><?php echo osc_user_phone(); ?></li>
                        <?php } ?>

<?php if ( osc_user_address() != '' ) { ?>
                           <li><b><span class="fa fa-hand-o-right" aria-hidden="true"></span> <?php _e("Address", 'paris'); ?>: </b><?php echo osc_user_address(); ?></li>
                        <?php } ?>

<?php if ( osc_user_city() != '' ) { ?>
                           <li><b><span class="fa fa-map-marker" aria-hidden="true"></span> <?php _e("City", 'paris'); ?>: </b><?php echo osc_user_city(); ?></li>
                        <?php } ?>

<?php if ( osc_user_region() != '' ) { ?>
                           <li><b><span class="fa fa-globe" aria-hidden="true"></span> <?php _e("Region", 'paris'); ?>: </b><?php echo osc_user_region(); ?></li>
                        <?php } ?>

<?php if ( osc_user_website() != '' ) { ?>
                           <li><b><span class="fa fa-link" aria-hidden="true"></span> <?php _e("Website", 'paris'); ?>: </b><?php echo osc_user_website(); ?></li>
                        <?php } ?>

                
                       
                       
                    </ul>
            </div></div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h2><?php _e("Contact publisher", 'paris'); ?></h2></div>
  <div class="panel-body">
   <center style="margin-bottom:5px"><?php osc_current_web_theme_path('common/'.osc_get_preference('wl-us', 'paris').'-watchlist.php') ; ?>  </center>          
                    
<center><button style="margin-bottom:5px" onclick="parent.location='<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>'" type="button" class="btn btn-success btn-lg">
  <?php _e("View profile", 'paris'); ?>
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <?php _e("Send Mail", 'paris'); ?>
</button></center> 

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

<?php     } ?></div>
                <?php } ?>





            

                 <?php } ?>
                
               
            </div></div><?php if( osc_get_preference('sidebar-300x250', 'paris') != '') {?>
                <!-- sidebar ad 350x250 -->
                <center class="ads-right2">
                    <?php echo osc_get_preference('sidebar-300x250', 'paris'); ?>
                </center>
                <!-- /sidebar ad 350x250 -->
                <?php } ?>
 </div>
        </div>
</div>
        <?php osc_current_web_theme_path('footer.php'); ?>

 <script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jquery-1.9.1.min.js') ; ?>"></script>
 <script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jssor.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo osc_current_web_theme_js_url('jssor.slider.js') ; ?>"></script>
    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 5500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 1800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    