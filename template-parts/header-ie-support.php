<?php /**
    Need to accommodate for some old IE browser? (hopefully you don't) 
    Contiditionals: https://msdn.microsoft.com/en-us/library/ms537512(v=vs.85).aspx
*/
?><!-- Just a blank example rule in case you need specific rules for anything lower than IE 6 -->
<!--[if lt IE 6 ]>  <![endif]-->

<!-- Respond fixes min/max-width CSS3 Media Queries (for IE 6-8, and more) (https://github.com/scottjehl/Respond) -->
<!--[if gte IE 6 ]> <script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script> <![endif]-->
<!--[if lte IE 8 ]> <script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script> <![endif]-->

<!-- Just a blank example rule in case you need specific rules for IE 9 -->
<!--[if IE 9 ]>  <![endif]-->

<!-- Also add any custom IE styling necessary (for greater than IE 9) -->
<!--[if gt IE 9]> <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css"> <![endif]-->
