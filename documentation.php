<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <title>IQmol Documentation</title>
   <link rel="shortcut icon" href="favicon.ico" >
   <link href="style.css" rel="stylesheet" type="text/css" />

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="IQmol, Andrew Gilbert, features" />

   <script type="text/javascript" src="js/cufon-yui.js"></script>
   <script type="text/javascript" src="js/arial.js"></script>
   <script type="text/javascript" src="js/cuf_run.js"></script>
<!--[if lt IE 7]>
<style media="screen" type="text/css">
#container {
    height:100%;
}
</style>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35964769-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>


<body>


<div id="container">

   <!-- H E A D E R -->
   <div id="header_sub">
      <div id="header_resize">
         <div id="header_logo">
            <a href="index.html">
            <img src="images/logo.png" alt="IQmol" width="170" height="59"/></a>
         </div>
         <div id="menu">
            <ul>
            <li><a href="features.html"><span>Features</span></a></li>
            <li><a href="screenshots.html"><span>Screenshots</span></a></li>
            <li><a href="downloads.html"><span>Download</span></a></li>
            <li><a href="downloads/IQmolUserGuide.pdf"><span>Manual</span></a></li>
            </ul>
          <div class="clr"></div>
         </div>
         <div class="clr"></div>

         <div class="header_img">
            <img src="images/spacer.gif" alt="" height="50"/>
         </div>
      </div>  <!-- End header_resize -->
   </div>  <!-- End header_sub -->
   <!-- E N D  H E A D E R -->


   <div id="body">
      <div class="content">


         <!-- C O N T E N T -->
         <div class="mainbar">
            <div class="article">
            <?php 
                if (isset($_GET['file'])) {
                   $valid_pages = array(
                       'calculations.html', 'index.html',   'modes.html',     'paths.html',
                       'test.html',         'credits.html', 'layers.html',    'movies.html',
                       'search.html',       'toolbar.html', 'modelview.html', 'overview.html',
                       'surfaces.html',     'vibrations.html');
                    
                   $helpfile = $_GET['file'];
//echo 'getting', $helpfile;
                 
                   if (in_array(strtok($helpfile, '#'), $valid_pages)) {
                      $helpfile = 'help/'.$_GET['file'];
                   }else {
                      $helpfile = 'help/overview.html';
                   }
                }else {
                   $helpfile = 'help/overview.html';
                }

                include($helpfile);
            ?>
            </div>  <!-- End ariticle-->
         </div>  <!-- End mainbar-->
         <!-- E N D C O N T E N T -->


         <!-- S I D E B A R -->
         <div class="sidebar">
            <div class="gadget">
               <img src="images/icon.png" alt="IQmol icon" width="180" height="180" />
            </div>
            <div class="gadget">
               <h2>Help Topics</h2>

               <ul class="sb_menu">
                  <li> <a href="documentation.php?file=overview.html">Overview</a>
                     <ul class="sb_menu">
                        <li> <a href="documentation.php?file=overview.html#open">Opening Files</a>
                        <li> <a href="documentation.php?file=overview.html#build">Building Molecules</a>
                        <li> <a href="documentation.php?file=toolbar.html">The Tool Bar</a>
                        <li> <a href="documentation.php?file=modelview.html">The Model View</a>
                     </ul>
                  <li> <a href="documentation.php?file=modes.html">Viewer Modes</a>
                     <ul class="sb_menu">
                        <li> <a href="documentation.php?file=modes.html#manipulate">Manipulate</a>
                        <li> <a href="documentation.php?file=modes.html#build">Build</a>
                        <li> <a href="documentation.php?file=modes.html#select">Select</a>
                        <li> <a href="documentation.php?file=modes.html#manipulateSelection">Manipulate Selection</a>
                     </ul>

                 <li> <a href="documentation.php?file=calculations.html">Running Q-Chem Calculations</a>
                    <ul class="sb_menu">
                       <li> <a href="documentation.php?file=calculations.html#serverConfiguration">Server Configuration</a>
                       <li> <a href="documentation.php?file=calculations.html#serverOptions">Server Options</a>
                       <li> <a href="documentation.php?file=calculations.html#submittingCalculations">Submitting Calculations</a>
                       <li> <a href="documentation.php?file=calculations.html#processMonitor">The Process Monitor</a>
                    </ul>

                 <li> <a href="documentation.php?file=surfaces.html">Plotting Surfaces</a>
                   <ul class="sb_menu">
                      <li> <a href="documentation.php?file=surfaces.html#modelDensities">Model Densities</a>
                      <li> <a href="documentation.php?file=surfaces.html#wavefunctionSurfaces">Molecular Orbitals</a>
                      <li> <a href="documentation.php?file=surfaces.html#surfaceProperties">Displaying Surface Properties</a>
                   </ul>

                <li> <a href="documentation.php?file=vibrations.html">Animations</a>
                   <ul class="sb_menu">
                      <li> <a href="documentation.php?file=vibrations.html">Vibrational Frequencies</a>
                      <li> <a href="documentation.php?file=paths.html">Visualizing Pathways</a>
                      <li> <a href="documentation.php?file=movies.html">Making Movies</a>
                   </ul>

                <li> <a href="documentation.php?file=layers.html">Layers</a>
                   <ul class="sb_menu">
                      <li> <a href="documentation.php?file=layers.html#global">Global</a>
                      <li> <a href="documentation.php?file=layers.html#molecule">Molecule</a>
                      <li> <a href="documentation.php?file=layers.html#other">Other</a>
                   </ul>

               </ul>

            </div>
         </div>  <!-- End Side Bar -->
         <div class="clr"></div>
         <!-- E N D  S I D E B A R -->


      </div>  <!-- End content-->
   </div>  <!-- End body -->


   <!-- F O O T E R -->
   <div id="footer_bg">
      <div id="footer">
         <p class="lf">&copy; Copyright &nbsp;
            <a href="http://rsc.anu.edu.au/~agilbert/gilbertspace">Andrew Gilbert</a></p>
         <p class="rf">Layout&nbsp;
            <a href="http://www.coolwebtemplates.net/">Website Templates</a></p>
      </div>
   </div>


</div>  <!-- End container -->


</body>
</html>
