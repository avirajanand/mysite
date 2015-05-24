
    <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(../images/browser-icons.png);
        }
		
		#slider-box{
		display: block; 
		overflow: hidden; 
		margin: 20px auto 0 auto; 
		 
		width: 96%; max-width:940px; 
		min-width: 240px; 
		
		background-color: #fff; 
		box-shadow: 2px 2px 10px 2px #dddddd; 
		-webkit-box-shadow: 0px 0px 5px 0px 
		#dddddd; font-size: .8em; 
		line-height: 1.5em;
		}
		
		#slider2_container{
		position: relative; 
		margin: 0px 5px 5px 0px; 
		float: left; 
		top: 0px; 
		left: 0px; 
		width: 600px;
        height: 300px; 
		overflow: hidden;
		}
		.slides{
		cursor: move; 
		position: absolute; 
		left: 0px; 
		top: 0px; 
		width: 600px; 
		height: 300px;
        overflow: hidden;
		}
		.caption{
		"position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#fff;line-height:40px;
		}
    </style>
    <script type="text/javascript" src="http://localhost:8080/mysite/oc-content/themes/realestate/js/jssor.slider.min.js"></script>
    <script>
    </script> 
    <script>
        jssor_slider2_starter = function (containerId) {
            //Reference http://www.jssor.com/development/tip-make-responsive-slider.html

            var _CaptionTransitions = [];
            _CaptionTransitions["CLIP|L"] = { $Duration: 600, $Clip: 1, $Easing: $JssorEasing$.$EaseInOutCubic };
            _CaptionTransitions["RTT|10"] = { $Duration: 600, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["ZMF|10"] = { $Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["FLTTR|R"] = { $Duration: 600, x: -0.2, y: -0.1, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 1.3} };

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0),

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                }
            };

            var jssor_slider2 = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {

                //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
                var paddingWidth = 20;

                //minimum width should reserve for text
                var minReserveWidth = 225;

                var parentElement = jssor_slider2.$Elmt.parentNode;

                //evaluate parent container width
                var parentWidth = parentElement.clientWidth;

                if (parentWidth) {

                    //exclude blank width
                    var availableWidth = parentWidth - paddingWidth;

                    //calculate slider width as 70% of available width
                    var sliderWidth = availableWidth * 0.7;

                    //slider width is maximum 600
                    sliderWidth = Math.min(sliderWidth, 600);

                    //slider width is minimum 200
                    sliderWidth = Math.max(sliderWidth, 200);
                    var clearFix = "none";

                    //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
                    if (availableWidth - sliderWidth < minReserveWidth) {

                        //set slider width to available width
                        sliderWidth = availableWidth;

                        //slider width is minimum 200
                        sliderWidth = Math.max(sliderWidth, 200);

                        clearFix = "both";
                    }

                    //clear fix for safari 3.1, chrome 3
                    var toClearElment = $Jssor$.$GetElement("clearFixDiv");
                    toClearElment && $Jssor$.$Css(toClearElment, "clear", clearFix);

                    jssor_slider2.$ScaleWidth(sliderWidth);
                }
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    <div id="slider-box">
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <div id="slider2_container">
            <!-- Slides Container -->
            <div u="slides" class="slides">
                <div><img u="image" src="http://localhost:8080/mysite/oc-content/themes/realestate/images/landscape/01.jpg" />
                    <div u="caption" class="caption" class="caption" t="CLIP|L" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#fff;line-height:40px;">Resize</div>
                    <div u="caption" class="caption" t="CLIP|L" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#fff;line-height:40px;">Window</div>
                    <div u="caption" class="caption" t="CLIP|L" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#fff;line-height:40px;">Please!</div>
                </div>
                <div><img u="image" src="http://localhost:8080/mysite/oc-content/themes/realestate/images/landscape/02.jpg" />
                    <div u="caption" class="caption" t="ZMF|10" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#fff;line-height:40px;">Resize</div>
                    <div u="caption" class="caption" t="ZMF|10" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#fff;line-height:40px;">Window</div>
                    <div u="caption" class="caption" t="ZMF|10" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#fff;line-height:40px;">Please!</div>
                </div>
                <div><img u="image" src="http://localhost:8080/mysite/oc-content/themes/realestate/images/landscape/03.jpg" />
                    <div u="caption" class="caption" t="RTT|10" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#fff;line-height:40px;">Resize</div>
                    <div u="caption" class="caption" t="RTT|10" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#fff;line-height:40px;">Window</div>
                    <div u="caption" class="caption" t="RTT|10" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#fff;line-height:40px;">Please!</div>
                </div>
                <div><img u="image" src="http://localhost:8080/mysite/oc-content/themes/realestate/images/landscape/04.jpg" />
                    <div u="caption" class="caption" t="FLTTR|R" style="position:absolute;left:100px;top:80px;width:110px;height:40px;font-size:36px;color:#fff;line-height:40px;">Resize</div>
                    <div u="caption" class="caption" t="FLTTR|R" style="position:absolute;left:230px;top:80px;width:120px;height:40px;font-size:36px;color:#fff;line-height:40px;">Window</div>
                    <div u="caption" class="caption" t="FLTTR|R" style="position:absolute;left:380px;top:80px;width:130px;height:40px;font-size:36px;color:#fff;line-height:40px;">Please!</div>
                </div>
            </div>
            <!-- Trigger -->
            <script>
                jssor_slider2_starter('slider2_container');
            </script>
        </div>
        <!-- Jssor Slider End -->
    </div>