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
<div class="popular">

<div class="ari"><h2><?php _e('Premium Listings', 'paris') ; ?></h2>
</div>
          <div class="row">

              <div id="owl-demo" class="owl-carousel">

    
	   <?php
    osc_get_premiums($max = osc_get_preference('popularads_num_ads', 'paris')) ;
    if( osc_count_premiums() > 0 ) {
?>
<?php while ( osc_has_premiums() ) { ?>

<div class="item col-md-12">
			<div class="thumbnail">
<?php if( osc_count_premium_resources() ) { ?>
			<a href="<?php echo osc_premium_url() ; ?>"><img class="group list-group-image" src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_premium_title(); ?>" alt="<?php echo osc_premium_title(); ?>" /></a><?php } else { ?><a href="<?php echo osc_premium_url() ; ?>">
            <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/></a>
        <?php } ?>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                       <?php if( osc_price_enabled_at_items() ) { ?> <?php } ?><?php if( osc_price_enabled_at_items() ) { ?> <small><strong><?php echo osc_premium_formated_price() ; ?></strong></small><?php } ?><br></br><a href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a></h4>
                    <p class="group inner list-group-item-text">
                     <p><?php echo osc_highlight( strip_tags( osc_premium_description() ) ); ?></p>
                        <?php
                $location = array() ;
               if( osc_premium_city() != '' ) {
                    $location[] = sprintf( __('<strong><i title="Location" class="fa fa-map-marker"></i></strong> %s', 'paris'), osc_premium_city() ) ;
                }
                if( osc_premium_region() != '' ) {
                    $location[] = sprintf( __(' %s', 'paris'), osc_premium_region() ) ;
                }
                

                if( count($location) > 0) { ?>
                    <?php echo implode(' &middot; ', $location) ; ?><br></br>
<a class="btn btn-success btn-sm btn-search" href="<?php echo osc_premium_url() ; ?>"><?php _e('More Details', 'paris') ; ?></a>
                <?php } ?></p>
<div class="row">
                        <div class="col-xs-12 col-md-6">
                            
                        </div>
                        <div class="col-xs-12 col-md-6">
                            
                        </div>
                   </div>
		</div>                                       
		</div>
</div>
			
			<?php } ?>  <?php } ?>
		   </div>
		
	  
  </div></div>
<script src="<?php echo osc_current_web_theme_js_url('owl.carousel.js') ; ?>"></script> 


    <!-- Demo -->

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
