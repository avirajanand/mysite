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
	<script>
    jQuery(document).ready(function ($) {

  
    setInterval(function () {
        moveRight();
    }, 3000);
 
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    

	</script>	
        <div id="main">
            <div id="slider" style="width: 793px; height: 300px;">
				  <a href="#" class="control_next">></a>
				  <a href="#" class="control_prev"><</a>
				  <ul>
				    <li><img src="http://localhost:8080/mysite/oc-content\themes\realestate\images\alila\01.jpg" /></li>
				    <li style="background: #aaa;"><img src="http://localhost:8080/mysite/oc-content\themes\realestate\images\alila\02.jpg"/></li>
				    <li><img src="http://localhost:8080/mysite/oc-content\themes\realestate\images\alila\03.jpg"/></li>
				    <li style="background: #aaa;"><img src="http://localhost:8080/mysite/oc-content\themes\realestate\images\alila\04.jpg"/></li>
				  </ul>  
			</div>
			
			
			
			<h2><?php _e("Which game do you wish to play today?", 'realestate');?></h2>
                <div class="categories">
                    <?php osc_goto_first_category() ; ?>
                    <?php while ( osc_has_categories() ) { ?>
                            <h2><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?></a></h2>
                    <?php } ?>
                    <div class="clear"></div>
               </div>
				<hr/>
           <div id="premium-stage">
                <?php if( osc_count_latest_items() == 0) { ?>
                    <p class="empty"><?php _e('No Latest venues', 'realestate') ; ?></p>
                <?php } else {
                    $index = 0;
                ?>
                    <?php while ( osc_has_latest_items() ) {
                        ?>
                        <div class="ui-item">
                            <div class="frame">
                                <a href="<?php echo osc_item_url() ; ?>"><?php if( osc_images_enabled_at_items() ) { ?>
                                    <?php if( osc_count_item_resources() ) { ?>
                                        <img src="<?php echo osc_resource_preview_url() ; ?>" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>"/>
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
							
                            <div class="info" >
								<div class = "prev" style="position:absolute;top:0;left:0; width:15px;">
									<a style="color:grey;cursor:pointer" onclick="showPrev()">&lt </a>
								</div>
								<div style="padding-left: 15px; padding-right: 15px;">
									<div>
										<h3><a href="<?php echo osc_item_url() ; ?>"><?php if(strlen(osc_item_title()) > 70){ echo substr(osc_item_title(), 0, 70).'...'; } else { echo osc_item_title(); } ?></a></h3>
									</div>
									<div class="data"><?php item_realestate_attributes(); ?></div>
									<div class="author">
										<?php echo osc_item_city(); ?> (<?php echo osc_item_region();?>)<br/>
										<?php echo osc_item_city_area(); ?><br />                        
									</div>
								</div>
								<div class = "next" style="position:absolute;right:0;top:0">
									<a style="color:grey;cursor:pointer" onclick="showNext()">&gt</a>
								</div>
                            </div>
							
                        </div>
                    <?php
                            $index++;
                            if($index == 4){
                                break; 
                            }
                        }
                    ?>
                <div class="clear"></div>
                <?php View::newInstance()->_erase('items') ;
                } ?>
                <script type="text/javascript">
                /* <![CDATA[ */
                var slides = $("#premium-stage .ui-item:not(:last)").hide();
                if(slides.length >= 1){
                    slider = setInterval('showNext()',5000);
                }
                function showNext(){
                    $("#premium-stage .ui-item:last").prev().fadeIn(500);
                    $("#premium-stage .ui-item:last").fadeOut(500,function(){
                        $(this).remove().prependTo('#premium-stage');
                    });
                }
				function showPrev(){
					$("#premium-stage .ui-item:last").fadeOut(500);
                    $("#premium-stage .ui-item:first").fadeIn(500,function(){
						$(this).remove().appendTo('#premium-stage');
					});
                }
                
                /* ]]> */
                </script>
            </div>
        </div>
        <div class="content home">
            <h2><?php _e('Latest Venues', 'realestate') ; ?></h2>
            <div id="latest-ads">               
                <?php if( osc_count_latest_items() == 0) { ?>
                    <p class="empty"><?php _e('No Latest Venues', 'realestate') ; ?></p>
                <?php } else { ?>
                    <?php while ( osc_has_latest_items() ) { ?>
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
                    <?php } ?>
                <div class="clear"></div>
                <?php View::newInstance()->_erase('items') ;
                } ?>
            </div>
            <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
                <div class="pagination-box">
                    <a href="<?php echo osc_search_show_all_url();?>" class="ui-button ui-button-grey"><?php _e("See all Venues", 'realestate'); ?> &raquo;</a></p>
                </div>
            <?php } ?>
        </div>
        <?php osc_current_web_theme_path('footer.php') ; ?>
