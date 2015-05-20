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
            case('upload_slider'):
                $package = Params::getFiles("slider");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" ) ){
                        osc_add_flash_ok_message( _m('The slider 1 image has been uploaded correctly'), 'admin');
                    } else {
                        osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                }
            break;
            case('upload_slider_1'):
                $package = Params::getFiles("slider_1");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" ) ){
                        osc_add_flash_ok_message( _m('The slider 2 image has been uploaded correctly'), 'admin');
                    } else {
                        osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                }
            break;
                case('upload_slider_2'):
                $package = Params::getFiles("slider_2");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" ) ){
                        osc_add_flash_ok_message( _m('The slider 3 image has been uploaded correctly'), 'admin');
                    } else {
                        osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message( _m("An error has occurred, please try again"), 'admin');
                }
            break;
          case('remove_slider1'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" );
                    osc_add_flash_ok_message( _m('The slider 1 image has been removed'), 'admin');
                }else{
                    osc_add_flash_error_message( _m("Image not found"), 'admin');
                }
            break;
            case('remove_slider2'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" );
                    osc_add_flash_ok_message( _m('The slider 2 image has been removed'), 'admin');
                }else{
                    osc_add_flash_error_message( _m("Image not found"), 'admin');
                }

            break;
                case('remove_slider3'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" );
                    osc_add_flash_ok_message( _m('The slider 3 image has been removed'), 'admin');
                }else{
                    osc_add_flash_error_message( _m("Image not found"), 'admin');
                }

            break;
            
        }
    }
?>
    <?php osc_show_flash_message('admin') ; ?>
                <?php if(is_writable( WebThemes::newInstance()->getCurrentThemePath() ."images/") )  { ?>

<h1 class="render-title <?php echo (osc_get_preference('footer_link', 'paris_theme') ? '' : 'separate-top'); ?>"><?php _e('Slider settings', 'paris'); ?></h1>
    <div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">
        <div style="padding: 20px;">
            <p style="border-bottom: 1px #ddd solid;font-weight: bold;padding-bottom: 10px;">
                
                <?php _e('SLIDER IMAGES 1 SIZE 800x300','paris'); ?>.
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" ) ) { ?>
                
                <?php } ?>
            </p>

            <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action_specific" value="upload_slider" />
                <p>
                    <label for="package"><?php _e('slider image','paris'); ?> (png,gif,jpg)</label>
                    <input type="file" name="slider" id="package" />
                </p>
                <input id="button_save" class="btn btn-submit" type="submit" value="<?php _e('Upload','paris'); ?>" />
            </form>
            <div>
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider.jpg" ) ) {?>
                <p>
                    Preview:<br>
                    <img border="1" alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/slider.jpg');?>"/>
                    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action_specific" value="remove_slider1" />
                        <input id="button_remove" class="btn btn-red" type="submit" value="<?php _e('Remove slider','paris'); ?>" />
                    </form>
                </br>Please reload or refresh your browser if images not change.</p><button onclick="myFunction()">Reload browser</button>
                <?php } else { ?>
                    <p><?php _e('Has not uploaded any slider image','paris');?></p>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="settings_form" style="border: 1px solid #ccc; background: #eee; margin-top:20px; ">
        <div style="padding: 20px;">
            <p style="border-bottom: 1px #ddd solid;font-weight: bold;padding-bottom: 10px;">
                
                <?php _e('SLIDER 2 SIZE 800x300','paris'); ?>.
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" ) ) { ?>
                
                <?php } ?>
            </p>
<div id="settings_form">
            <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action_specific" value="upload_slider_1" />
                <p>
                    <label for="package"><?php _e('slider 2 image ','paris'); ?> (png,gif,jpg)</label>
                    <input type="file" name="slider_1" id="package" />
                </p>
                <input id="button_save" class="btn btn-submit" type="submit" value="<?php _e('Upload','paris'); ?>" />
            </form>
            <div>
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-1.jpg" ) ) {?>
                <p>
                    Preview:<br>
                    <img border="1" alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/slider-1.jpg');?>"/>
                    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action_specific" value="remove_slider2" />
                        <input id="button_remove" class="btn btn-red" type="submit" value="<?php _e('Remove slider 2','paris'); ?>" />
                    </form>
                </br>Please reload or refresh your browser if images not change.</p><button onclick="myFunction()">Reload browser</button>
                <?php } else { ?>
                    <p><?php _e('Has not uploaded any slider image 1','paris');?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div id="settings_form" style="border: 1px solid #ccc; background: #eee; margin-top:20px; ">
        <div style="padding: 20px;">
            <p style="border-bottom: 1px #ddd solid;font-weight: bold;padding-bottom: 10px;">
                
                <?php _e('SLIDER 3 SIZE 800x300','paris'); ?>.
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" ) ) { ?>
                
                <?php } ?>
            </p>
<div id="settings_form">
            <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action_specific" value="upload_slider_2" />
                <p>
                    <label for="package"><?php _e('slider 3 image ','paris'); ?> (png,gif,jpg)</label>
                    <input type="file" name="slider_2" id="package" />
                </p>
                <input id="button_save" class="btn btn-submit" type="submit" value="<?php _e('Upload','paris'); ?>" />
            </form>
            <div>
                <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/slider-2.jpg" ) ) {?>
                <p>
                    Preview:<br>
                    <img border="1" alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/slider-2.jpg');?>"/>
                    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/slider.php');?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action_specific" value="remove_slider3" />
                        <input id="button_remove" type="submit" class="btn btn-red" value="<?php _e('Remove slider 3','paris'); ?>" />
                    </form>
                </br>Please reload or refresh your browser if images not change.</p><button onclick="myFunction()">Reload browser</button>
                <?php } else { ?>
                    <p><?php _e('Has not uploaded any slider image 2','paris');?></p>
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
                        $msg .= __('Osclass can\'t upload slider image from the administration panel','paris') . '. ';
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