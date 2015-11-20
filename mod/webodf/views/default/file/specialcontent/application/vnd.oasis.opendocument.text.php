 <head>




 <link rel="stylesheet" type="text/css" href="<?php echo elgg_get_site_url(); ?>mod/webodf_elgg/vendors/webodf/demo-viewer.css" media="screen"/>
        <script src="<?php echo elgg_get_site_url(); ?>mod/webodf_elgg/vendors/webodf/webodf.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo elgg_get_site_url(); ?>mod/webodf_elgg/vendors/webodf/demo-viewer.js" type="text/javascript" charset="utf-8"></script>


 </head>

<?php
/**
 * First, get Publisher ID, URL and Setting
 */

$wordc_setting = elgg_get_plugin_setting('wordc', 'webodf_elgg'); 

$date = new DateTime();
$download_url = elgg_get_site_url() . "webodf_elgg/{$vars['entity']->getGUID()}/{$date->format('U')}";
$js_url = elgg_get_site_url();


if ($wordc_setting == 1)
{

	echo <<<HTML
		<div class="file-photo">

 <body onload="loadDocument('$download_url');">

        <div id = "viewer" style="margin-top:20px;">
            <div id = "titlebar">
                <div id = "toolbarLeft">
                    <div id = "navButtons" class = "splitToolbarButton">
                        <button id = "previous" class = "toolbarButton pageUp" title = "Previous Page"></button>
                        <div class="splitToolbarButtonSeparator"></div>
                        <button id = "next" class = "toolbarButton pageDown" title = "Next Page"></button>
                    </div>
                    <label id = "pageNumberLabel" class = "toolbarLabel" for = "pageNumber">Page:</label>
                    <input type = "number" id = "pageNumber" class = "toolbarField pageNumber"></input>
                    <span id = "numPages" class = "toolbarLabel"></span>
                </div>
                <div id = "toolbarRight">
                    <button id = "download" class = "toolbarButton download" title = "Download"></button>
                </div>
            </div>
            <div id = "toolbarContainer">
                <div id = "toolbar">
                    <div id = "toolbarMiddleContainer" class = "outerCenter">
                        <div id = "toolbarMiddle" class = "innerCenter">
                            <div id = 'zoomButtons' class = "splitToolbarButton">
                                <button id = "zoomOut" class = "toolbarButton zoomOut" title = "Zoom Out"></button>
                                <div class="splitToolbarButtonSeparator"></div>
                                <button id = "zoomIn" class = "toolbarButton zoomIn" title = "Zoom In"></button>
                            </div>
                            <span id="scaleSelectContainer" class="dropdownToolbarButton">
                                <select id="scaleSelect" title="Zoom" oncontextmenu="return false;">
                                    <option id="pageAutoOption" value="auto" selected>Automatic</option>
                                    <option id="pageActualOption" value="page-actual">Actual Size</option>
                                    <option id="pageWidthOption" value="page-width">Full Width</option>
                                    <option id="customScaleOption" value="custom"></option>
                                    <option value="0.5">50%</option>
                                    <option value="0.75">75%</option>
                                    <option value="1">100%</option>
                                    <option value="1.25">125%</option>
                                    <option value="1.5">150%</option>
                                    <option value="2">200%</option>
                                </select>
                            </span>
                            <div id = "sliderContainer">
                                <div id = "slider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id = "canvasContainer">
                <div id = "canvas"></div>
            </div>
            <div id = "overlayNavigator">
                <div id = "previousPage"></div>
                <div id = "nextPage"></div>
            </div>
            <div id = "overlayCloseButton">
            &#10006;
            </div>
            <div id = "overlay"></div>
        </div>
    </body>
</html>

</br>
</br>
</br>
</div>


HTML;


}
 

