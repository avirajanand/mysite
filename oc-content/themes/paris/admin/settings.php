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
<style type="text/css">
	      body, html {
	          height: 100%;
	          margin: 0;
	          -webkit-font-smoothing: antialiased;
	          font-weight: 100;
	          background: #aadfeb;
	          text-align: left;
	          font-family: helvetica;
	      }
.main{height:100%;min-height:63em
}
.opt-title {
  margin: 0;
  margin-bottom: 0px;
  color: #616161;
  font-size: 15px;
  padding-bottom: 10px;
  font-weight: normal;
 
}
	      
	      .tabs input[type=radio] {
	          position: absolute;
	          top: -9999px;
	          left: -9999px;
	      }
	      .tabs {
	        width: 95%;
	        float: none;
	        list-style: none;
	        position: relative;
	        padding: 0;
	        
	      }
.btn-submit{margin-right: 60px;
}
	      .tabs li{border-radius: 5px 5px 0 0;border: #ddd 1px solid;

float: left;
margin-right: 5px;
	        
	      }
	      .tabs label {text-transform: lowercase;
	          display: block;
	          padding: 10px 20px;
	          border-radius: 2px 2px 0 0;
	          color: #0B455B;
	          font-size: 18px;
                  font-weight: bold;
	          background: rgba(255,255,255,0.2);
	          cursor: pointer;
	          position: relative;
	          top: 3px;
	          -webkit-transition: all 0.2s ease-in-out;
	          -moz-transition: all 0.2s ease-in-out;
	          -o-transition: all 0.2s ease-in-out;
	          transition: all 0.2s ease-in-out;
	      }
	      .tabs label:hover {
	        background: rgba(255,255,255,0.5);
	        top: 0;
	      }
	      
	      [id^=tab]:checked + label {
	        top: 0;
color: #00ACC2;
cursor: default;
background-color: #F3F3F3;
border-bottom-color: transparent;
	      }
	      
	      [id^=tab]:checked ~ [id^=tab-content] {
	          display: block;
	      }
	      .tab-content{border-right: #ddd 1px solid;
border-left: #ddd 1px solid;
border-bottom: #ddd 1px solid;
	        z-index: 2;
	        display: none;
	        text-align: left;
	        width: 100%;
	        font-size: 20px;
	        background: #F3F3F3;
                color: #555;
	        padding: 15px;
                padding-top: 40px;
	        position: absolute;
	        left: 0;
	        box-sizing: border-box;
	        -webkit-animation-duration: 0.5s;
	        -o-animation-duration: 0.5s;
	        -moz-animation-duration: 0.5s;
	        animation-duration: 0.5s;
	      }
.ari h2{
font-size: 1.5em;
color: #0b455b;
margin: 5px;
padding: 15px;
text-align: center;
}
.ari h2:after {
    display: inline-block;
    margin: 0 0 8px 20px;
    height: 3px;
    content: " ";
    text-shadow: none;
    background-color: #00ACC2;
    width: 140px;
}
.opt-title b {
  color: #00ACC2;
}
.ari h2:before {
    display: inline-block;
    margin: 0 20px 8px 0;
    height: 3px;
    content: " ";
    text-shadow: none;
    background-color: #00ACC2;
    width: 140px;
}

@media only screen and (max-width: 1200px){
.tabs label {
  text-transform: lowercase;
  display: block;
  padding: 10px 10px;
}
}
	    </style>
<div class="body">

      <!-- ########################### PARIS RESPONSIVE OSCLASS THEMES ######################## -->
      <!-- ###########################  Visit website www.osclass.me   ######################## -->
       <!-- ###########################  Copyright © 2015 Osclass.me   ######################## -->
 <!-- ###########################  copyright Admin Framework protection by law   ######################## -->

<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/paris/admin/settings.php'); ?>" method="post">
    <input type="hidden" name="action_specific" value="settings" />
   
<div class="main"><div class="ari"><h2><?php _e('Paris Administrator Panel', 'paris'); ?></h2></div>
	        	<ul class="tabs">
			        <li>
			          <input type="radio" checked name="tabs" id="tab1">
			          <label for="tab1"><?php _e('General', 'paris'); ?></label>
			          <div id="tab-content1" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Layout Customize', 'paris'); ?></b></div>
            </div>
<fieldset>
			           <div class="form-row">
                <div class="form-label"><?php _e('Header Style', 'paris'); ?></div>

                <div class="form-controls">
<select name="header-vera" value="<?php echo osc_esc_html( osc_get_preference('header-vera', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('header-vera', 'paris') ); ?></option>
  <option>header1</option>
  <option>header2</option>
  <option>header3</option>
  <option>header4</option>
   <option>header5</option>
</select>
</div>
<div class="form-controls"><p><?php _e('Select header style template', 'paris'); ?></p></div>
            </div>


			           <div class="form-row">
                <div class="form-label"><?php _e('Home Style', 'paris'); ?></div>

                <div class="form-controls">
<select name="select-us" value="<?php echo osc_esc_html( osc_get_preference('select-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('select-us', 'paris') ); ?></option>
  <option>home1</option>
  <option>home2</option>
  <option>home3</option>
  <option>home4</option>
   <option>home5</option>
<option>homecustom</option>
</select>
</div>
<div class="form-controls"><p><?php _e('Select home style template', 'paris'); ?></p></div>
            </div>


			           <div class="form-row">
                <div class="form-label"><?php _e('Footer Style', 'paris'); ?></div>

                <div class="form-controls">
<select name="footer-vera" value="<?php echo osc_esc_html( osc_get_preference('footer-vera', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('footer-vera', 'paris') ); ?></option>
  <option>footer1</option>
  <option>footer2</option>
  <option>footer3</option>
  <option>footer4</option>
   <option>footer5</option>
</select>
</div>
<div class="form-controls"><p><?php _e('Select footer style template', 'paris'); ?></p></div>
            </div>


			           <div class="form-row">
                <div class="form-label"><?php _e('Single Product', 'paris'); ?></div>

                <div class="form-controls">
<select name="single-vera" value="<?php echo osc_esc_html( osc_get_preference('single-vera', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('single-vera', 'paris') ); ?></option>
  <option>single1</option>
  <option>single2</option>
  
</select>
</div>
<div class="form-controls"><p><?php _e('Select single product template ', 'paris'); ?></p></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Select Theme Color', 'paris'); ?></div>

                <div class="form-controls">
<select name="love-us" value="<?php echo osc_esc_html( osc_get_preference('love-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('love-us', 'paris') ); ?></option>
  <option>default</option>
  <option>vera</option>
  <option>facebook</option>
  <option>cerulean</option>
  <option>cosmo</option>
  <option>cyborg</option>
  <option>darkly</option>
   <option>flatly</option>
   <option>journal</option>
  <option>lumen</option>
  <option>paper</option>
   <option>readable</option>
<option>sandstone</option>
   <option>simplex</option>
   <option>slate</option>
  <option>spacelab</option>
  <option>superhero</option>
   <option>united</option>
<option>yeti</option>
</select>
</div>
<div class="form-controls"><p><?php _e('Select Theme style template', 'paris'); ?></p></div>
            </div>
			           

<div class="form-row">
                <div class="form-label"><?php _e('Search Placeholder', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="keyword_placeholder" value="<?php echo osc_esc_html( osc_get_preference('keyword_placeholder', 'paris') ); ?>"></div>
            </div>


 <div class="form-row">
                <div class="form-label"><?php _e('Footer Copyright', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="copyright-us" placeholder="Copyright © 2015 Osclass.me"><?php echo osc_esc_html( osc_get_preference('copyright-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('Copyright text on footer.', 'paris'); ?></div>
                </div>
            </div>
</fieldset>


			          </div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab2">
			          <label for="tab2"><?php _e('Widget', 'paris'); ?></label>
			          <div id="tab-content2" class="tab-content animated fadeIn"><div class="form-horizontal">
			          <fieldset>

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Widget Customize', 'paris'); ?></b></div>
            </div>


<div class="form-row">
                <div class="form-label"><?php _e('Title Widget', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="judul1-us" placeholder="Title Widget" value="<?php echo osc_esc_html( osc_get_preference('judul1-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Widget on Footer 1', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="about-us" placeholder="Add widget on left footer ex: facebook widget"><?php echo osc_esc_html( osc_get_preference('about-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('You can add widget on footer with your custom widget ex: facebook widget or twitter widget.', 'paris'); ?></div>
                </div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Title Widget', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="judul2-us" placeholder="Title Widget" value="<?php echo osc_esc_html( osc_get_preference('judul2-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Widget on Footer 2', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="about1-us" placeholder="Add widget on center footer ex: facebook widget"><?php echo osc_esc_html( osc_get_preference('about1-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('You can add widget on footer with your custom widget ex: facebook widget or twitter widget.', 'paris'); ?></div>
                </div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Title Widget', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="judul-us" placeholder="Title Widget" value="<?php echo osc_esc_html( osc_get_preference('judul-us', 'paris') ); ?>"></div>
            </div>
			            <div class="form-row">
                <div class="form-label"><?php _e('Widget on Footer 3', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="widget-us" placeholder="Add widget on right footer ex: facebook widget"><?php echo osc_esc_html( osc_get_preference('widget-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('You can add widget on footer with your custom widget ex: facebook widget or twitter widget.', 'paris'); ?></div>
                </div>
            </div>
</fieldset>

			          </div></div>
			        </li>

<li>
			          <input type="radio" name="tabs" id="tab3">
			          <label for="tab3"><?php _e('Social', 'paris'); ?></label>
			          <div id="tab-content3" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Social Network Customize', 'paris'); ?></b></div>
            </div>

<fieldset>
			            <div class="form-row">
                <div class="form-label"><?php _e('Facebook Link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="facebook-us" placeholder="http://facebook.com/osclass" value="<?php echo osc_esc_html( osc_get_preference('facebook-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Twitter Link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="twitter-us" placeholder="http://twitter.com/osclass" value="<?php echo osc_esc_html( osc_get_preference('twitter-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Google plus link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="gplus-us" placeholder="http://plus.google.com/osclass" value="<?php echo osc_esc_html( osc_get_preference('gplus-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Linkedin link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="linkedin-us" placeholder="http://linkedin.com/osclass" value="<?php echo osc_esc_html( osc_get_preference('linkedin-us', 'paris') ); ?>"></div>
            </div>

</fieldset>
			          </div></div>
			        </li>
<li>
			          <input type="radio" name="tabs" id="tab4">
			          <label for="tab4"><?php _e('Product', 'paris'); ?></label>
			          <div id="tab-content4" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Product Customize', 'paris'); ?></b></div>
            </div>

<fieldset>

<div class="form-row">
                <div class="form-label"><?php _e('Show lists as:', 'paris'); ?></div>
                <div class="form-controls">
                    <select name="defaultShowAs@all">
                        <option value="gallery" <?php if(paris_default_show_as() == 'gallery'){ echo 'selected="selected"' ;}?>><?php _e('Gallery','paris'); ?></option>
                        <option value="list" <?php if(paris_default_show_as() == 'list'){ echo 'selected="selected"' ;}?>><?php _e('List','paris'); ?></option>
                    </select>
                </div>
            </div>


<div class="form-row">
                <div class="form-label"><b><?php _e('Latest Ads (display)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="product-dis" value="<?php echo osc_esc_html( osc_get_preference('product-dis', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('product-dis', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Show Latest Ads', 'paris'); ?></div>

                <div class="form-controls">
<p><?php _e('Setting latest Ads Show, on Admin>> show more>> settings>> general', 'paris'); ?></p>
</div>
            </div>

<div class="form-row">
                <div class="form-label"><b><?php _e('Premium Ads (slider)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="popular-dis" value="<?php echo osc_esc_html( osc_get_preference('popular-dis', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('popular-dis', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Show Premium Slider Ads', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="popularads_num_ads" placeholder="8" value="<?php echo osc_esc_html( osc_get_preference('popularads_num_ads', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><b><?php _e('Premium Ads (display)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="premium-dis" value="<?php echo osc_esc_html( osc_get_preference('premium-dis', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('premium-dis', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Show Premium Ads', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="premiumads_num_ads" placeholder="8" value="<?php echo osc_esc_html( osc_get_preference('premiumads_num_ads', 'paris') ); ?>"></div>
            </div>
</fieldset>
			           
			          </div></div>
			        </li>
<li>
			          <input type="radio" name="tabs" id="tab5">
			          <label for="tab5"><?php _e('Ads', 'paris'); ?></label>
			          <div id="tab-content5" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Advertiser Customize', 'paris'); ?></b></div>
            </div>

<fieldset>
			            <div class="form-row">
                <div class="form-label"><?php _e('Header Ads 728x90', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="header-728x90"><?php echo osc_esc_html( osc_get_preference('header-728x90', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the top of your website. Note that the size of the ad has to be 728x90 pixels.', 'paris'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Footer Ads 728x90', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="homepage-728x90"><?php echo osc_esc_html( osc_get_preference('homepage-728x90', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the footer of your website. Note that the size of the ad has to be 728x90 pixels.', 'paris'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Search results 728x90 (top of the page)', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-results-top-728x90"><?php echo osc_esc_html( osc_get_preference('search-results-top-728x90', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on top of the search results of your site. Note that the size of the ad has to be 728x90 pixels.', 'paris'); ?></div>
                </div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Sidebar 160x600', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="sidebar-160x600"><?php echo osc_esc_html( osc_get_preference('sidebar-160x600', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the right sidebar of your website. Note that the size of the ad has to be 160x600 pixels.', 'paris'); ?></div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-label"><?php _e('Sidebar 300x250', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="sidebar-300x250"><?php echo osc_esc_html( osc_get_preference('sidebar-300x250', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the right sidebar of your website. Note that the size of the ad has to be 300x350 pixels.', 'paris'); ?></div>
                </div>
            </div>
</fieldset>
			          </div></div>
			        </li>
			        <li>
			          <input type="radio" name="tabs" id="tab6">
			          <label for="tab6"><?php _e('Slider', 'paris'); ?></label>
			          <div id="tab-content6" class="tab-content animated fadeIn"><div class="form-horizontal">
<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Slider Text Customize', 'paris'); ?></b></div>
            </div>
<fieldset>
<div class="form-row">
                    <div class="help-box"><?php _e('Upload your slider images from menu <b>Appearance >> paris slider</b>. This text slider available on home style 1, 3 and 4', 'paris'); ?></div></div>

<div class="form-row">
                <div class="form-label"><?php _e('Slider Mode', 'paris'); ?></div>
<div class="form-controls">
<select name="ari-us" value="<?php echo osc_esc_html( osc_get_preference('ari-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('ari-us', 'paris') ); ?></option>
  <option>container</option>
  <option>wrapper</option> 
</select>
</div>
            </div>

			            <div class="form-row">
                <div class="form-label"><b><?php _e('Slider 1 Text', 'paris'); ?></b></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider1-us" placeholder="welcome to classifieds" value="<?php echo osc_esc_html( osc_get_preference('slider1-us', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Slider 1 button', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider12-us" placeholder="Register" value="<?php echo osc_esc_html( osc_get_preference('slider12-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Slider 1 Link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider12-link" placeholder="http://osclass.me" value="<?php echo osc_esc_html( osc_get_preference('slider12-link', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><b><?php _e('Slider 2 Text', 'paris'); ?></b></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider2-us" placeholder="welcome to classifieds" value="<?php echo osc_esc_html( osc_get_preference('slider2-us', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Slider 2 button', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider22-us" placeholder="Visit Now" value="<?php echo osc_esc_html( osc_get_preference('slider22-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Slider 2 Link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider22-link" placeholder="http://osclass.me" value="<?php echo osc_esc_html( osc_get_preference('slider22-link', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><b><?php _e('Slider 3 Text', 'paris'); ?></b></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider3-us" placeholder="welcome to classifieds" value="<?php echo osc_esc_html( osc_get_preference('slider3-us', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Slider 3 button', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider32-us" placeholder="Order Now" value="<?php echo osc_esc_html( osc_get_preference('slider32-us', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Slider 3 Link', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="slider32-link" placeholder="http://osclass.me" value="<?php echo osc_esc_html( osc_get_preference('slider32-link', 'paris') ); ?>"></div>
            </div>
</fieldset>

			          </div></div>
			        </li>
<li>
			          <input type="radio" name="tabs" id="tab7">
			          <label for="tab7"><?php _e('Custom Style', 'paris'); ?></label>
			          <div id="tab-content7" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Background Customize', 'paris'); ?></b></div>
            </div>

<fieldset>
<div class="form-row">
                <div class="form-label"><?php _e('Background Color', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="back-color" placeholder="#dddddd" value="<?php echo osc_esc_html( osc_get_preference('back-color', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Background Image Url', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="back-url" placeholder="insert url image" value="<?php echo osc_esc_html( osc_get_preference('back-url', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Background Repeat', 'paris'); ?></div>
<div class="form-controls">
<select name="back-rep" value="<?php echo osc_esc_html( osc_get_preference('back-rep', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('back-rep', 'paris') ); ?></option>
  <option>repeat</option>
  <option>repeat-x</option>
  <option>repeat-y</option>
  <option>no-repeat</option>
   
</select>
</div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Background position', 'paris'); ?></div>
<div class="form-controls">
<select name="back-pos" value="<?php echo osc_esc_html( osc_get_preference('back-pos', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('back-pos', 'paris') ); ?></option>
  <option>top left</option>
  <option>top center</option>
  <option>top right</option>
  <option>center center</option>
   <option>bottom left</option>
    <option>bottom center</option>
 <option>bottom right</option>
</select>
</div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Background Attachment', 'paris'); ?></div>
<div class="form-controls">
<select name="back-mode" value="<?php echo osc_esc_html( osc_get_preference('back-mode', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('back-mode', 'paris') ); ?></option>
  <option>scroll</option>
  <option>fixed</option> 
</select>
</div>
            </div>
<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Theme Color Customize', 'paris'); ?></b></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Theme Color', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="theme-color" placeholder="#dddddd" value="<?php echo osc_esc_html( osc_get_preference('theme-color', 'paris') ); ?>"></div>
<div class="form-controls"><p><?php _e('leave blank if you use color default. get color code', 'paris'); ?> <a href="http://www.w3schools.com/tags/ref_colorpicker.asp" target="_blank">click here</a> </p></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Custom CSS', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="address-us" placeholder="insert custom css"><?php echo osc_esc_html( osc_get_preference('address-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('you can costumize css.', 'paris'); ?></div>
                </div>
            </div>
</fieldset>

			          </div></div>
			        </li>

<li>
			          <input type="radio" name="tabs" id="tab8">
			          <label for="tab8"><?php _e('SEO', 'paris'); ?></label>
			          <div id="tab-content8" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('Search engine optimization', 'paris'); ?></b></div>
            </div>
<fieldset>
			            <div class="form-row">
                <div class="form-label"><?php _e('Site Name', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-sitename" placeholder="your sitename" value="<?php echo osc_esc_html( osc_get_preference('seo-sitename', 'paris') ); ?>"></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Site Description', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-description" placeholder="buy and sell car, realestate and more" value="<?php echo osc_esc_html( osc_get_preference('seo-description', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Site Keywords', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-keywords" placeholder="realestate, car, buy, sell, paris" value="<?php echo osc_esc_html( osc_get_preference('seo-keywords', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Google Verification Code', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-google" placeholder="your google code" value="<?php echo osc_esc_html( osc_get_preference('seo-google', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Bing Validate', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-bing" placeholder="Bing Validate" value="<?php echo osc_esc_html( osc_get_preference('seo-bing', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Alexa Verify ID', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-alexa" placeholder="Alexa Verify ID" value="<?php echo osc_esc_html( osc_get_preference('seo-alexa', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Geo Country Code', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-geo" placeholder="en" value="<?php echo osc_esc_html( osc_get_preference('seo-geo', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Country', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-country" placeholder="America" value="<?php echo osc_esc_html( osc_get_preference('seo-country', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Author Name', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-author" placeholder="Author name" value="<?php echo osc_esc_html( osc_get_preference('seo-author', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Language Code', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-language" placeholder="en" value="<?php echo osc_esc_html( osc_get_preference('seo-language', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Copyright Author', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-copyright" placeholder="your sitename" value="<?php echo osc_esc_html( osc_get_preference('seo-copyright', 'paris') ); ?>"></div>
            </div>
<div class="form-row">
                <div class="form-label"><?php _e('Subject Website', 'paris'); ?></div>
                <div class="form-controls"><input type="text" class="xlarge" name="seo-subject" placeholder="buy and sell realestate" value="<?php echo osc_esc_html( osc_get_preference('seo-subject', 'paris') ); ?>"></div>
            </div>
</fieldset>
			          </div></div>
			        </li>
<li>
			          <input type="radio" name="tabs" id="tab9">
			          <label for="tab9"><?php _e('More', 'paris'); ?></label>
			          <div id="tab-content9" class="tab-content animated fadeIn"><div class="form-horizontal">

<div class="form-row">
                
                <div class="opt-title"><b><?php _e('More settings', 'paris'); ?></b></div>
            </div>

<fieldset>
<div class="form-row">
                <div class="form-label"><b><?php _e('Link Terms of Use', 'paris'); ?></b></div>
                <div class="form-controls"><input type="text" class="xlarge" name="tos-me" placeholder="http://osclass.me/Terms-of-use" value="<?php echo osc_esc_html( osc_get_preference('tos-me', 'paris') ); ?>"></div>
                 <div class="form-controls"><p><?php _e('create new pages TOS and copy url here', 'paris'); ?></p></div>
            </div>

			          
 <div class="form-row">
                <div class="form-label"><b><?php _e('Facebook Login (display)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="fb-us" value="<?php echo osc_esc_html( osc_get_preference('fb-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('fb-us', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div>
<div class="form-controls"><p><?php _e('you must install fb login plugin, before activate to yes', 'paris'); ?></p></div>
            </div>

<div class="form-row">
                <div class="form-label"><b><?php _e('Watchlist (display)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="wl-us" value="<?php echo osc_esc_html( osc_get_preference('wl-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('wl-us', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div><div class="form-controls">
<p><?php _e('you must install watchlist plugin, before activate to yes', 'paris'); ?></p></div>
            </div>


<div class="form-row">
                <div class="form-label"><b><?php _e('Custom Home HTML (display)', 'paris'); ?></b></div>

                <div class="form-controls">
<select name="phone-us" value="<?php echo osc_esc_html( osc_get_preference('phone-us', 'paris') ); ?>">
  <option><?php echo osc_esc_html( osc_get_preference('phone-us', 'paris') ); ?></option>
  <option>yes</option>
  <option>none</option> 
</select>
</div>
<div class="form-controls"><p><?php _e('you can customize html code on home', 'paris'); ?></p></div>
            </div>

<div class="form-row">
                <div class="form-label"><?php _e('Custom Home HTML', 'paris'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="memo-us" placeholder="insert your html code on home"><?php echo osc_esc_html( osc_get_preference('memo-us', 'paris') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('you can costumize html on home under slider.', 'paris'); ?></div>
                </div>
            </div>




			          </div></div>
			        </li>

			    </ul>

                <input type="submit" value="<?php _e('Save changes', 'paris'); ?>" class="btn btn-submit" style="float: right;"><br>
            
</div>
<input type="submit" value="<?php _e('Save changes', 'paris'); ?>" class="btn btn-submit" style="float: right;"><br>
 
    </fieldset>
</form>
</div>
<center><p><a title="What's new in paris themes?" href="http://osclass.me/update-paris-theme/" target="_blank"><?php _e('Paris version 1.9.5', 'paris'); ?></a> | by <a title="Paris Themes Powered by OsclassDotMe" target="_blank" href="http://osclass.me"><?php _e('Osclass.Me', 'paris'); ?></a></p></center>