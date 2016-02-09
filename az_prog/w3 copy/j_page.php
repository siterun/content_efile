
<!DOCTYPE html>
<html lang="en-US">
<head>

<title>jQuery Effects - Animation</title>
<style>a.menu_jquery_animate{font-weight:bold;} a.topnav_jquery{background-color:#8AC007 !important;color:#ffffff !important;}</style>
<style>
#smallnavContainer {display:none;}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,XML,JavaScript,DOM,jQuery,ASP.NET,PHP,SQL,colors,tutorial,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,demos,tips,color table,w3c,cascading style sheets,active server pages,Web building,Webmaster">
<meta name="Description" content="Free HTML CSS JavaScript DOM jQuery XML AJAX Angular ASP .NET PHP SQL tutorials, references, web building examples">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/bs/css/bootstrap_w3schools.css">
<script src="/jquery.js"></script>
<script src="/bs/js/bootstrap.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3855518-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
 // GPT slots
 var gptAdSlots = [];
 googletag.cmd.push(function() {

   var leaderMapping = googletag.sizeMapping().
   // Mobile ad
   addSize([0, 0], [320, 50]). 
   // Vertical Tablet ad
   addSize([480, 0], [468, 60]). 
   // Horizontal Tablet
   addSize([700, 0], [728, 90]).
   // Desktop and bigger ad
// addSize([1200, 0], [[728, 90], [970, 90]]).build();
   addSize([1200, 0], [728, 90]).build();   

// gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [[728, 90], [970, 90]], 'div-gpt-ad-1422003450156-2').
   gptAdSlots[0] = googletag.defineSlot('/16833175/MainLeaderboard', [728, 90], 'div-gpt-ad-1422003450156-2').   
   defineSizeMapping(leaderMapping).addService(googletag.pubads());

   var skyMapping = googletag.sizeMapping().
   // Mobile ad
   addSize([0, 0], [320, 50]). 
   // Tablet ad
   addSize([975, 0], [120, 600]). 
   // Desktop
// addSize([1100, 0], [[120, 600], [160, 600]]).
   addSize([1100, 0], [160, 600]).   
   // Large Desktop
// addSize([1675, 0], [[120, 600], [160, 600], [300, 600], [300, 1050]]).build();
   addSize([1675, 0], [[160, 600], [300, 600]]).build();   
// gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[120, 600], [160, 600], [300, 600], [300, 1050]], 'div-gpt-ad-1422003450156-5').
   gptAdSlots[1] = googletag.defineSlot('/16833175/WideSkyScraper', [[160, 600], [300, 600]], 'div-gpt-ad-1422003450156-5').
   defineSizeMapping(skyMapping).addService(googletag.pubads());

   var bmrMapping = googletag.sizeMapping().
   // Smaller
// addSize([0, 0], [[300, 250], [336, 280]]). 
   addSize([0, 0], [300, 250]).    
   // Large Desktop
// addSize([1200, 0], [[300, 250], [336, 280], [728, 280], [970, 250]]).build();
   addSize([1200, 0], [[300, 250], [728, 280]]).build();
// gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [336, 280], [728, 280], [970, 250]], 'div-gpt-ad-1422003450156-0').
   gptAdSlots[2] = googletag.defineSlot('/16833175/BottomMediumRectangle', [[300, 250], [728, 280]], 'div-gpt-ad-1422003450156-0').
   defineSizeMapping(bmrMapping).setCollapseEmptyDiv(true).addService(googletag.pubads());

// gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [[300, 250], [336, 280]], 'div-gpt-ad-1422003450156-3').addService(googletag.pubads());
   gptAdSlots[3] = googletag.defineSlot('/16833175/RightBottomMediumRectangle', [300, 250], 'div-gpt-ad-1422003450156-3').addService(googletag.pubads());

   googletag.pubads().setTargeting("content","jquery");
   googletag.enableServices();
 });
</script>
<script>
if (window.addEventListener) {              
    window.addEventListener("resize", browserResize);
} else if (window.attachEvent) {                 
    window.attachEvent("onresize", browserResize);
}
var xbeforeResize = window.innerWidth;
var ybeforeResize = window.innerWidth;
var zbeforeResize = window.innerWidth;


function skyscraperResize() {
if (window.innerWidth < 975 + 17) {
			document.getElementById("div-gpt-ad-1422003450156-5").style.minHeight="0";
		}
}

function browserResize() {
    var afterResize = window.innerWidth;
    if ((xbeforeResize < (1200 + 14) && afterResize >= (1200 + 14)) || (xbeforeResize >= (1200 + 14) && afterResize < (1200 + 14)) ||
        (xbeforeResize < (700 + 14) && afterResize >= (700 + 14)) || (xbeforeResize >= (700 + 14) && afterResize < (700 + 14)) ||
        (xbeforeResize < (480 + 17) && afterResize >= (480 + 17)) ||(xbeforeResize >= (480 + 17) && afterResize < (480 + 17))) {
        xbeforeResize = afterResize;
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[0]]);
        });
    }
    if ((ybeforeResize < (1675 + 14) && afterResize >= (1675 + 14)) || (ybeforeResize >= (1675 + 14) && afterResize < (1675 + 14)) ||
    	(ybeforeResize < (1100 + 14) && afterResize >= (1100 + 14)) || (ybeforeResize >= (1100 + 14) && afterResize < (1100 + 14)) ||
        (ybeforeResize < (975 + 17) && afterResize >= (975 + 17)) || (ybeforeResize >= (975 + 17) && afterResize < (975 + 17))) {
        ybeforeResize = afterResize;
       	skyscraperResize()
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[1]]);
        });
    }
    if ((zbeforeResize < (1200 + 14) && afterResize >= (1200 + 14)) || (zbeforeResize >= (1200 + 14) && afterResize < (1200 + 14))) {
        zbeforeResize = afterResize;
        googletag.cmd.push(function() {
            googletag.pubads().refresh([gptAdSlots[2], gptAdSlots[3]]);
        });
	}
}
</script>
<link rel="stylesheet" type="text/css" href="/stdtheme.css">
<script> 
$(document).ready(function(){
  $("button#bDemo").click(function(){
    $("div#divDemo").animate({left:"170px",opacity:"0.5"},"slow");
    $("div#divDemo").animate({fontSize:"5em"},"slow");
  });
});
</script>
</head>
<body>
<div id='leftBackground'></div><div id='topDIV' class='top'><a href='http://www.w3schools.com'><img id='topLogo' src='/images/w3schools.png' alt='W3Schools.com' class='img-responsive'></a><div id='toptext'>THE WORLD'S LARGEST WEB DEVELOPER SITE</div></div><div id='topnavDIV' class='topnavContainer'><div class='container-fluid' style='max-width:1600px;margin-left:0px;padding-left:0;'><ul class='nav nav-pills topnav'><li><a href='/default.asp' class='topnav_home' title='Home'>&nbsp;</a></li><li><a href='/html/default.asp' class='topnav_html' title='HTML Tutorial'>HTML</a></li><li><a href='/css/default.asp' class='topnav_css' title='CSS Tutorial'>CSS</a></li><li><a href='/js/default.asp' class='topnav_js' title='JavaScript Tutorial'>JAVASCRIPT</a></li><li><a href='/sql/default.asp' class='topnav_sql' title='SQL Tutorial'>SQL</a></li><li><a href='/php/default.asp' class='topnav_php' title='PHP Tutorial'>PHP</a></li><li><a href='/jquery/default.asp' class='topnav_jquery' title='jQuery Tutorial'>jQUERY</a></li><li><a href='/bootstrap/default.asp' class='topnav_bootstrap' title='Bootstrap Tutorial'>BOOTSTRAP</a></li><li><a href='/angular/default.asp' class='topnav_angular' title='Angular Tutorial'>ANGULAR</a></li><li><a href='/xml/default.asp' class='topnav_xml' title='XML Tutorial'>XML</a></li><li><a id='dropdownTutorialsBtn' href='#' class='topnav_tutorials' title='More Tutorials'>TUTORIALS <span class='caret'></span></a></li><li><a id='dropdownReferencesBtn' href='#' class='topnav_references' title='More References'>REFERENCES <span class='caret'></span></a></li><li><a id='dropdownExamplesBtn' href='#' class='topnav_examples' title='More Examples'>EXAMPLES <span class='caret'></span></a></li><li><a href='/forum/default.asp' class='topnav_forum' title='W3Schools Forum'>FORUM</a></li><li class='menuBtn'><a href='javascript:void(0)' class='topnav_menu' onclick='vismenyen()' title='Menu'><hr><hr><hr></a></li><li class='menuSearch'><a id='dropdownSearchBtn' href='javascript:void(0);' class='topnav_search' title='Search W3Schools'>&nbsp;</a></li><li class='menuTranslate'><a id='dropdownTranslateBtn' href='javascript:void(0);' class='topnav_translate' title='Translate W3Schools'>&nbsp;</a></li></ul></div></div><div class='container-fluid master'><div class='row'><div class='col-lg-2 col-md-2 col-sm-3 menu'><div id='menyen'><h2 class="left"><span class="left_h2">jQuery Tutorial</span></h2>
<a target="_top" href="default.asp" class="menu_default">jQuery HOME</a>
<a target="_top" href="jquery_intro.asp" class="menu_jquery_intro">jQuery Intro</a>
<a target="_top" href="jquery_get_started.asp" class="menu_jquery_get_started">jQuery Get Started</a>
<a target="_top" href="jquery_syntax.asp" class="menu_jquery_syntax">jQuery Syntax</a>
<a target="_top" href="jquery_selectors.asp" class="menu_jquery_selectors">jQuery Selectors</a>
<a target="_top" href="jquery_events.asp" class="menu_jquery_events">jQuery Events</a>
<br>
<h2 class="left"><span class="left_h2">jQuery Effects</span></h2>
<a target="_top" href="jquery_hide_show.asp" class="menu_jquery_hide_show">jQuery Hide/Show</a>
<a target="_top" href="jquery_fade.asp" class="menu_jquery_fade">jQuery Fade</a>
<a target="_top" href="jquery_slide.asp" class="menu_jquery_slide">jQuery Slide</a>
<a target="_top" href="jquery_animate.asp" class="menu_jquery_animate">jQuery Animate</a>
<a target="_top" href="jquery_stop.asp" class="menu_jquery_stop">jQuery stop()</a>
<a target="_top" href="jquery_callback.asp" class="menu_jquery_callback">jQuery Callback</a>
<a target="_top" href="jquery_chaining.asp" class="menu_jquery_chaining">jQuery Chaining</a>
<br>
<h2 class="left"><span class="left_h2">jQuery HTML</span></h2>
<a target="_top" href="jquery_dom_get.asp" class="menu_jquery_dom_get">jQuery Get</a>
<a target="_top" href="jquery_dom_set.asp" class="menu_jquery_dom_set">jQuery Set</a>
<a target="_top" href="jquery_dom_add.asp" class="menu_jquery_dom_add">jQuery Add</a>
<a target="_top" href="jquery_dom_remove.asp" class="menu_jquery_dom_remove">jQuery Remove</a>
<a target="_top" href="jquery_css_classes.asp" class="menu_jquery_css_classes">jQuery CSS Classes</a>
<a target="_top" href="jquery_css.asp" class="menu_jquery_css">jQuery css()</a>
<a target="_top" href="jquery_dimensions.asp" class="menu_jquery_dimensions">jQuery Dimensions</a>
<br>
<h2 class="left"><span class="left_h2">jQuery Traversing</span></h2>
<a target="_top" href="jquery_traversing.asp" class="menu_jquery_traversing">jQuery Traversing</a>
<a target="_top" href="jquery_traversing_ancestors.asp" class="menu_jquery_traversing_ancestors">jQuery Ancestors</a>
<a target="_top" href="jquery_traversing_descendants.asp" class="menu_jquery_traversing_descendants">jQuery Descendants</a>
<a target="_top" href="jquery_traversing_siblings.asp" class="menu_jquery_traversing_siblings">jQuery Siblings</a>
<a target="_top" href="jquery_traversing_filtering.asp" class="menu_jquery_traversing_filtering">jQuery Filtering</a>
<br>
<h2 class="left"><span class="left_h2">jQuery AJAX</span></h2>
<a target="_top" href="jquery_ajax_intro.asp" class="menu_jquery_ajax_intro">jQuery AJAX Intro</a>
<a target="_top" href="jquery_ajax_load.asp" class="menu_jquery_ajax_load">jQuery Load</a>
<a target="_top" href="jquery_ajax_get_post.asp" class="menu_jquery_ajax_get_post">jQuery Get/Post</a>
<br>
<h2 class="left"><span class="left_h2">jQuery Misc</span></h2>
<a target="_top" href="jquery_noconflict.asp" class="menu_jquery_noconflict">jQuery noConflict()</a>
<br>
<h2 class="left"><span class="left_h2">jQuery Examples</span></h2>
<a target="_top" href="jquery_examples.asp" class="menu_jquery_examples">jQuery Examples</a>
<a target="_top" href="jquery_quiz.asp" class="menu_jquery_quiz">jQuery Quiz</a>
<a target="_top" href="jquery_exam.asp" class="menu_jquery_exam">jQuery Certificate</a>
<br>
<h2 class="left"><span class="left_h2">jQuery References</span></h2>
<a target="_top" href="jquery_ref_selectors.asp" class="menu_jquery_ref_selectors">jQuery Selectors</a>
<a target="_top" href="jquery_ref_events.asp" class="menu_jquery_ref_events">jQuery Events</a>
<a target="_top" href="jquery_ref_effects.asp" class="menu_jquery_ref_effects">jQuery Effects</a>
<a target="_top" href="jquery_ref_html.asp" class="menu_jquery_ref_html">jQuery HTML/CSS</a>
<a target="_top" href="jquery_ref_traversing.asp" class="menu_jquery_ref_traversing">jQuery Traversing</a>
<a target="_top" href="jquery_ref_ajax.asp" class="menu_jquery_ref_ajax">jQuery AJAX</a>
<a target="_top" href="jquery_ref_misc.asp" class="menu_jquery_ref_misc">jQuery Misc</a>
<a target="_top" href="jquery_ref_prop.asp" class="menu_jquery_ref_prop">jQuery Properties</a></div></div><div class='col-lg-10 col-md-10 col-sm-9 leaderboard'><div id='mainLeaderboard' style='overflow:hidden;'><!-- MainLeaderboard--><div id='div-gpt-ad-1422003450156-2'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-2'); });</script></div></div><div class='row'><div class='col-lg-10 col-md-10 col-sm-12 main'><div>
<h1>jQuery Effects - <span class="color_h1">Animation</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="jquery_slide.asp">&laquo; Previous</a></div>
<div class="next"><a class="chapter" href="jquery_stop.asp">Next Chapter &raquo;</a></div>
</div>
<hr>
<p class="intro">The jQuery animate() method lets you create custom animations.</p>
<button id="bDemo" class="btn btn-info">Start Animation</button><br><br>
<div id="divDemo" style="border:1px solid #555;border-radius:3px;color:white;background:#555;height:105px;width:260px;position:relative;">jQuery</div>
<hr>

<h2>jQuery Animations - The animate() Method</h2>
<p>The jQuery animate() method is used to create custom animations.</p>
<p><b>Syntax:</b></p>
<div class="code notranslate"><div>
$(<i>selector</i>).animate({<i>params</i>}<i>,speed,callback</i>);</div></div>
<p>The required params parameter defines the CSS properties to be animated.</p>
<p>The optional speed parameter specifies the duration of the effect. It can take the following values: &quot;slow&quot;, &quot;fast&quot;, or 
milliseconds.</p>
<p>The optional callback parameter is a function to be executed after the 
animation completes.</p>
<p>The following example demonstrates a simple use of the animate() method; it moves 
a &lt;div&gt; element to the right, until it has reached a left property of 250px:</p>
<div class="example">
<h2 class="example">Example</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; $(&quot;div&quot;).animate({left: '250px'});<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation1">Try it yourself &raquo;</a>
</div>
<br>
<table class="lamp"><tr>
<th style="width:34px"><img src="/images/lamp.jpg" alt="Note" style="height:32px;width:32px"></th>
<td>By default, all HTML elements have a static position, and cannot be moved.<br>
To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</td>
</tr></table>
<hr>

<h2>jQuery animate() - Manipulate Multiple Properties</h2>
<p>Notice that multiple properties can be animated at the same time:</p>
<div class="example">
<h2 class="example">Example</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; $(&quot;div&quot;).animate({<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; left: '250px',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; opacity: '0.5',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; height: '150px',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; width: '150px'<br>
&nbsp;&nbsp;&nbsp; });<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation1_multicss">Try it yourself &raquo;</a>
</div>
<br>
<table class="lamp" id="table1"><tr>
<th style="width:34px"><img src="/images/lamp.jpg" alt="Note" style="height:32px;width:32px"></th>
<td><b>Is it possible to manipulate ALL CSS properties with the animate() method?</b><br><br>
Yes, almost! However, there is one important thing to remember: all property 
names must be camel-cased when used with the animate() method: You will need to 
write paddingLeft instead of padding-left, marginRight instead of margin-right, and so on. <br><br>
Also, color animation is not included in the core jQuery library.<br>
If you want to animate color, you need to download the
<a href="http://plugins.jquery.com/" target="_blank">Color 
Animations plugin</a> from jQuery.com.</td>
</tr></table>
<hr>

<h2>jQuery animate() - Using Relative Values</h2>
<p>It is also possible to define relative values (the value is then relative to 
the element's current value). This is done by putting += or -= in front of the 
value:</p>
<div class="example">
<h2 class="example">Example</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; $(&quot;div&quot;).animate({<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; left: '250px',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; height: '+=150px',<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; width: '+=150px'<br>
&nbsp;&nbsp;&nbsp; });<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation1_relative">Try it yourself &raquo;</a>
</div>
<hr>

<h2>jQuery animate() - Using Pre-defined Values</h2>
<p>You can even specify a property's animation value as &quot;show&quot;, &quot;hide&quot;, or &quot;toggle&quot;:</p>
<div class="example">
<h2 class="example">Example</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; $(&quot;div&quot;).animate({<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; height: 'toggle'<br>
&nbsp;&nbsp;&nbsp; });<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation1_toggle">Try it yourself &raquo;</a>
</div>
<hr>

<h2>jQuery animate() - Uses Queue Functionality</h2>
<p>By default, jQuery comes with queue functionality for animations.</p>
<p>This means that if you write multiple animate() calls after each other, 
jQuery creates an &quot;internal&quot; queue with these method calls. Then it runs the 
animate calls ONE by ONE.</p>
<p>So, if you want to perform different animations after each other, we take 
advantage of the queue functionality:</p>
<div class="example">
<h2 class="example">Example 1</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; var div = $(&quot;div&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({height: '300px', opacity: '0.4'}, &quot;slow&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({width: '300px', opacity: '0.8'}, &quot;slow&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({height: '100px', opacity: '0.4'}, &quot;slow&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({width: '100px', opacity: '0.8'}, &quot;slow&quot;);<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation">Try it yourself &raquo;</a>
</div>
<p>The example below first moves the &lt;div&gt; element to the right, and then increases the font size of the text:</p>
<div class="example">
<h2 class="example">Example 2</h2>
<div class="example_code notranslate">
$(&quot;button&quot;).click(function(){<br>
&nbsp;&nbsp;&nbsp; var div = $(&quot;div&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({left: '100px'}, &quot;slow&quot;);<br>
&nbsp;&nbsp;&nbsp; div.animate({fontSize: '3em'}, &quot;slow&quot;);<br>
});&nbsp; 
</div>
<br>
<a target="_blank" class="tryitbtn" href="tryit.asp?filename=tryjquery_animation2">Try it yourself &raquo;</a>
</div>
<hr>

<h2>Test Yourself with Exercises!</h2>
<p>
<a class="tryitbtn" href="exercise.asp?filename=exercise_animate1" target="_blank">Exercise 1 &raquo;</a>&nbsp;
<a class="tryitbtn" href="exercise.asp?filename=exercise_animate2" target="_blank">Exercise 2 &raquo;</a>&nbsp;
<a class="tryitbtn" href="exercise.asp?filename=exercise_animate3" target="_blank">Exercise 3 &raquo;</a>&nbsp;
<a class="tryitbtn" href="exercise.asp?filename=exercise_animate4" target="_blank">Exercise 4 &raquo;</a>
</p>
<hr>

<h2>jQuery Effects Reference</h2>
<p>For a complete overview of all jQuery effects, please go to our <a href="jquery_ref_effects.asp">jQuery Effect Reference</a>.</p>

<br>
<div class="chapter">
<div class="prev"><a class="chapter" href="jquery_slide.asp">&laquo; Previous</a></div>
<div class="next"><a class="chapter" href="jquery_stop.asp">Next Chapter &raquo;</a></div>
</div>

     <br>
    </div>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-12">
     <div class="row sidesection" style="margin-top:15px;padding:0;overflow:visible;">
      <div id="skyscraper">
       <div id="div-gpt-ad-1422003450156-5" style="min-height:600px;">
        <script>
         googletag.cmd.push(function() {
         googletag.display('div-gpt-ad-1422003450156-5');
         });
        </script> 
       </div>
      </div>
     </div>
     <div class="row sidesection">
      <h3>W3SCHOOLS EXAMS</h3>
      <a target="_blank" href="http://www.w3schools.com/cert/default.asp">HTML, CSS, JavaScript, PHP, jQuery, and XML Certifications</a>
     </div>
     <div class="row sidesection">
      <h3>COLOR PICKER</h3>
      <a href="/tags/ref_colorpicker.asp">
      <img src="/images/colorpicker.gif" alt="colorpicker"></a>
     </div>
     <div class="row sidesection">
      <h3>SHARE THIS PAGE</h3>
      <div class="sharethis">
       <script>
       <!--
       try{
       loc=location.pathname;
       if (loc.toUpperCase().indexOf(".ASP")<0) loc=loc+"default.asp";
       txt='<a href="http://www.facebook.com/sharer.php?u=http://www.w3schools.com'+loc+'" target="_blank" title="Facebook"><span class="share sharefacebook social social-facebook"></span></a>';
       txt=txt+'<a href="http://twitter.com/home?status=Currently reading http://www.w3schools.com'+loc+'" target="_blank" title="Twitter"><span class="share sharetwitter social social-twitter"></span></a>';
       txt=txt+'<a href="https://plus.google.com/share?url=http://www.w3schools.com'+loc+'" target="_blank" title="Google+"><span class="share sharegoogle social social-google-plus"></span></a>';
       document.write(txt);
       }
       catch(e) {}
       //-->
       </script>
      </div>
     </div>
     <div class="row sidesection">
       <a href="javascript:void(0);" onclick="clickFBLike()" title="Like W3Schools on Facebook">
         <span class="share sharefblike glyphicons glyphicons-thumbs-up"></span>
       </a>
       <div id="fblikeframe">
         <div id="popupframe"></div>
         <div id="popupDIV"></div>
       </div>
     </div>
   </div>
  </div>
  
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">

<hr style="margin-bottom:0;">
<div class="bottomads" style="overflow:hidden;">
<!-- BottomMediumRectangle -->
<div id='div-gpt-ad-1422003450156-0'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-0'); });
</script>
</div>
<!-- RightBottomMediumRectangle -->
<div id='div-gpt-ad-1422003450156-3'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-3'); });
</script>
</div>
<div style="clear:both"></div>
</div>



    <div class="footer">
     <hr style="margin-bottom:14px;margin-top:0px;">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
	   <a href="" onclick="displayError();return false" style="white-space:nowrap;">REPORT ERROR</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
       <a href="" target="_blank" onclick="printPage();return false;">PRINT PAGE</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
       <a href="/forum/default.asp" target="_blank">FORUM</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
	   <a href="/about/default.asp" target="_top">ABOUT</a>
      </div>
     </div>
     <hr style="margin-bottom:2px;margin-top:14px;">
     <div class="container-fluid jumbotron" id="err_form">
      <button type="button" class="close" onclick="hideError()"><span>&times;</span></button>
      <h2>Your Suggestion:</h2>
      <form role="form">
      <div class="form-group">
        <label for="err_email">Your Email:</label>
        <input class="form-control" type="email" id="err_email" name="err_email" />
      </div>
      <div class="form-group">
        <label for="err_email">Page address:</label>
        <input class="form-control" type="text" id="err_url" name="err_url" disabled="disabled" />
      </div>
      <div class="form-group">
        <label for="err_email">Description:</label>
        <textarea rows="10" class="form-control" id="err_desc" name="err_desc" style="max-width:100%;"></textarea>
      </div>
      <div class="form-group">        
        <button type="button" class="btn btn-default" onclick="sendErr()">Submit</button>
      </div>
      </form>
     </div>
     <div class="container-fluid jumbotron" id="err_sent" style="clear:both;">
      <button type="button" class="close" onclick="hideSent()"><span>&times;</span></button>
      <h2>Thank You For Helping Us!</h2>
      <p>Your message has been sent to W3Schools.</p>
     </div>
         
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 Tutorials</h3>
                  <a href="/html/default.asp">HTML Tutorial</a><br>
                  <a href="/css/default.asp">CSS Tutorial</a><br>
                  <a href="/js/default.asp">JavaScript Tutorial</a><br>
                  <a href="/sql/default.asp">SQL Tutorial</a><br>
                  <a href="/php/default.asp">PHP Tutorial</a><br>
                  <a href="/jquery/default.asp">jQuery Tutorial</a><br>
                  <a href="/bootstrap/default.asp">Bootstrap Tutorial</a><br>
                  <a href="/angular/default.asp">Angular Tutorial</a><br>
                  <a href="/aspnet/default.asp">ASP.NET Tutorial</a><br>
                  <a href="/xml/default.asp">XML Tutorial</a><br>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 References</h3>
                  <a href="/tags/default.asp">HTML Reference</a><br>
                  <a href="/cssref/default.asp">CSS Reference</a><br>
                  <a href="/jsref/default.asp">JavaScript Reference</a><br>
                  <a href="/browsers/default.asp">Browser Statistics</a><br>
                  <a href="/jsref/dom_obj_document.asp">HTML DOM</a><br>
                  <a href="/php/php_ref_array.asp">PHP Reference</a><br>
                  <a href="/jquery/jquery_ref_selectors.asp">jQuery Reference</a><br>
                  <a href="/tags/ref_colornames.asp">HTML Colors</a><br>
                  <a href="/charsets/default.asp">HTML Character Sets</a><br>
                  <a href="/dom/dom_nodetype.asp">XML DOM</a><br>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Top 10 Examples</h3>
                  <a href="/html/html_examples.asp">HTML Examples</a><br>
                  <a href="/css/css_examples.asp">CSS Examples</a><br>
                  <a href="/js/js_examples.asp">JavaScript Examples</a><br>
                  <a href="/js/js_dom_examples.asp">HTML DOM Examples</a><br>
                  <a href="/php/php_examples.asp">PHP Examples</a><br>
                  <a href="/jquery/jquery_examples.asp">jQuery Examples</a><br>
                  <a href="/xml/xml_examples.asp">XML Examples</a><br>
                  <a href="/dom/dom_examples.asp">XML DOM Examples</a><br>
                  <a href="/asp/asp_examples.asp">ASP Examples</a><br>
                  <a href="/svg/svg_examples.asp">SVG Examples</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="top10">
                  <h3>Web Certificates</h3>
                  <a href="/cert/default.asp">HTML Certificate</a><br>
                  <a href="/cert/default.asp">HTML5 Certificate</a><br>
                  <a href="/cert/default.asp">CSS Certificate</a><br>
                  <a href="/cert/default.asp">JavaScript Certificate</a><br>
                  <a href="/cert/default.asp">jQuery Certificate</a><br>
                  <a href="/cert/default.asp">PHP Certificate</a><br>
                  <a href="/cert/default.asp">Bootstrap Certificate</a><br>
                  <a href="/cert/default.asp">XML Certificate</a><br>
                  
                </div>
              </div>        
            </div>        
     <hr>
    </div>
     <div class="footer">
       W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding.
       Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
       While using this site, you agree to have read and accepted our <a href="/about/about_copyright.asp">terms of use</a>,
       <a href="/about/about_privacy.asp">cookie and privacy policy</a>.
       <a href="/about/about_copyright.asp">Copyright 1999-2015</a> by Refsnes Data. All Rights Reserved.<br><br>
       <a href="http://www.w3schools.com">
       <img style="width:150px;height:28px;border:0" src="/images/w3schoolscom_gray.gif" alt="W3Schools.com"></a>
     </div>

   </div>
  </div>
 </div>

</div>
</div>
<div id='w3dropdowntutorials' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/html/default.asp'>HTML Tutorial</a>
<a href='/css/default.asp'>CSS Tutorial</a>
<a href='/w3css/default.asp'>W3.CSS Tutorial</a>
<a href='/bootstrap/default.asp'>Bootstrap Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href='/js/default.asp'>JavaScript Tutorial</a>
<a href='/jquery/default.asp'>jQuery Tutorial</a>
<a href='/jquerymobile/default.asp'>jQuery Mobile Tutorial</a>
<a href='/appml/default.asp'>AppML Tutorial</a>
<a href='/angular/default.asp'>AngularJS Tutorial</a>
<a href='/ajax/default.asp'>AJAX Tutorial</a>
<a href='/json/default.asp'>JSON Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Graphics</h3>
<a href='/canvas/default.asp'>Canvas Tutorial</a>
<a href='/svg/default.asp'>SVG Tutorial</a>
<a href='/icons/default.asp'>Icons Tutorial</a>
<a href='/googleapi/default.asp'>Google Maps Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href='/sql/default.asp'>SQL Tutorial</a>
<a href='/php/default.asp'>PHP Tutorial</a>
<a href='/asp/default.asp'>ASP Tutorial</a>
<a href='/aspnet/default.asp'>ASP.NET Tutorial</a>
</div>
<div class="w3DropdownItem">
<h3>Web</h3>
<a href='/website/default.asp'>Web Building</a>
<a href='/browsers/default.asp'>Web Statistics</a>
<a href='/cert/default.asp'>Web Certification</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href='/xml/default.asp'>XML Tutorial</a>
<a href='/schema/default.asp'>Schema Tutorial</a>
<a href='/dom/default.asp'>XML DOM Tutorial</a>
<a href='/xsl/default.asp'>XSLT Tutorial</a>
<a href='/xquery/default.asp'>XQuery Tutorial</a>
<a href='/webservices/default.asp'>WSDL Tutorial</a>
</div>
</div>
</div>
<div id='w3dropdownreferences' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/tags/default.asp'>HTML Tag Reference</a>
<a href='/tags/ref_eventattributes.asp'>HTML Event Reference</a>
<a href='/tags/ref_colornames.asp'>HTML Color Reference</a>
<a href='/cssref/default.asp'>CSS 1,2,3 Reference</a>
<a href='/w3css/w3css_reference.asp'>W3.CSS Reference</a>
<a href='/bootstrap/bootstrap_ref_css_text.asp'>Bootstrap Reference</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href='/jsref/default.asp'>JavaScript Reference</a>
<a href='/jsref/default.asp'>HTML DOM Reference</a>
<a href='/jquery/jquery_ref_selectors.asp'>jQuery Reference</a>
<a href='/jquerymobile/jquerymobile_ref_data.asp'>jQuery Mobile Reference</a>
<a href='/googleAPI/google_maps_ref.asp'>Google Maps Reference</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href='/php/php_ref_array.asp'>PHP Reference</a>
<a href='/sql/sql_quickref.asp'>SQL Reference</a>
<a href='/asp/asp_ref_response.asp'>ASP Reference</a>
<a href='/aspnet/webpages_ref_classes.asp'>Razor Reference</a>
<a href='/aspnet/aspnet_refhtmlcontrols.asp'>ASP.NET Reference</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href='/dom/dom_nodetype.asp'>XML DOM Reference</a>
<a href='/xsl/xsl_w3celementref.asp'>XSLT Reference</a>
<a href='/xquery/xquery_reference.asp'>XQuery Reference</a>
<a href='/schema/schema_elements_ref.asp'>Schema Reference</a>
<a href='/svg/svg_reference.asp'>SVG Reference</a>
</div>
<div class="w3DropdownItem">
<h3>Charsets</h3>
<a href='/charsets/default.asp'>HTML Character Sets</a>
<a href='/charsets/ref_html_ascii.asp'>HTML ASCII</a>
<a href='/charsets/ref_html_ansi.asp'>HTML ANSI</a>
<a href='/charsets/ref_html_ansi.asp'>HTML Windows-1252</a>
<a href='/charsets/ref_html_8859.asp'>HTML ISO-8859-1</a>
<a href='/charsets/ref_html_symbols.asp'>HTML Symbols</a>
<a href='/charsets/ref_html_utf8.asp'>HTML UTF-8</a>
</div>
</div>
</div>
<div id='w3dropdownexamples' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownItem">
<h3>HTML/CSS</h3>
<a href='/html/html_examples.asp'>HTML Examples</a>
<a href='/css/css_examples.asp'>CSS Examples</a>
<a href='/w3css/w3css_examples.asp'>W3.CSS Examples</a>
</div>
<div class="w3DropdownItem">
<h3>JavaScript</h3>
<a href="/js/js_examples.asp" target="_top">JavaScript Examples</a>
<a href="/js/js_dom_examples.asp" target="_top">HTML DOM Examples</a>
<a href="/jquery/jquery_examples.asp" target="_top">jQuery Examples</a>
<a href="/jquerymobile/jquerymobile_examples.asp" target="_top">jQuery Mobile Examples</a>
<a href="/angular/angular_examples.asp" target="_top">AngularJS Examples</a>
<a href="/ajax/ajax_examples.asp" target="_top">AJAX Examples</a>
</div>
<div class="w3DropdownItem">
<h3>Server Side</h3>
<a href="/php/php_examples.asp" target="_top">PHP Examples</a>
<a href="/asp/asp_examples.asp" target="_top">ASP Examples</a>
<a href="/aspnet/webpages_examples.asp" target="_top">Razor Examples</a>
<a href="/aspnet/aspnet_examples.asp" target="_top">.NET Examples</a>
</div>
<div class="w3DropdownItem">
<h3>XML</h3>
<a href="/xml/xml_examples.asp" target="_top">XML Examples</a>
<a href="/dom/dom_examples.asp" target="_top">XML DOM Examples</a>
<a href="/xsl/xsl_examples.asp" target="_top">XSL Examples</a>
<a href="/xsl/xsl_examples.asp" target="_top">XSLT Examples</a>
<a href="/xsl/xpath_examples.asp" target="_top">XPath Examples</a>
<a href="/xquery/xquery_example.asp" target="_top">XQuery Examples</a>
<a href="/schema/schema_example.asp" target="_top">Schema Examples</a>
<a href="/svg/svg_examples.asp" target="_top">SVG Examples</a>
</div>
</div>
</div>
<div id='w3dropdownsearch' class='w3DropdownMenu container-fluid' style="overflow:visible;">
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownInnerInner">
Search w3schools.com:
<div id='googleSearch' style="color:#000000;font-size:15px !important;"><div class='gcse-search'></div></div>
</div>
</div>
</div>
<div id='w3dropdowntranslate' class='w3DropdownMenu container-fluid'>
<div class="w3DropdownInner">
<button type="button" class="xclose w3DropdownClose" onclick="hideDropdownMenu()" title="Close"><span>&times;</span></button>
<br>
<div class="w3DropdownInnerInner">
<div id='translateSection'>
Translate w3schools.com:<div id='google_translate_element'></div></div>
</div>
</div>
</div>

<script>
var menu = $('#topnavDIV'), pos = menu.offset();
$(window).scroll(function(){
    if($(this).scrollTop() > 40){    
        $("#topDIV").css("display","none");
    } else {
        $("#topDIV").css("display","");
    }
    if($(this).scrollTop() > pos.top){
        menu.addClass('topnavContainerScroll');        
        $(".w3DropdownMenu").addClass('w3DropdownMenuScroll');        
        $("#menyen").addClass('menyenScroll');
     } else if($(this).scrollTop() <= pos.top){
        menu.removeClass('topnavContainerScroll');
        $(".w3DropdownMenu").removeClass('w3DropdownMenuScroll');
        $("#menyen").removeClass('menyenScroll');
     } });
$(document).ready(function(){
    if(/Opera Mini/i.test(navigator.userAgent) ) {
        $(".topnavContainer").addClass('topnavContainerOperaMini');
        $(".prev").addClass('prevOperaMini');
        $(".next").addClass('nextOperaMini');
        $(".home").addClass('homeOperaMini');
        $(".video").addClass('videoOperaMini');
    }
    if($(this).scrollTop() > 40){    
        $("#topDIV").css("display","none");
    } else {
        $("#topDIV").css("display","");
    }
    $("#dropdownTutorialsBtn").click(function(){
    closeTheOthers("tutorials");
    if ($("#w3dropdowntutorials").css("display") == "none") {
      $("#dropdownTutorialsBtn").css("background-color","#f5f5f5");
      $("#dropdownTutorialsBtn").css("color","#555555");
    } else {
      $("#dropdownTutorialsBtn").css("background-color","");
      $("#dropdownTutorialsBtn").css("color","");
    }
    $("#w3dropdowntutorials").fadeToggle(200, function () {$("#dropdownTutorialsBtn").css("background-color","");$("#dropdownTutorialsBtn").css("color","");});
    return false;      
  });
  $("#dropdownReferencesBtn").click(function(){
    closeTheOthers("references");
    if ($("#w3dropdownreferences").css("display") == "none") {
      $("#dropdownReferencesBtn").css("background-color","#f5f5f5");
      $("#dropdownReferencesBtn").css("color","#555555");
    } else {
      $("#dropdownReferencesBtn").css("background-color","");
      $("#dropdownReferencesBtn").css("color","");
    }
    $("#w3dropdownreferences").fadeToggle(200, function(){$("#dropdownReferencesBtn").css("background-color","");$("#dropdownReferencesBtn").css("color","");});
    return false;      
  });
  $("#dropdownExamplesBtn").click(function(){
    closeTheOthers("examples");
    if ($("#w3dropdownexamples").css("display") == "none") {
      $("#dropdownExamplesBtn").css("background-color","#f5f5f5");
      $("#dropdownExamplesBtn").css("color","#555555");
    } else {
      $("#dropdownExamplesBtn").css("background-color","");
      $("#dropdownExamplesBtn").css("color","");
    }
    $("#w3dropdownexamples").fadeToggle(200, function(){$("#dropdownExamplesBtn").css("background-color","");$("#dropdownExamplesBtn").css("color","");});
    return false;      
  });
  $("#dropdownSearchBtn").click(function(){
    closeTheOthers("search");
    if ($("#w3dropdownsearch").css("display") == "none") {
      $("#dropdownSearchBtn").css("background-color","#f5f5f5");
      $("#dropdownSearchBtn").css("color","#555555");
    } else {
      $("#dropdownSearchBtn").css("background-color","");
      $("#dropdownSearchBtn").css("color","");
    }
    $("#w3dropdownsearch").fadeToggle(200, function(){$("#gsc-i-id1").focus();$("#dropdownSearchBtn").css("background-color","");});
    return false;      
  });
  $("#dropdownTranslateBtn").click(function(){
    closeTheOthers("translate");
    if ($("#w3dropdowntranslate").css("display") == "none") {
      $("#dropdownTranslateBtn").css("background-color","#f5f5f5");
      $("#dropdownTranslateBtn").css("color","#555555");
    } else {
      $("#dropdownTranslateBtn").css("background-color","");
      $("#dropdownTranslateBtn").css("color","");
    }
    $("#w3dropdowntranslate").fadeToggle(200, function(){$("#dropdownTranslateBtn").css("background-color","");});
    return false;      
  });
  $(".main").click(function(){
    closeTheOthers();
  });
  $(".top").click(function(){
    closeTheOthers();
  });
});
function closeTheOthers(x) {
    if (x != "tutorials") { 
        $("#dropdownTutorialsBtn").css("background-color","");
        $("#dropdownTutorialsBtn").css("color","");
        $("#w3dropdowntutorials").fadeOut(100);
    }
    if (x != "references") { 
        $("#dropdownReferencesBtn").css("background-color","");
        $("#dropdownReferencesBtn").css("color","");
        $("#w3dropdownreferences").fadeOut(100);
    }
    if (x != "examples") { 
        $("#dropdownExamplesBtn").css("background-color","");
        $("#dropdownExamplesBtn").css("color","");
        $("#w3dropdownexamples").fadeOut(100);
    }
    if (x != "search") { 
        $("#dropdownSearchBtn").css("background-color","");
        $("#dropdownSearchBtn").css("color","");
        $("#w3dropdownsearch").fadeOut(100);
    }
    if (x != "translate") { 
        $("#dropdownTranslateBtn").css("background-color","");
        $("#dropdownTranslateBtn").css("color","");
        $("#w3dropdowntranslate").fadeOut(100);
    }
}
var menyknapp_hartrykket = 0;
function vismenyen() {
closeTheOthers();
x = document.getElementById("menyen");
if (menyknapp_hartrykket == 0) {
    if(/Opera Mini/i.test(navigator.userAgent) ) {
        x.style.display = "block";
        x.style.paddingBottom = "40px";        
    } else {
		x.style.position = "fixed";
		x.style.zIndex = "1000";	
	    if ($("#toptext").css("display") == "none") {
	        x.style.top = "105px";
	    } else {
	        x.style.top = "135px";
	    }
		x.style.bottom = "0";	
		x.style.overflow = "auto";	
		x.style.display = "block";
		x.style.right = "0";
		x.style.backgroundColor = "#ffffff";
		x.style.padding = "20px";
		x.style.borderLeft = "2px solid #f1f1f1";
		x.style.borderBottom = "2px solid #f1f1f1";
	}
    menyknapp_hartrykket = 1;
} else {
    x.style.display = "none";
    menyknapp_hartrykket = 0;
}
}
function hideDropdownMenu() {
    closeTheOthers();
}
skyscraperResize();

</script>
<script src="/w3schools.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->
</body>
</html>
