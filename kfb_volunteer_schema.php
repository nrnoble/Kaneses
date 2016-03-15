<?php
/**
 * Created by PhpStorm.
 * User: Neal
 * Date: 2/26/2016
 * Time: 1:49 AM
 */
?>


<!DOCTYPE HTML>
<html lang='en' dir='ltr' class='chrome chrome48'>
<meta charset="utf-8" />
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<style id="cfs-style">html{ }</style>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /><link rel="stylesheet" type="text/css" href="print.css" />
<title>Print view - phpMyAdmin 4.3.8</title>
<script type='text/javascript' src='js/whitelist.php?lang=en&amp;db=kaneses_kfb&amp;token=fd98e119c210b39c97ac5a02309f3969'>

</script><script type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=jquery/jquery-1.8.3.min.js&amp;scripts%5B%5D=sprintf.js&amp;scripts%5B%5D=ajax.js&amp;scripts%5B%5D=keyhandler.js&amp;scripts%5B%5D=jquery/jquery-ui-1.9.2.custom.min.js&amp;scripts%5B%5D=jquery/jquery.cookie.js&amp;scripts%5B%5D=jquery/jquery.mousewheel.js&amp;scripts%5B%5D=jquery/jquery.event.drag-2.2.js&amp;scripts%5B%5D=jquery/jquery-ui-timepicker-addon.js&amp;scripts%5B%5D=jquery/jquery.ba-hashchange-1.3.js&amp;scripts%5B%5D=jquery/jquery.debounce-1.0.5.js&amp;scripts%5B%5D=menu-resizer.js&amp;scripts%5B%5D=cross_framing_protection.js&amp;scripts%5B%5D=rte.js&amp;scripts%5B%5D=tracekit/tracekit.js&amp;scripts%5B%5D=error_report.js&amp;scripts%5B%5D=doclinks.js&amp;scripts%5B%5D=functions.js&amp;scripts%5B%5D=navigation.js&amp;scripts%5B%5D=indexes.js&amp;scripts%5B%5D=common.js&amp;scripts%5B%5D=codemirror/lib/codemirror.js&amp;scripts%5B%5D=codemirror/mode/sql/sql.js&amp;scripts%5B%5D=codemirror/addon/runmode/runmode.js&amp;scripts%5B%5D=codemirror/addon/hint/show-hint.js&amp;scripts%5B%5D=codemirror/addon/hint/sql-hint.js"></script><script type='text/javascript' src='js/messages.php?lang=en&amp;db=kaneses_kfb&amp;token=fd98e119c210b39c97ac5a02309f3969'></script><script type='text/javascript' src='js/get_image.js.php?theme=pmahomme'></script><script type="text/javascript">// <![CDATA[
    PMA_commonParams.setAll({common_query:"?token=fd98e119c210b39c97ac5a02309f3969",opendb_url:"db_structure.php",safari_browser:"0",collation_connection:"utf8mb4_unicode_ci",lang:"en",server:"1",table:"kfb_volunteer_application",db:"kaneses_kfb",token:"fd98e119c210b39c97ac5a02309f3969",text_dir:"ltr",pma_absolute_uri:"http://kaneses.greenrivertech.net:2082/cpsess7476442587/3rdparty/phpMyAdmin/",pma_text_default_tab:"Browse",pma_text_left_default_tab:"Structure",LimitChars:"50",pftext:"P",confirm:"1",LoginCookieValidity:"1440",logged_in:"1"});
    AJAX.scriptHandler.add("jquery/jquery-1.8.3.min.js",0).add("whitelist.php?lang=en&amp;db=kaneses_kfb&amp;token=fd98e119c210b39c97ac5a02309f3969",1).add("sprintf.js",1).add("ajax.js",0).add("keyhandler.js",1).add("jquery/jquery-ui-1.9.2.custom.min.js",0).add("jquery/jquery.cookie.js",0).add("jquery/jquery.mousewheel.js",0).add("jquery/jquery.event.drag-2.2.js",0).add("jquery/jquery-ui-timepicker-addon.js",0).add("jquery/jquery.ba-hashchange-1.3.js",0).add("jquery/jquery.debounce-1.0.5.js",0).add("menu-resizer.js",1).add("cross_framing_protection.js",0).add("rte.js",1).add("tracekit/tracekit.js",1).add("error_report.js",1).add("messages.php?lang=en&amp;db=kaneses_kfb&amp;token=fd98e119c210b39c97ac5a02309f3969",0).add("get_image.js.php?theme=pmahomme",0).add("doclinks.js",1).add("functions.js",1).add("navigation.js",0).add("indexes.js",1).add("common.js",1).add("codemirror/lib/codemirror.js",0).add("codemirror/mode/sql/sql.js",0).add("codemirror/addon/runmode/runmode.js",0).add("codemirror/addon/hint/show-hint.js",0).add("codemirror/addon/hint/sql-hint.js",0);
    $(function() {AJAX.fireOnload("whitelist.php?lang=en&amp;db=kaneses_kfb&amp;token=fd98e119c210b39c97ac5a02309f3969");AJAX.fireOnload("sprintf.js");AJAX.fireOnload("keyhandler.js");AJAX.fireOnload("menu-resizer.js");AJAX.fireOnload("rte.js");AJAX.fireOnload("tracekit/tracekit.js");AJAX.fireOnload("error_report.js");AJAX.fireOnload("doclinks.js");AJAX.fireOnload("functions.js");AJAX.fireOnload("indexes.js");AJAX.fireOnload("common.js");});
    // ]]></script>
<noscript>
    <style>html{display:block}</style>
</noscript>
</head>


<body><noscript>&lt;div class="error"&gt;&lt;img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /&gt; Javascript must be enabled past this point!&lt;/div&gt;</noscript><div id="page_content"><div>
        <h1>kfb_volunteer_application</h1>
        <table style="width: 100%;"><thead><tr><th>Column</th><th>Type</th><th>Null</th><th>Default</th><th>Links to</th>
                <th>Comments</th>
            </tr></thead><tbody>
            <tr><td>    pkey
                    <em>(Primary)</em>
                </td><td>smallint(6)<bdo dir="ltr"></bdo></td><td>No&nbsp;</td><td>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    first_name

                </td><td>varchar(32)<bdo dir="ltr"></bdo></td><td>No&nbsp;</td><td>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    last_name

                </td><td>varchar(32)<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    email

                </td><td>varchar(32)<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    phone

                </td><td>varchar(18)<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    Type

                </td><td>enum('Individual', 'Group', 'Organization', 'School', 'Court Ordered Community Service')<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td>Individual&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    Activities

                </td><td>set('Clothing', 'Office', 'Food', '')<bdo dir="ltr"></bdo></td><td>No&nbsp;</td><td>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    Availablity

                </td><td>enum('Yes', 'No', '', '')<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    AvailabilityDescription

                </td><td>text<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr><td>    Comments

                </td><td>text<bdo dir="ltr"></bdo></td><td>Yes&nbsp;</td><td><i>NULL</i>&nbsp;</td>    <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr></tbody></table><h3>Indexes</h3><div class="no_indexes_defined hide"><div class="notice"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_notice"> No index defined!</div></div><table id="table_index"><thead><tr><th>Keyname</th><th>Type</th><th>Unique</th><th>Packed</th><th>Column</th><th>Cardinality</th><th>Collation</th><th>Null</th><th>Comment</th></tr></thead><tbody><tr class="noclick odd"><td rowspan="1">PRIMARY</td><td rowspan="1">BTREE</td><td rowspan="1">Yes</td><td rowspan="1">No</td><td>pkey</td><td>3</td><td>A</td><td>No</td><td rowspan="1"></td></tr><tr class="noclick even"><td rowspan="1">pkey</td><td rowspan="1">BTREE</td><td rowspan="1">No</td><td rowspan="1">No</td><td>pkey</td><td></td><td>A</td><td>No</td><td rowspan="1"></td></tr></tbody></table><br><br><table cellspacing="0" cellpadding="0">
            <tbody><tr><td class="vtop"><big>Space usage:</big><table width="100%"><tbody><tr><td style="padding-right: 10px">Data</td><td class="right">328</td><td>B</td></tr>
                        <tr><td style="padding-right: 10px">Index</td><td class="right">3,072</td><td>B</td></tr>
                        <tr><td style="padding-right: 10px">Total</td><td class="right">3,400</td><td>B</td></tr>
                        </tbody></table></td><td width="20">&nbsp;</td>
                <td class="vtop"><big>Row Statistics:</big><table width="100%">
                        <tbody><tr><td>Format</td><td class="left">dynamic</td></tr>
                        <tr><td>Rows</td><td class="right">3</td></tr>
                        <tr><td>Row length&nbsp;ø</td><td>109</td></tr>
                        <tr><td>Row size&nbsp;ø</td><td class="right">1,133 B</td></tr>
                        <tr><td>Creation</td><td class="right">Feb 26, 2016 at 03:44 AM</td></tr>
                        <tr><td>Last update</td><td class="right">Feb 26, 2016 at 03:44 AM</td></tr>
                        </tbody></table></td></tr></tbody></table></div>
    <p class="print_ignore"><input type="button" class="button" id="print" value="Print"></p><div id="PMA_disable_floating_menubar"></div>
</div><div id="selflink" class="print_ignore"><a href="tbl_printview.php?db=kaneses_kfb&amp;table=kfb_volunteer_application&amp;server=1&amp;target=&amp;token=fd98e119c210b39c97ac5a02309f3969" title="Open new phpMyAdmin window" target="_blank"><img src="themes/dot.gif" title="Open new phpMyAdmin window" alt="Open new phpMyAdmin window" class="icon ic_window-new"></a></div><div class="clearfloat" id="pma_errors"></div><script type="text/javascript">// <![CDATA[
    AJAX.cache.primer = { url: "tbl_printview.php?db=kaneses_kfb&table=kfb_volunteer_application&server=1&target=&token=fd98e119c210b39c97ac5a02309f3969", scripts: [{"name":"jquery\/jquery-1.8.3.min.js","fire":0},{"name":"sprintf.js","fire":1},{"name":"ajax.js","fire":0},{"name":"keyhandler.js","fire":1},{"name":"jquery\/jquery-ui-1.9.2.custom.min.js","fire":0},{"name":"jquery\/jquery.cookie.js","fire":0},{"name":"jquery\/jquery.mousewheel.js","fire":0},{"name":"jquery\/jquery.event.drag-2.2.js","fire":0},{"name":"jquery\/jquery-ui-timepicker-addon.js","fire":0},{"name":"jquery\/jquery.ba-hashchange-1.3.js","fire":0},{"name":"jquery\/jquery.debounce-1.0.5.js","fire":0},{"name":"menu-resizer.js","fire":1},{"name":"cross_framing_protection.js","fire":0},{"name":"rte.js","fire":1},{"name":"tracekit\/tracekit.js","fire":1},{"name":"error_report.js","fire":1},{"name":"doclinks.js","fire":1},{"name":"functions.js","fire":1},{"name":"navigation.js","fire":0},{"name":"indexes.js","fire":1},{"name":"common.js","fire":1},{"name":"codemirror\/lib\/codemirror.js","fire":0},{"name":"codemirror\/mode\/sql\/sql.js","fire":0},{"name":"codemirror\/addon\/runmode\/runmode.js","fire":0},{"name":"codemirror\/addon\/hint\/show-hint.js","fire":0},{"name":"codemirror\/addon\/hint\/sql-hint.js","fire":0}], menuHash: "fccb8269"};
    AJAX.scriptHandler;
    $(function() {});
    // ]]></script></body>

</html>