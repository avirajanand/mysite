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
        <?php UserForm::js_validation(); ?>
        <?php osc_current_web_theme_path('header.php'); ?>

<div class="container">
        <div class="veraari">
            
            
            <div class="col-md-8">
              <div class="panel panel-default">
  <div class="panel-heading">
                <h1><?php _e('Register an account for free', 'paris'); ?></h1></div>
  <div class="panel-body">

<ul id="error_list"></ul>
                <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" >
                    <input type="hidden" name="page" value="register" />
                    <input type="hidden" name="action" value="register_post" />

                    <fieldset>
<div class="form-group">
<label class="control-label" for="name"><?php _e('Name', 'paris'); ?></label>
                            <div class="controls">
                                 <?php UserForm::name_text(); ?>                        </div>
                        </div>

<div class="form-group">
                        <label class="control-label" for="password"><?php _e('Password', 'paris'); ?></label>
<div class="controls"> <?php UserForm::password_text(); ?>
</div></div>
<div class="form-group">

                        <label class="control-label" for="password"><?php _e('Re-type password', 'paris'); ?></label> 
<div class="controls"><?php UserForm::check_password_text(); ?></div></div>

                        <p id="password-error" style="display:none;">
                            <?php _e('Passwords don\'t match', 'paris'); ?>.
                        </p>

                        <div class="form-group">
<label class="control-label" for="email"><?php _e('E-mail', 'paris'); ?></label> 

<div class="controls"><?php UserForm::email_text(); ?></div></div>

                        <?php osc_run_hook('user_register_form'); ?>
                        <?php osc_show_recaptcha('register'); ?>
                        <button class="btn btn-success btn-lg" type="submit"><?php _e('Create', 'paris'); ?></button>
                    </fieldset>
                </form>
<br>

<?php osc_current_web_theme_path('common/'.osc_get_preference('fb-us', 'paris').'-fb.php') ; ?>
            </div>
        </div></div> 
<?php osc_current_web_theme_path('sidebar.php'); ?>
        </div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>