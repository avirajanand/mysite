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

    osc_get_premiums($max = 3);
    if(osc_count_premiums() > 0) {
?>
<style>.list-group-item .thumbnail {
height: 370px;
}</style>
<table border="0" cellspacing="0">
     <tbody>
        <?php $class = "even"; ?>
        <?php while(osc_has_premiums()) { ?><div class="col-xs-6 col-md-4 grid-group-item">
            <div class="col-md-12 premium_<?php echo $class; ?> thumbnail">
                <?php if( osc_images_enabled_at_items() ) { ?>
                 <div class="sd">
                     <?php if(osc_count_premium_resources()) { ?>
                        <a href="<?php echo osc_premium_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo osc_premium_url(); ?>"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" /></a>
                    <?php } ?>
                 </div>
                 <?php } ?><span class="cat-label cat-label-label2">Hot!</span>
                 <div style="text-align:center;" class="caption">
                     <h3>
                         <span><a href="<?php echo osc_premium_url(); ?>"><?php echo osc_highlight( strip_tags( osc_premium_title() ) ); ?></a></span>
                     </h3>
                     <p>
                         <strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { echo osc_premium_formated_price(); ?></strong> <br><p><i title="Location" class="fa fa-map-marker"></i> <?php } echo osc_premium_city(); ?> <?php echo osc_premium_region(); ?></p>
                     </p><br><a class="btn btn-success btn-sm btn-search" href="<?php echo osc_premium_url(); ?>">More Details</a>
                     
                 </div>
             </div> </div>
            <?php $class = ($class == 'even') ? 'odd' : 'even'; ?>
        <?php } ?>
    </tbody>
</table>
<?php } ?>
<table border="0" cellspacing="0">
    <tbody>
        <?php $class = "even"; ?>
        <?php while(osc_has_items()) { ?><div class="col-xs-6 col-md-4 grid-group-item">
            <div class="<?php echo $class; ?> thumbnail">
                <?php if( osc_images_enabled_at_items() ) { ?>
                 <div class="sd">
                     <?php if(osc_count_item_resources()) { ?>
                        <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" /></a>
                    <?php } ?>
                 </div>
                 <?php } ?>
                 <div style="text-align:center;" class="caption">
                     <h3><a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></h3>
                       
                        <p><strong> <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); ?></strong><br><p><i title="Location" class="fa fa-map-marker"></i> <?php } echo osc_item_city(); ?>.<?php echo osc_item_region(); ?> </p>
                     </p><br><a class="btn btn-success btn-sm btn-search" href="<?php echo osc_item_url(); ?>">More Details</a>
                     
                 </div>
             </div></div>
            <?php $class = ($class == 'even') ? 'odd' : 'even'; ?>
        <?php } ?>
    </tbody>
</table>