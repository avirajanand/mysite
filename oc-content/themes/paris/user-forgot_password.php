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
            <div class="col-md-8">
             <div class="panel panel-default row">
  <div class="panel-heading">
                <h1><?php _e('Recover your password', 'paris'); ?></h1></div>
  <div class="panel-body">
               
                <form action="<?php echo osc_base_url(true); ?>" method="post" >
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="forgot_post" />
                    <input type="hidden" name="userId" value="<?php echo osc_esc_html(Params::getParam('userId')); ?>" />
                    <input type="hidden" name="code" value="<?php echo osc_esc_html(Params::getParam('code')); ?>" />
                    <fieldset>
                        <div class="form-group">

                        <label class="control-label" for="new_email"><?php _e('New password', 'paris'); ?></label>
                            <div class="controls"><input type="password" name="new_password" value="" /></div>
                        </div>
                        <div class="form-group">

                        <label class="control-label" for="new_email"><?php _e('Repeat new password', 'paris'); ?></label><br />
                            <input type="password" name="new_password2" value="" />
                        </div>
                        <div class="form-group"><button class="btn btn-success btn-lg" type="submit"><?php _e('Change password', 'paris'); ?></button></div>
                    </fieldset>
                </form>
            </div>
        </div>
</div>
<?php osc_current_web_theme_path('sidebar.php'); ?>
        </div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>