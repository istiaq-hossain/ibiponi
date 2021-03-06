<!DOCTYPE html>
<html>
<head>
    <title>Demo 8 - Thumbnail Preview</title>
    <link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/js-image-slider.js" type="text/javascript"></script>
    <link href="themes/8/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/tooltip.js" type="text/javascript"></script>
    <link href="css/generic.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:70px;height:44px;' />"; });
    </script>
</head>
<body>
    <div id="sliderFrame" style="max-height: 100px; max-width: 50px" >
        <div id="slider" >
            <a href="http://www.menucool.com/javascript-image-slider" target="_blank">
                <img src="images/image-slider-1.jpg" alt="#cap1" />
            </a>
            <img src="images/image-slider-2.jpg" alt="Lorem ipsum dolor sit amet" />
            <img src="images/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
            <img src="images/image-slider-4.jpg" alt="#cap2" />
            <img src="images/image-slider-5.jpg" alt="Excepteur sint occaecat cupidatat" />
        </div>
        <div style="display: none;">
            <div id="cap1">
                Welcome to <a href="http://www.menucool.com/">Menucool.com</a>.
            </div>
            <div id="cap2">
                <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
            </div>
        </div>
    </div>
	
</body>
</html>
