
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>OpenEMR Project</title>

<?php
  include( 'wiki/skins/openemr/FrontEndDependencies.php' );
  $dependencies = new FrontEndDependencies();
  echo $dependencies->bundleForNonWiki();
?>
</head>

<!-- TODO: why doesn't the css on `body` apply this correctly? -->
<body style="background: #f2f5f8"">
  <div class="container_webpage">
    <?php include( 'template/header.html' );?>

    <div class="page-not-found">
      <h2>Page not found.</h2>
    </div>

    <?php include( 'template/footer.html' );?>
  </div>
</body>

</html>
