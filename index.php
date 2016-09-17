<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>OpenEMR Project</title>
  <?php
    include( 'wiki/skins/openemr/FrontEndDependencies.php' );
    $dependencies = new FrontEndDependencies();
    echo $dependencies->bundleForNonWiki();
  ?>
</head>

<body>
  <?php include( 'template/header.html' );?>
  <div class="container-fluid">
    <div class="home">
      <div class="about">
        <div class="row about-logo">
          <img class="center-image" src="/wiki/skins/openemr/images/main-text.jpg" />
        </div>
      </div>
      
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">Non-profit Backing</h3></div>
          <img src="wiki/skins/openemr/images/dummy-oemr.png" alt="" class="img-responsive center-block">
          <hr>
          <div class="panel-body">
            <p>OEMR is a non-profit organization formed to ensure that all 
            people have access to high-quality medical care through the donation
            of free, open source medical software and service relating to that
            software.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">Open Source</h3></div>
          <div class="panel-body">
            <img src="wiki/skins/openemr/images/osi.png" alt="" class="img-responsive center-block">
            <hr>
            <p>OEMR is a non-profit organization formed to ensure that all 
            people have access to high-quality medical care through the donation
            of free, open source medical software and service relating to that 
            software.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h3 class="panel-title">MU2 Certification</h3></div>
          <div class="panel-body">
            <img src="wiki/skins/openemr/images/onc-cert.jpg" alt="" class="img-responsive center-block">
            <hr>
            <p>OEMR is a non-profit organization formed to ensure that all people
            have access to high-quality medical care through the donation of free,
            open source medical software and service relating to that software.
            </p>  
          </div>
        </div>
      </div>
    </div>

      <div class="row main-points">
        <div class="col-md-4 point non-profit-backing">
          <h2 class="title">
            Non-profit Backing
          </h2>
          <p class="info">
            OEMR is a non-profit organization formed to ensure that all people have access to high-quality medical care through the donation of free, open source medical software and service relating to that software.
          </p>
        </div>
        <div class="col-md-4 point open-source">
          <h2 class="title">
            Open Source
          </h2>
          <p class="info">
            Open source software has changed the world for the better. OpenEMR is a leader in healthcare open source software. Costly proprietary EMRs are no longer the only option. <a href="/wiki/index.php/FAQ#How_do_I_begin_to_volunteer_for_the_OpenEMR_project.3F">Learn how to start contributing today!</a>
          </p>
        </div>
        <div class="col-md-4 point certifications">
          <h2 class="title">
            Certifications
          </h2>
          <p class="info">
            OpenEMR is ONC Ambulatory EHR Certified. An effort is currently in place to attain the ONC Meaningful Use Stage 2 certification.
          </p>
          <p>
          </p>
        </div>
      </div>

      <div class="features">
        <div class="row title">
          <h1>A Feature-Rich Solution</h1>
        </div>
        <div class="row about-features">
          <p>
            Our vibrant community of volunteers and contributors have maintained critical OpenEMR features for over a decade. With over <a href="/wiki/index.php/OpenEMR_Features#Multilanguage_Support">30 supported languages</a>, many customizations, and full data ownership, OpenEMR features shine. On top of this, users in need of support can take advantage of our <a href="https://sourceforge.net/p/openemr/discussion/202505/">volunteer support network</a> as well as over <a href="/wiki/index.php/OpenEMR_Professional_Support">30 vendors in over 10 countries.</a>
          </p>
        </div>
        <div class="row bullets">
          <div class="col-md-4">
            <div class="center-content-inside-column">
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Demographics"><i class="fa fa-stethoscope"></i> Patient Demographics</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Scheduling"><i class="fa fa-calendar"></i> Patient Scheduling</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Prescriptions"><i class="fa fa-wpforms"></i> Prescriptions</a></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="center-content-inside-column">
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Portal"><i class="fa fa-external-link"></i> Patient Portal</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Clinical_Decision_Rules"><i class="fa fa-user-md"></i> Clinical Decision Rules</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Electronic_Medical_Records"><i class="fa fa-heart-o"></i> Electronic Medical Records</a></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="center-content-inside-column">
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Medical_Billing"><i class="fa fa-credit-card"></i> Medical Billing</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Reports"><i class="fa fa-files-o"></i> Reports</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features"><em>and more...</em></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include( 'template/footer.html' );?>
</body>

</html>
