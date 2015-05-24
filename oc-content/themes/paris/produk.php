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
<div style="display:<?php echo osc_get_preference('product-dis', 'paris'); ?>" class="container">
<div class="ari"><h2><?php _e('Latest Listings', 'paris') ; ?></h2></div>
    <div class="well-sm tombol">
        <strong><?php _e('Latest Listings', 'paris') ; ?></strong>
        <div class="btn-group right"><a title="Show Grid" href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
            <a title="Show List" href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a>
        </div>
    </div>

<div id="products" class="row list-group">

<?php if( osc_count_latest_items() == 0) { ?>
                        <p class="empty"><?php _e('No Latest Listings', 'brasil'); ?></p>
                    <?php } else { ?>
                       

                                <?php $class = "even"; ?>
                                <?php while ( osc_has_latest_items() ) { ?>
        <div class="item  col-xs-6 col-md-3">
            <div class="thumbnail">
 <?php if( osc_images_enabled_at_items() ) { ?>
  <?php if( osc_count_item_resources() ) { ?>
                <a href="<?php echo osc_item_url(); ?>"><img class="group list-group-image" src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a><?php } else { ?><a href="<?php echo osc_item_url(); ?>">
            <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" alt="" title=""/></a>
        <?php } ?><?php if( osc_item_is_premium() ) { ?> <span class="cat-label cat-label-label2">Hot!</span><?php } ?>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <small><strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); ?></strong></small><br></br><a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></h4>
                    <p class="group inner list-group-item-text">
                     <p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p>
                        <strong><i title="Location" class="fa fa-map-marker"></i></strong> <?php } echo osc_item_city(); ?>-<?php echo osc_item_region();?></strong><br></br>
<a class="btn btn-success btn-sm btn-search" href="<?php echo osc_item_url(); ?>"><?php _e('More Details', 'paris') ; ?></a>
                <?php $class = ($class == 'even') ? 'odd' : 'even'; ?></p>
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

<?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?><div class="row show-all-ads">
                        <div class="col-md-12">
                        <p class='pagination'><?php echo osc_search_pagination(); ?></p>
                            <a class="btn btn-success" href="<?php echo osc_search_show_all_url();?>"><strong><?php _e("See all offers", 'paris'); ?> &raquo;</strong></a></div></div>
                        <?php } ?>
                    <?php View::newInstance()->_erase('items'); } ?>
</div>