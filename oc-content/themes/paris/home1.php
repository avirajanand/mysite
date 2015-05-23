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
    background-color: rgba(24, 188, 156,.7);
}

.carousel-inner img {
    width: 100%;
   
}
.carousel-indicators {
bottom: 35px;
}
.carousel {
position: relative;

}
.carousel-inner {

}
.carousel-inner>.item>img, .carousel-inner>.item>a>img {
line-height: 1;

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
	top: 40%;
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
	background-color: rgba(24, 188, 156,.7) ;
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
    width: 96.66%;
    color: #fff;
}
.header-text h1 {color:#fff;
    font-size: 40px;
}

.header-text h1 span {
    /*background-color: rgba(57, 96, 145, .65);*/
	padding: 10px;
}

.header-text h2 {color:#fff;
    font-size: 40px;
}

.header-text h2 span {
    background-color: rgba(57, 96, 145, .65);
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
    background-color:rgba(57, 96, 145, .65);	
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #fff;
    background-color: rgba(24, 188, 156,.7);
    border-color: #fff;
}
</style>
<div class="wrapper">
	<div class="<?php echo osc_get_preference('ari-us', 'paris'); ?>">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<?php echo logo_slider(); ?>
                    <!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h1 class="bounceInDown animated">
                            	<span><?php echo osc_get_preference('slider1-us', 'paris'); ?></span>
                            </h1>
                            <br>
                            
                            <br>
                            <div class="flipInY animated">
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo osc_get_preference('slider12-link', 'paris'); ?>"><?php echo osc_get_preference('slider12-us', 'paris'); ?></a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<?php echo logo_slider_1(); ?>
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2 class="bounceInDown animated">
                                <span><?php echo osc_get_preference('slider2-us', 'paris'); ?></span>
                            </h2>
                            <br>
                            
                            <br>
                            <div class="flipInY animated">
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo osc_get_preference('slider22-link', 'paris'); ?>"><?php echo osc_get_preference('slider22-us', 'paris'); ?></a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<?php echo logo_slider_2(); ?>
			    	<!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h2 class="bounceInDown animated">
                                <span><?php echo osc_get_preference('slider3-us', 'paris'); ?></span>
                            </h2>
                            <br>
                            
                            <br>
                            <div class="flipInY animated">
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo osc_get_preference('slider32-link', 'paris'); ?>"><?php echo osc_get_preference('slider32-us', 'paris'); ?></a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="fa fa-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="fa fa-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>
</div>
<div style="display:<?php echo osc_get_preference('phone-us', 'paris'); ?>" class="container">
<?php echo osc_get_preference('memo-us', 'paris'); ?>
</div>
<?php osc_current_web_theme_path('popular.php') ; ?>