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
<!-- footer -->
<div class="container"><center class="ad-footers"><?php echo osc_get_preference('homepage-728x90', 'paris'); ?></center></div>

<footer id="footer" class="navbar-default">
<div class="full">

        <div id="footer-main">
          <div class="container">
            <div class="row">
              
              <div class="col-md-3 col-sm-6 info-box social-box">
                <h2 class="title"><?php _e('Social Network', 'paris'); ?></h2>
                <div><div class="icon-box">
        <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('facebook-us', 'paris'); ?>">
                    <i class="fa fa-facebook-square text-dark"></i> <?php _e('FACEBOOK', 'paris'); ?>
                  </a> </div>
                  <div class="icon-box"><a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('twitter-us', 'paris'); ?>">
                    <i class="fa fa-twitter-square text-dark"></i> <?php _e('TWITTER', 'paris'); ?>
                  </a> </div>
                  <div class="icon-box"> <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('gplus-us', 'paris'); ?>">
                    <i class="fa fa-google-plus-square text-dark"></i> <?php _e('GOOGLE PLUS', 'paris'); ?>
                  </a> </div>
                 <div class="icon-box"> <a target="_blank" class="btn btn-circle btn-lg-light btn-sm" href="<?php echo osc_get_preference('linkedin-us', 'paris'); ?>">
                    <i class="fa fa-linkedin-square text-dark"></i> <?php _e('LINKEDIN', 'paris'); ?>
                  </a> </div>
        </div>
    </div>
                <div class="col-md-3 col-sm-6 info-box">
                <h2 class="title"><?php echo osc_get_preference('judul1-us', 'paris'); ?></h2>
                <div><?php echo osc_get_preference('about-us', 'paris'); ?></div>
              </div>

<div class="col-md-3 col-sm-6 info-box">
                <h2 class="title"><?php echo osc_get_preference('judul2-us', 'paris'); ?></h2>
                <div><?php echo osc_get_preference('about1-us', 'paris'); ?></div>
              </div>
              
              <div class="col-md-3 col-sm-6 info-box">
                <h2 class="title"><?php echo osc_get_preference('judul-us', 'paris'); ?></h2>
                <div><?php echo osc_get_preference('widget-us', 'paris'); ?></div>
              </div>
            </div>
          </div>
        </div>
        <div id="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 clearfix">
                <p class="copyright">
                  <?php echo osc_get_preference('copyright-us', 'paris'); ?>
                </p>
                <div class="links">
<a style="margin-right:10px;" href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'paris'); ?></a>
        <?php osc_reset_static_pages(); ?>
        <?php while( osc_has_static_pages() ) { ?>
           <a style="margin-right:10px;" href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a>
        <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
   
  
</div>
 </footer>
<!-- footer end -->
</div>
<script type="text/javascript" src="<?php echo osc_current_web_theme_url('js/pgwslider.js') ; ?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
		</script>
<script type="text/javascript">
			$(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });

		</script>
<script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
<script type="text/javascript">
  $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
</script>