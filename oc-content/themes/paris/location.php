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
<?php if ( !View::newInstance()->_exists('list_contries') ) {
                            View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=', 'region_name ASC') ) ;
                      }

                      if( osc_count_list_regions() ) { ?>
                <div class="row wpb_start_animation wpb_left-to-right">
<div class="">
<div class="panel">
  <div class="panel-body row">
                    
                       
                        <ul class="list-group">
                            <?php while( osc_has_list_regions() ) { ?>
                            <div style="padding: 2px 5px;" class="col-md-6 list-group-item"><li style="padding:10px;border: 1px solid rgba(255, 255, 255, 0.31);" class="btn-primary" id="footer" onclick="parent.location='<?php echo osc_search_url( array( 'sRegion' => osc_list_region_id() ) ) ; ?>'" data-parent="#MainMenu" class="category 1 btn-primary list-group-item-primary collapsed" >
                                <a href="<?php echo osc_search_url( array( 'sRegion' => osc_list_region_id() ) ) ; ?>"><?php echo osc_list_region_name() ; ?></a> (<?php echo osc_list_region_items() ; ?>)
                            </li></div>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
</div>
                </div>
                <?php } ?>