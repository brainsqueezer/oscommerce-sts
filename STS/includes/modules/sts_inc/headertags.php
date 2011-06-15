<?php
/*
  $Id: headertags.php,v 3.0 2005/02/12 23:55:58 rigadin Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License

Based on: Simple Template System (STS) - Copyright (c) 2004 Brian Gallagher - brian@diamondsea.com
v3.0 by Rigadin (rigadin@osc-help.net)
*/

  $sts->start_capture();
  if ( file_exists(DIR_WS_INCLUDES . 'header_tags.php') ) {
    include_once (DIR_WS_FUNCTIONS . 'clean_html_comments.php');
    include_once(DIR_WS_FUNCTIONS . 'header_tags.php');
    include(DIR_WS_INCLUDES . 'header_tags.php');
  } 
  $sts->stop_capture('headertags');

?>
