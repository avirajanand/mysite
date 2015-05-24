<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2013 Osclass
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
          <?php osc_current_web_theme_path('header.php') ; ?>    	  
  <div class="content home">
        <?php osc_current_web_theme_path('slider.php') ; ?>    
		
		
		<?php osc_current_web_theme_path('bookslot.php') ; ?>    	  
        <div id="main">

		  
			
			
                <div class="explore_categories">
				<h2><?php _e("Explore Sports ", 'realestate');?></h2>
                    <?php osc_goto_first_category() ; ?>
                    <?php while ( osc_has_categories() ) { ?>
                            <h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
                    <?php } ?>
                    <div class="clear"></div>
               </div>
			   <div class="explore_location">
				<h2><?php _e("Explore Location ", 'realestate');?></h2>
                    <?php osc_goto_first_category() ; ?>
                    
                            <h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
							
							<h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
							<h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
							<h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
							<h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
							<h4><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h4>
                    
                    <div class="clear"></div>
               </div>
			   
            <div id="latest-ads">    
				<div class="latest-ads-text"><?php _e('Latest Listings', 'realestate') ; ?></div>	
				
				</hr>
                <?php if( osc_count_latest_items() == 0) { ?>
                    <p class="empty"><?php _e('No Latest Venues', 'realestate') ; ?></p>
                <?php } else { ?>
                    <?php $item_count=0; while ( osc_has_latest_items() ) { if($item_count < osc_max_latest_items()){ ?>
                        <div class="ui-item ui-item-list">
                            <div class="frame">
                                <a href="<?php echo osc_item_url() ; ?>"><?php if( osc_images_enabled_at_items() ) { ?>
                                    <?php if( osc_count_item_resources() ) { ?>
                                        <img src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>"/>
                                    <?php } else { ?>
                                        <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                    <?php } ?>
                                <?php } else { ?>
                                    <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif') ; ?>" alt="" title=""/>
                                <?php } ?>
                                <div class="type"><?php echo osc_item_category(); ?></div>
                                <?php if( osc_price_enabled_at_items() ) { ?><div class="price"><?php echo osc_item_formated_price() ; ?></div> <?php } ?>
                                </a>
                            </div>
                            <div class="info">
                                <div>
                                    <h3><a href="<?php echo osc_item_url() ; ?>"><?php if(strlen(osc_item_title()) > 31){ echo substr(osc_item_title(), 0, 28).'...'; } else { echo osc_item_title(); } ?></a></h3>
                                </div>
                                <div class="data"><?php item_realestate_attributes(); ?></div>
                                <div class="author">
                                    <?php //echo osc_format_date(osc_item_pub_date()); ?><br />
                                    <?php echo osc_item_city(); ?> (<?php echo osc_item_region();?>)
                                </div>
                            </div>
                        </div>
                    <?php } $item_count++;} ?>
                <div class="clear"></div>
                <?php View::newInstance()->_erase('items') ;
                } ?>
            </div>
            <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
                <div class="pagination-box">
                    <a href="<?php echo osc_search_show_all_url();?>" class="ui_button ui-button-green"><?php _e("See all Venues", 'realestate'); ?> &raquo;</a></p>
                </div>
            <?php } ?>
        </div>
        <?php osc_current_web_theme_path('footer.php') ; ?>
