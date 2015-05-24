
  <script>
  $(function() {
    $( "#ui-booking-date" ).datepicker();
  });
  </script>
  
 <form action="<?php echo osc_base_url(true); ?>" method="get">
					    <input type="hidden" name="page" value="search"/> 
						<div class="booking-container">
						
								<div class="booking-text"><h2>Book Your Slot</h2>
							    </div>
								<div class="select-game"><?php osc_categories_select('sCategory', null, __('Select a game', 'realstate')) ; ?> 
								</div>
								<div class="select-loc">
												<?php ?>	
												<input id="search_loc" class="ui-location-text" type="text" name="city" id="city" value="" 							  placeholder="Enter your location" />
											
								</div>
								<div class="ui-date"><input type="text" value= "" id="ui-booking-date" placeholder="Choose your date">
					            </div>								
								<div class="ui-slot"><!--<input type="text" value= "" id="ui-booking-slot" placeholder="Choose time slot">-->
					    		  <select id="ui-booking-slot" placeholder="Choose time slot">
								      <option value="">Select time slot</option>
									  <option value="slot4_11">4:00 AM -11:00 AM</option>
									  <option value="slot12_7">12:00 PM -7:00 PM</option>
									  <option value="slot8_3">8:00 PM -3:00 PM</option>
								  </select>
					            </div>								
								<button id="book_search_button"><?php _e("Search", 'realestate');?></button>

                        </div>
</form>
  
  
  