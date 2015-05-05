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

    osc_enqueue_script('jquery-validate');
?>
<div class="col-md-3">
<div class="panel2">
<style>.list-group-item {
  border: 1px solid #dddddd;}</style>

  
<ul class="list-group">
<li class="list-group-item">
        <a href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'paris'); ?></a> </li>
       <?php osc_reset_static_pages(); ?>
        <?php while( osc_has_static_pages() ) { ?>
           <li class="list-group-item"> <a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a></li>
        
   <?php } ?>
</ul>


</div>
</div>

