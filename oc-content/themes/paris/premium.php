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
<div style="display:<?php echo osc_get_preference('premium-dis', 'paris'); ?>" class="container">
<div class="ari"><h2><?php _e('Premium Listings', 'paris') ; ?></h2></div>
    <div class="well-sm">
        <strong><?php _e('Premium Listings', 'paris') ; ?></strong>
        <div class="btn-group right"><a title="Show Grid" href="#" id="grid" class="btn btn-default btn-sm"><span
                class="fa fa-th"></span> Grid</a>
            <a title="Show List" href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-th-list">
            </span> List</a>
        </div>
    </div>

<div id="products" class="row list-group">

<?php
    osc_get_premiums($max = osc_get_preference('premiumads_num_ads', 'paris')) ;
    if( osc_count_premiums() > 0 ) {
?>
<?php while ( osc_has_premiums() ) { ?>
        <div class="item  col-xs-6 col-md-3">
            <div class="thumbnail">
<?php if( osc_count_premium_resources() ) { ?>

                <a href="<?php echo osc_premium_url() ; ?>"><img class="group list-group-image" src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_premium_title(); ?>" alt="<?php echo osc_premium_title(); ?>" /></a><?php } else { ?><a href="<?php echo osc_premium_url() ; ?>">
            <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/></a>
        <?php } ?>
		<div class="type"><?php echo osc_premium_category(); ?></div>
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
          <?php } ?><?php } ?>
    </div>
</div>
<style>.tombol{display:none;}
.cat-label {
background-color: #EB2727;
color: #fff;
top: 10px;
right: 25px;
font: inherit;
font-size: 10px;
padding: 8px;
z-index: 1;
border-radius: 2px;
line-height: 1;
}
</style>