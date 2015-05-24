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

    osc_get_premiums();
    if(osc_count_premiums() > 0) {
?>
<table border="0" cellspacing="0">
     <tbody>
        <?php $class = "even"; ?>
        <?php while(osc_has_premiums()) { ?>
            <div class="col-md-12 premium_<?php echo $class; ?> thumbnail">
                <?php if( osc_images_enabled_at_items() ) { ?>
                 <div class="col-md-3">
                     <?php if(osc_count_premium_resources()) { ?>
                        <a href="<?php echo osc_premium_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo osc_premium_url(); ?>"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" /></a>
                    <?php } ?>
                 </div>
				 <div class="type_list"><?php echo osc_premium_category(); ?></div>
                 <?php } ?><span class="cat-label cat-label-label2">Hot!</span>
                 <div class="col-md-9 text kat1">
                     <h3>
                         <span><a href="<?php echo osc_premium_url(); ?>"><?php echo osc_highlight( strip_tags( osc_premium_title() ) ); ?></a></span>
                     </h3>
                     <small>
                         <strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { echo osc_premium_formated_price(); ?> </strong> </small>
<p><?php echo osc_highlight( strip_tags( osc_premium_description() ) ); ?></p><br><p> <i title="Location" class="fa fa-map-marker"></i> <?php } echo osc_premium_city(); ?>.<?php echo osc_premium_region(); ?> <i title="date published" class="fa fa-calendar"></i> <?php echo osc_format_date(osc_premium_pub_date()); ?></p>
                 </div>
             </div>
            <?php $class = ($class == 'even') ? 'odd' : 'even'; ?>
        <?php } ?>
    </tbody>
</table>
<?php } ?>
<table border="0" cellspacing="0">
    <tbody>
        <?php $class = "even"; $i = 0; ?>
        <?php while(osc_has_items()) { $i++; ?>
            <div class="col-md-12 <?php echo $class; ?> thumbnail">
                <?php if( osc_images_enabled_at_items() ) { ?>
                 <div class="col-md-3">
                     <?php if(osc_count_item_resources()) { ?>
                        <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>"  title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" /></a>
                    <?php } else { ?>
                         <a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" title="" alt="" /></a>
                    <?php } ?>
                 </div>
				 <div class="type_list"><?php echo osc_item_category(); ?></div>
                 <?php } ?>
                 <div class="col-md-9 text kat1">
                     <h3>
                         <a href="<?php echo osc_item_url(); ?>"><?php echo osc_highlight( strip_tags( osc_item_title() ) ); ?></a>
                     </h3>
                     <small>
                         <strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); ?></strong></small> 
                     <p><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?></p><br><p><i title="Location" class="fa fa-map-marker"></i> <?php } echo osc_item_city(); ?>.<?php echo osc_item_region(); ?>   <i title="Date Published" class="fa fa-calendar"></i> <?php echo osc_format_date(osc_item_pub_date()); ?>
                 </div>
             </div>
            <?php $class = ($class == 'even') ? 'odd' : 'even'; ?>
             <?php if( $i == 5 ) { ?>
    </tbody>
</table>
            <?php osc_run_hook('search_ads_listing_medium1'); ?>
<table border="0" cellspacing="0">
    <tbody>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>

<style>
.type_list{
		 width: 21.3%;
		 height: 25px;
		 position: absolute;
		 background: rgba(24, 188, 156, .9);
		 color: #ffffff;
		 text-align:center;
		 margin:100px 15px 5px;
</style>
