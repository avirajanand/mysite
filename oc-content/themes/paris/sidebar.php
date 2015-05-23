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
<div class="col-md-4">
          <div class="row">


<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading"> <span class="fa  fa-bullhorn"></span> <b><?php _e('Sponsored ad', 'paris') ; ?></b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">


<?php
    osc_get_premiums($max = 9) ;
    if( osc_count_premiums() > 0 ) {
?>
<?php while ( osc_has_premiums() ) { ?>

<li class="news-item" style="margin-bottom:5px;">
<table cellpadding="4">
<tr>
<?php if( osc_count_premium_resources() ) { ?>

<td><a class="pull-left" href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_premium_title(); ?>"><img class="media-object" src="<?php echo osc_resource_thumbnail_url() ; ?>" title="" alt="<?php echo osc_premium_title(); ?>" style="width: 60px; height: 60px;"></a></td>
                          
              <td><div class="media-body">
                <p><a href="<?php echo osc_premium_url() ; ?>" title="<?php echo osc_premium_title(); ?>"><strong><?php echo osc_premium_title(); ?></strong></a></p>
                <?php if( osc_price_enabled_at_items() ) { ?> <?php } ?><?php if( osc_price_enabled_at_items() ) { ?> <small><strong><?php echo osc_premium_formated_price() ; ?></strong></small><?php } ?>
              </div></td>

 <?php } ?>
</tr>
</table>
</li>

 <?php } ?>
 <?php } ?>


</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>






			        
        			  
			<div class="col-lg-12 col-md-6  col-sm-6  "><div class="panel panel-default"><div class="panel-heading"><span class="fa fa-th-list"></span> <b><?php _e('Latest Listings', 'paris') ; ?></b></div>

<div class="panel-body">

<?php if( osc_count_latest_items($max = 6) == 0) { ?>
                        <p class="empty"><?php _e('No Latest Listings', 'brasil'); ?></p>
                    <?php } else { ?>
                       

                                <?php $class = "even"; ?>
                                <?php while ( osc_has_latest_items() ) { ?>
        <div class="media">
<?php if( osc_images_enabled_at_items() ) { ?>
  <?php if( osc_count_item_resources() ) { ?>
  
	        			<a class="pull-left" href="<?php echo osc_item_url(); ?>" title="<?php echo osc_item_title(); ?>"><img class="media-object" src="<?php echo osc_resource_thumbnail_url(); ?>" title="" alt="<?php echo osc_item_title(); ?>" style="width: 64px; height: 64px;"></a><?php } else { ?><a href="<?php echo osc_item_url(); ?>">
            <img class="media-object" src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" style="width: 64px; height: 64px;" alt="" title=""/></a>
        <?php } ?>
                          
              <div class="media-body">
                <p><a href="<?php echo osc_item_url(); ?>"><strong><?php echo osc_item_title(); ?></strong></a></p>
                 <small><strong><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); ?></strong></small>

<?php } ?>
              </div>
            
 <?php } ?>

</div>
 <?php } ?>
 <?php } ?>
					</div><p class="text-right col-md-12"><a href="<?php echo osc_base_url() ; ?>search"><?php _e('See all offers', 'paris') ; ?></a></p>
					<div class="clear"></div>
					
				</div><div class="clear"></div><div class="col-md-12 advertise  text-center">
						  
 
			<div class="ayu">
			 
					
					<center class="ads-right2"><?php echo osc_get_preference('sidebar-300x250', 'paris'); ?></center>
			</div>
        


					  </div>				  </div>
				  
			  <div></div></div>
          </div>
          
        </div>
<script src="<?php echo osc_current_web_theme_js_url('jquery.bootstrap.newsbox.min.js') ; ?>"></script>
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
        });
</script>