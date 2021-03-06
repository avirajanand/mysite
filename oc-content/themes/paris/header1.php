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
 <!-- header --> 
 <style>
.type{
		 width: 100%;
		 height: 25px;
		 position: relative;
		 background: rgba(24, 188, 156, .9);
		 color: #ffffff;
		 text-align:center;
		 margin:-10px 0px 5px;
	}
	.product-name{
color:rgb(24, 188, 156);
}
</style>
        <div class="wrapper">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid container">
    <!-- Brand and toggle get grouped for better mobile display -->
	<div class="col-md-6 col-xs-6" id="header_logo">
            <div class="logo">
                    <a href="<?php echo osc_base_url(); ?>" alt="<?php echo osc_page_title() ; ?>" title="<?php echo osc_page_title() ; ?>">
                       <?php echo logo_header(); ?>
                    </a>
            </div>
	</div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav">
	  <?php osc_current_web_theme_path('inc.search.php'); ?>
	</ul>
    
    <ul class="nav navbar-nav navbar-right">

<!-- Region -->
<li id="fb_like_top">
	<div class="fb-like" data-href="https://www.facebook.com/PlayTangCommunity" data-width="100px" data-layout="button" data-action="like"     data-show-faces="false" data-share="false"></div>
</li>
<li>
    <a href="item/new">
	    <?php _e("Add Venue", 'paris'); ?><span class="fa fa-plus-square" aria-hidden="true" style="padding-left: 3px;"></span>
	</a>
     					    
</li>
<li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><?php _e('Location', 'paris') ; ?> <span title="<?php _e('Location', 'paris') ; ?>" class="fa fa-map-marker" aria-hidden="true"></span></a></li>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php _e('Location', 'paris') ; ?> <span title="<?php _e('Location', 'paris') ; ?>" class="fa fa-map-marker" aria-hidden="true"></span></h4>
      </div>
      <div class="modal-body">

     <?php osc_current_web_theme_path('location.php') ; ?>

</div>
    </div>
  </div>
</div>

<?php if(osc_users_enabled()) { ?>
                        <?php if( osc_is_web_user_logged_in() ) { ?>
                            <li></li>
                            <li id="profile_link"><a href="<?php echo osc_user_dashboard_url() ; ?>"> <?php echo sprintf(__('%s', 'paris'), osc_logged_user_first_name()); ?><img src="<?php echo get_profile_image(30)?>"/></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php _e('My account', 'paris') ; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo osc_user_dashboard_url(); ?>"><span class="fa fa-home" aria-hidden="true"></span> <?php _e('Dasboard', 'paris') ; ?></a></li>
          <li><a href="<?php echo osc_user_profile_url() ; ?>"><span class="fa fa-user" aria-hidden="true"></span> <?php _e('My account', 'paris') ; ?></a></li>
           <li><a href="<?php echo osc_user_list_items_url() ; ?>"><span class="fa fa-th-list" aria-hidden="true"></span> <?php _e('Your listings', 'paris') ; ?></a></li>
           <li><a href="<?php echo osc_user_alerts_url() ; ?>"><span class="fa fa-warning" aria-hidden="true"></span> <?php _e('Your alerts', 'paris') ; ?></a></li>
 <li><a href="<?php echo osc_change_user_email_url() ; ?>"><span class="fa fa-envelope" aria-hidden="true"></span> <?php _e('Modify e-mail', 'paris') ; ?></a></li>
 <li><a href="<?php echo osc_change_user_password_url() ; ?>"><span class="fa fa-cog" aria-hidden="true"></span> <?php _e('Modify password', 'paris') ; ?></a></li>
            <li class="divider"></li>
           
            <li><a href="<?php echo osc_user_logout_url() ; ?>"><span class="fa fa-sign-out" aria-hidden="true"></span> <?php _e('Logout', 'paris') ; ?></a></li>
          </ul>
        </li>
                        <?php } else { ?>
                            
                        <?php if(osc_user_registration_enabled()) { ?>

<?php if ( osc_count_web_enabled_locales() > 1) { ?>
                                
            <?php } ?>


        <li> <a href="<?php echo osc_register_account_url() ; ?>"><?php _e('Register', 'paris') ; ?></a></li>
                         <?php }; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php _e('Login', 'paris') ; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
							<li>
							  <div class="row">
								<div class="col-md-12">
								  <form class="form" role="form" method="post" action="<?php echo osc_base_url(true); ?>" accept-charset="UTF-8" id="login-nav"><input type="hidden" name="page" value="login">
        <input type="hidden" name="page" value="login">
									<input type="hidden" name="page" value="login">
									<input type="hidden" name="action" value="login_post">
									<div id="no-has-placeholder"></div>
									<div class="form-group">
									  <label class="sr-only" for="email"><?php _e('E-mail', 'paris'); ?></label>
									  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="">
									</div>
									<div class="form-group">
									  <label class="sr-only" for="password"><?php _e('Password', 'paris'); ?></label>
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
									</div>
									<div class="checkbox">
									  <label>
										  <input type="checkbox" name="remember" id="remember"><?php _e('Remember me', 'paris') ; ?>									  </label>
									</div>
									<div class="form-group">
									  <button type="submit" class="btn btn-success btn-block"><?php _e('Log in', 'paris') ; ?></button>
									</div>
								  </form>
								</div>
							  </div>
							</li>
							<li class="divider"></li>
							<li><?php osc_current_web_theme_path('common/'.osc_get_preference('fb-us', 'paris').'-fb.php') ; ?>
																<input type="button" onclick="parent.location='<?php echo osc_register_account_url() ; ?>'" value="<?php _e('Register for a free account', 'paris') ; ?>" class="btn btn-primary btn-block">				<input type="button" onclick="parent.location='<?php echo osc_recover_user_password_url() ; ?>'" value="<?php _e('Forgot password?', 'paris') ; ?>" class="btn btn-primary btn-block">
							
							</li>
						  </ul>
        </li>
<?php } ?>
                    <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

            <div class="breadcrumb_wrapper"><div class="container" style="z-index: 5;">
                <div class="navbar navbar-default">
                    <div class="container-fluid">
<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                            <?php osc_goto_first_category() ; ?>
                            <?php if(osc_count_categories () > 0) { ?>
                            <ul class="nav navbar-nav">
                                <?php while ( osc_has_categories() ) { ?>
                                <li class="dropdown <?php echo osc_category_slug() ; ?><?php if ( osc_count_subcategories() > 0 ) { ?> menu<?php } ?>">
                                    <a class="dropdown-toggle" role="button" aria-expanded="false" href="<?php echo osc_search_category_url() ; ?>" <?php if ( osc_count_subcategories() > 0 ) { ?>class="menu"<?php } ?>><?php View::newInstance()->_erase('subcategories'); echo osc_category_name() ; ?></a>
                                    <?php if ( osc_count_subcategories() > 0 ) { ?>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php while ( osc_has_subcategories() ) { ?>
                                        <li class="<?php echo osc_category_slug() ; ?>"><a href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?> <span>(<?php echo osc_category_total_items() ; ?>)</a></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            
                        </div>

                    </div></div><!-- /fill -->
                </div><!-- /topbar -->
            </div>
        
        <!-- header end -->
<div class="container"><center class="ad-top"><?php echo osc_get_preference('header-728x90', 'paris'); ?></center></div>
<?php
    osc_show_widgets('header');

    $breadcrumb = osc_breadcrumb('&raquo;', false);
    if( $breadcrumb != '') { ?>
    <div class="ulfa container">
        <?php echo $breadcrumb; ?>
        <div class="clear"></div>
    </div>
<?php
    }
?>
<span class="st_twitter_large" displayText="Tweet"></span>
<span class="st_facebook_large" displayText="Facebook"></span>
<span class="st_ybuzz_large" displayText="Yahoo! Buzz"></span>
<span class="st_gbuzz_large" displayText="Google Buzz"></span>
<span class="st_email_large" displayText="Email"></span>
<span class="st_sharethis_large" displayText="ShareThis"></span>
<div class="forcemessages-inline container">
    <?php osc_show_flash_message(); ?>
</div>