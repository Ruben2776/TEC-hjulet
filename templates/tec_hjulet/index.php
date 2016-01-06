<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?>
<!doctype html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Source+Sans+Pro:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="icon" type="image/png" href="/images/favicon.png" />
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
  
    <div id="logo" class="light"><jdoc:include type="modules" name="logo" /></div>
  <nav id="TopMenu" class="light">
    <jdoc:include type="modules" name="nav" />
  </nav>

  <div id="main" class="light">
        <jdoc:include type="modules" name="advertisement" />
        <jdoc:include type="modules" name="breadcrumb" />
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="left" />
        <jdoc:include type="modules" name="right" />
        <jdoc:include type="modules" name="main" />
        <jdoc:include type="modules" name="user1" />
        <jdoc:include type="modules" name="user2" />
        <jdoc:include type="modules" name="user3" />
        <jdoc:include type="modules" name="user4" />  
   </div>

  <jdoc:include type="modules" name="footer" />
  <jdoc:include type="modules" name="debug" />
</body>

</html>
