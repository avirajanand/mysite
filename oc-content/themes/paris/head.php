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
<!-- SEO  -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title><?php echo meta_title(); ?> </title>
<meta name="title" content="<?php echo osc_esc_html(meta_title()); ?>" />
<?php if( meta_description() != '' ) { ?>
<meta name="description" content="<?php echo osc_esc_html(meta_description()); ?>" />
<?php } ?>
<?php if( function_exists('meta_keywords') ) { ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<?php } ?>
<meta content="index, follow" name="robots">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-sitename', 'paris') ); ?>" property="og:site_name">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-description', 'paris') ); ?>" name="og:description">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-google', 'paris') ); ?>" name="google-site-verification">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-bing', 'paris') ); ?>" name="msvalidate.01">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-alexa', 'paris') ); ?>" name="alexaVerifyID">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-geo', 'paris') ); ?>" name="geo.country">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-country', 'paris') ); ?>" name="geo.placename">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-author', 'paris') ); ?>" name="author">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-language', 'paris') ); ?>" name="language">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-copyright', 'paris') ); ?>" name="copyright">
<meta content="<?php echo osc_esc_html( osc_get_preference('seo-subject', 'paris') ); ?>" name="subject">
<meta content="2 days" name="revisit">
<meta content="2 days" name="revisit-after">
<meta content="all" name="audience">
<meta content="global" name="distribution">
<meta content="global" name="target">
<meta content="general" name="rating">
<meta content="all" name="Slurp">
<meta content="all" name="Webcrawlers">
<meta content="follow, all" name="Googlebot-Image">
<meta content="follow, all" name="msnbot">
<meta content="follow, all" name="alexabot">
<meta content="follow, all" name="Slurp">
<meta content="follow, all" name="ZyBorg">
<meta content="follow, all" name="Scooter">
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />
<link href="<?php echo osc_current_web_theme_url('images/favicon.png') ; ?>" rel="shortcut icon">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    var fileDefaultText = '<?php echo osc_esc_js( __('No file selected', 'paris') ); ?>';
    var fileBtnText     = '<?php echo osc_esc_js( __('Choose File', 'paris') ); ?>';
</script>
<script src="<?php echo osc_current_web_theme_js_url('pgwslider.min.js') ; ?>"></script>
<script src="<?php echo osc_current_web_theme_js_url('jquery.min.js') ; ?>"></script>
<script src="<?php echo osc_current_web_theme_js_url('multizoom.js') ; ?>"></script>

<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('animate.css') ; ?>">
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('multizoom.css') ; ?>">
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('owl.theme.css') ; ?>">
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('owl.carousel.css') ; ?>">
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('bootstrap.min.css') ; ?>">
<script src="<?php echo osc_current_web_theme_js_url('bootstrap.min.js') ; ?>"></script>
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('color/'.osc_get_preference('love-us', 'paris').'.css') ; ?>">
<link rel="stylesheet" href="<?php echo osc_current_web_theme_styles_url('custom.css') ; ?>">
<?php
osc_enqueue_style('composer', osc_current_web_theme_styles_url('js_composer.css') );
osc_enqueue_style('chosen-css', osc_current_web_theme_js_url('chosen/chosen.css') );
osc_enqueue_style('pgw', osc_current_web_theme_styles_url('pgwslider.min.css') );
osc_enqueue_style('demo', osc_current_web_theme_styles_url('pgwslider.css') );
osc_enqueue_style('jquery-ui-datepicker', osc_assets_url('css/jquery-ui/jquery-ui.css'));
osc_enqueue_style('font', osc_current_web_theme_styles_url('css/font-awesome.css') );


osc_register_script('global-theme-js', osc_current_web_theme_js_url('global.js'), 'jquery');
osc_register_script('chosen-js', osc_current_web_theme_js_url('chosen/chosen.jquery.min.js'), 'jquery');

osc_enqueue_script('jquery');
osc_enqueue_script('jquery-ui');
osc_enqueue_script('chosen-js');
osc_enqueue_script('global-theme-js');
osc_enqueue_script('php-date');

osc_register_script('jquery-uniform', osc_current_web_theme_js_url('jquery.uniform.js'), 'jquery');
osc_register_script('global', osc_current_web_theme_js_url('global.js'));

osc_enqueue_script('jquery');
osc_enqueue_script('jquery-ui');
osc_enqueue_script('jquery-uniform');
osc_enqueue_script('tabber');
osc_enqueue_script('global');

osc_run_hook('header');

FieldForm::i18n_datePicker();

?>