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

<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<?php
    if(Params::getParam("action_specific")!='') {
        switch(Params::getParam("action_specific")) {
            case('upload_logo1'):
                $package = Params::getFiles("logo");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ){
                        osc_add_flash_ok_message( _m('The logo image has been uploaded correctly'), 'admin');
                    } else {
                        osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                }
            break;
            case('upload_logo_footer'):
                $package = Params::getFiles("logo");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ){
                        osc_add_flash_ok_message( _m('The Favicon image has been uploaded correctly'), 'admin');
                    } else {
                        osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                }
            break;
            case('remove_logo'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" );
                    osc_add_flash_ok_message( _m('The logo image has been removed'), 'admin');
                }else{
                    osc_add_flash_error_message( _m("Image not found"), 'admin');
                }
            break;
            case('footer_remove'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" );
                    osc_add_flash_ok_message( _m('The Favicon image has been removed'), 'admin');
                }else{
                    osc_add_flash_error_message( _m("Image not found"), 'admin');
                }

            break;
        }
    }
?>
    <?php osc_show_flash_message('admin') ; ?>
                <?php if(is_writable( WebThemes::newInstance()->getCurrentThemePath() ."images/") )  { ?>


    <div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">
        <div style="padding: 20px;">
                <h2 clas="section-title"><?php _e('logo 300x75','paris'); ?></h2>
                 <p style="border-bottom: 1px #ddd solid;padding-bottom: 10px;">
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ) { ?>
                
                <?php } ?>
            </p>

            <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/logo.php');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action_specific" value="upload_logo1" />
                <p>
                    <label for="package"><?php _e('Logo image','paris'); ?> (png,gif,jpg)</label>
                    <input type="file" name="logo" id="package" />
                </p>
                <input id="button_save" class="btn btn-submit" type="submit" value="<?php _e('Upload','paris'); ?>" />
            </form>
            <div>
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg" ) ) {?>
                <p>
                    Preview:<br>
                    <img border="0" alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/logo.jpg');?>"/>
                    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/logo.php');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action_specific" value="remove_logo" />
                        <input id="button_remove" class="btn btn-red" type="submit" value="<?php _e('Remove logo','paris'); ?>" />
                    </form>
                </br>Please reload or refresh your browser if logo not change.</p><button onclick="myFunction()">Reload browser</button>
                <?php } else { ?>
                    <p><?php _e('Has not uploaded any logo image','paris');?></p>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="settings_form" style="border: 1px solid #ccc; background: #eee; margin-top:20px; ">
        <div style="padding: 20px;">
            
                
                <h2 clas="section-title"><?php _e('Favicon 30x30','paris'); ?></h2>
<p style="border-bottom: 1px #ddd solid;padding-bottom: 10px;">
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ) { ?>
                
                <?php } ?>
            </p>

            <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/logo.php');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action_specific" value="upload_logo_footer" />
                <p>
                    <label for="package"><?php _e('Logo image for favicon','paris'); ?> (png,gif,jpg)</label>
                    <input type="file" name="logo" id="package" />
                </p>
                <input id="button_save" class="btn btn-submit" type="submit" value="<?php _e('Upload','paris'); ?>" />
            </form>
            <div>
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.jpg" ) ) {?>
                <p>
                    Preview:<br>
                    <img border="0" alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/favicon.jpg');?>"/>
                    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/logo.php');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action_specific" value="footer_remove" />
                        <input id="button_remove" class="btn btn-red" type="submit" value="<?php _e('Remove Favicon','paris'); ?>" />
                    </form>
                </br>Please reload or refresh your browser if Favicon not change.</p><button onclick="myFunction()">Reload browser</button>
                <?php } else { ?>
                    <p><?php _e('Has not uploaded any logo image for favicon','paris');?></p>
                <?php } ?>
            </div>
        </div>
    </div>


            <div style="clear: both;"></div>

            <?php } else { ?>

            <div id="flash_message">
                <p>
                    <?php
                        $msg  = sprintf(__('The images folder %s is not writable on your server','paris'), WebThemes::newInstance()->getCurrentThemePath() ."images/" ) .", ";
                        $msg .= __('Osclass can\'t upload logo image from the administration panel','paris') . '. ';
                        $msg .= __('Please make the mentioned images folder writable','paris') . '.';
                        echo $msg;
                    ?>
                </p>
                <p>
                    <?php _e('To make a directory writable under UNIX execute this command from the shell','paris'); ?>:
                </p>
                <p style="background-color: white; border: 1px solid #ddd; padding: 8px;">
                    chmod a+w <?php echo WebThemes::newInstance()->getCurrentThemePath() ."images/" ; ?>
                </p>
            </div>

            <?php } ?>
<script>
function myFunction() {
    location.reload();
}
</script>