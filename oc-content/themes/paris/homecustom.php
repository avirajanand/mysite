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

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}
.carousel-indicators {
bottom: 40px;
}
.carousel {
position: relative;
max-height: 410px;
}
.carousel-inner {
max-height: 400px;
}
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
line-height: 1;
max-height: 400px;
}
.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
	opacity: 1;
	filter: alpha(opacity=100);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}

.carousel-control.left span {
	padding: 15px;
}

.carousel-control.right span {
	padding: 15px;
}

.carousel-control .fa-chevron-left, 
.carousel-control .fa-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
	position: absolute;
	top: 45%;
	z-index: 5;
	display: inline-block;
}

.carousel-control .fa-chevron-left,
.carousel-control .icon-prev {
	left: 0;
}

.carousel-control .fa-chevron-right,
.carousel-control .icon-next {
	right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
	background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
	opacity: .7;
	filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {color:#fff;
    font-size: 40px;
}

.header-text h2 span {
    background-color: rgba(44, 62, 80, 0.65);
	padding: 10px;
}

.header-text h3 span {
	background-color: #000;
	padding: 15px;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color:rgba(44, 62, 80, 0.66);
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #fff;
    background-color: rgba(11, 42, 73, 0.75);
    border-color: #fff;
}
</style>

<div style="display:<?php echo osc_get_preference('phone-us', 'paris'); ?>" class="<?php echo osc_get_preference('ari-us', 'paris'); ?>">
<?php echo osc_get_preference('memo-us', 'paris'); ?>
</div>
<?php osc_current_web_theme_path('popular.php') ; ?>