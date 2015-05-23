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
<style>
body{
background-image: url(<?php echo osc_get_preference('back-url', 'paris'); ?>);
background-repeat: <?php echo osc_get_preference('back-rep', 'paris'); ?>;
background-position: <?php echo osc_get_preference('back-pos', 'paris'); ?>;
background-attachment: <?php echo osc_get_preference('back-mode', 'paris'); ?>;
background-color: <?php echo osc_get_preference('back-color', 'paris'); ?>;
}
.navbar, .navbar-default, .btn-primary, .btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active, .dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus, .dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus, .nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus, .label-primary, .badge, .progress-bar, .list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus, .panel-primary > .panel-heading {background: <?php echo osc_get_preference('theme-color', 'paris'); ?>;
  border-color: transparent;
}

a{color:<?php echo osc_get_preference('theme-color', 'paris'); ?>;
}
<?php echo osc_get_preference('address-us', 'paris'); ?>
</style>