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
<?php
    osc_get_premiums($max = 4) ;
    if( osc_count_premiums() > 0 ) {
?>
<ul class="pgwSlider">
<?php while ( osc_has_premiums() ) { ?>
        <?php if( osc_count_premium_resources() ) { ?>
<li>
            <a class="thumbnail" style="height:100px;" href="<?php echo osc_premium_url() ; ?>">
                <img src="<?php echo osc_resource_thumbnail_url() ; ?>" title="<?php echo osc_premium_title(); ?>" alt="<?php echo osc_premium_title(); ?>" /> <span><a href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a> <?php if( osc_price_enabled_at_items() ) { ?> <small><strong><?php echo osc_premium_formated_price() ; ?></strong></small><?php } ?></span>
            </a></li>
        <?php } else { ?><li><a class="thumbnail" href="<?php echo osc_premium_url() ; ?>">
            <img src="<?php echo osc_current_web_theme_url('images/basketball2.jpg') ; ?>"></a>
        <?php } ?>
        </li>
      
        
    <?php } ?></ul>
<?php } ?>