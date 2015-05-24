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
<div class="container">
        <div class="col-md-6">
           
           <?php osc_current_web_theme_path('inc.region.php') ; ?>
                   </div>
        <div class="col-md-6">
          
            
              
           <div class="row ulfa wpb_start_animation wpb_right-to-left"><div class="panel panel-success">
<div class="panel-heading">Featured Items</div>
  <div class="panel-body">
          <?php osc_current_web_theme_path('slider.php') ; ?>
          </div></div></div>


<?php
    osc_get_premiums($max = 5) ;
    if( osc_count_premiums() > 0 ) {
?>
<div class="row">
<div class="panel panel-success">
<div class="panel-heading">Top On the Week</div>
  <div class="panel-body">
<?php while ( osc_has_premiums() ) { ?>
    <div class="row irma">
        <div class="col-md-3">
        <?php if( osc_count_premium_resources() ) { ?>
            <a class="thumbnail" style="height: inherit;" href="<?php echo osc_premium_url() ; ?>">
                <img src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_premium_title(); ?>" alt="<?php echo osc_premium_title(); ?>" />
            </a>
        <?php } else { ?><a class="thumbnail" href="<?php echo osc_premium_url() ; ?>">
            <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/></a>
        <?php } ?>
        </div>
        <div class="col-md-9">
            <?php if( osc_price_enabled_at_items() ) { ?> <small><strong><?php echo osc_premium_formated_price() ; ?></strong></small><br><?php } ?><a href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a>
            <p><?php printf(__('<strong>Publish date</strong>: %s', 'paris'), osc_format_date( osc_premium_pub_date() ) ) ; ?></p>
            <?php
                $location = array() ;
               
                if( osc_premium_region() != '' ) {
                    $location[] = sprintf( __('<strong>Region</strong>: %s', 'paris'), osc_premium_region() ) ;
                }
                if( osc_premium_city() != '' ) {
                    $location[] = sprintf( __('<strong>City</strong>: %s', 'paris'), osc_premium_city() ) ;
                }

                if( count($location) > 0) { ?>
                    <?php echo implode(' ', $location) ; ?>
                <?php } ?>
            
        </div>
    </div>
    <?php } ?>
<?php } ?></div></div>
    </div>
</div>
        </div>
      </div>
<div style="display:<?php echo osc_get_preference('phone-us', 'paris'); ?>" class="container">
<?php echo osc_get_preference('memo-us', 'paris'); ?>
</div>
<?php osc_current_web_theme_path('popular.php') ; ?>