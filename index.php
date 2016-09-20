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
  <div class="container-fluid" style="background-image:url(wiki/skins/openemr/images/slide-1.jpg);background-color:rgba(0,0,0,0.5);background-size:cover;height:395px">
    <div class="container hero">
      <div class="col-md-12 text-center " style="font-weight:400; color: #fff; font-size: 12pt;height:395px;padding-top:80px;">
        <h4>Better software. Better outcomes. Better healthcare.</h4>
        <h1><span class="logo-open">open</span><span class="logo-emr">EMR</span></h1>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="margin-bottom:10px;background:#efefef;">
    <div class="container" style="padding-top:5px;padding-bottom:25px;">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
            <h3 class="text-center" style="padding-bottom: 20px;"><small><em>Notable Users</em></small></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"><img src="wiki/skins/openemr/images/ippf.png" alt="" class="img-responsive center-block"></div>
        <div class="col-md-4"><img src="wiki/skins/openemr/images/peace-corps.png" alt="" class="img-responsive center-block"></div>
        <div class="col-md-4"><img src="wiki/skins/openemr/images/siaya.png" alt="" class="img-responsive center-block"></div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
    </div>
  </div>

<div class="container donations-needed home box-shadow">
  <div class="row">
    <div class="col-md-12">
      <h3>Help needed!</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <p class="lead">OpenEMR is in urgent need of funding for the Meaningful Use Stage II Certification. Users in the United States have reaped the bounty of the EHR Bonus in Stage I and will do so again in Stage II. The majority of users, outside the United States, have benefitted from Meaningful Use Certification as well in the creation of enhancements such as Electronic Prescribing, Clinical Reminders and Secure Messaging. The experience of our colleagues abroad will continue to improve with Stage II Certification. Please consider sending a gift today.</p>
    </div>
    <div class="col-md-4">
      <a href="#" class="btn btn-lg center-block"><i class="fa fa-2x fa-heart"></i><br/>Donate Now!</a>
    </div>
  </div>
</div>

<div class="container-fluid home box-shadow">
  <div class="row equal">
    <div class="col-md-6 hidden">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="wiki/skins/openemr/images/home-feature.png" class="img-responsive" alt="">
          </div>
          <div class="item">
            <img src="wiki/skins/openemr/images/home-feature-1.png" class="img-responsive" alt="">
          </div>
          <div class="item">
            <img src="wiki/skins/openemr/images/home-feature-2.png" class="img-responsive" alt="">
          </div>
          <div class="item">
            <img src="wiki/skins/openemr/images/home-feature-3.png" class="img-responsive" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6" style="background-image:url('wiki/skins/openemr/images/home-feature-3.png');background-size:cover">&nbsp;
    </div>
    <div class="col-md-6 features">
      <div class="">
        <div class="row title">
          <div class="col-md-12">
            <h3>A Feature-Rich Solution</h3>
          </div>
        </div>
        <div class="row bullets">
          <div class="col-md-12">
            <p>Our vibrant community of volunteers and contributors have maintained critical OpenEMR features for over a decade. With over <a href="/wiki/index.php/OpenEMR_Features#Multilanguage_Support">30 supported languages</a>, many customizations, and full data ownership, OpenEMR features shine. On top of this, users in need of support can take advantage of our <a href="https://sourceforge.net/p/openemr/discussion/202505/">volunteer support network</a> as well as over <a href="/wiki/index.php/OpenEMR_Professional_Support">30 vendors in over 10 countries.</a></p>
          </p>
          </div>
          <div class="col-md-6">
            <div class="center-content-inside-column">
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Demographics"><i class="fa fa-stethoscope"></i> Patient Demographics</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Scheduling"><i class="fa fa-calendar"></i> Patient Scheduling</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Prescriptions"><i class="fa fa-wpforms"></i> Prescriptions</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Medical_Billing"><i class="fa fa-credit-card"></i> Medical Billing</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Reports"><i class="fa fa-files-o"></i> Reports</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="center-content-inside-column">
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Patient_Portal"><i class="fa fa-external-link"></i> Patient Portal</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Clinical_Decision_Rules"><i class="fa fa-user-md"></i> Clinical Decision Rules</a></div>
              <div class="bullet"><a href="/wiki/index.php/OpenEMR_Features#Electronic_Medical_Records"><i class="fa fa-heart-o"></i> Electronic Medical Records</a></div>
              <div class="bullet text-right"><a href="/wiki/index.php/OpenEMR_Features"><em>and more...</em></a></div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

  <div class="container-fluid home what-is-openemr">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>What is OpenEMR</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-md-offset-3">
        <p>OpenEMR is the most popular open source electronic health records and medical practice management solution. <a href="/wiki/index.php/OpenEMR_Wiki_Home_Page#ONC_Ambulatory_EHR_Certification">ONC certified</a> with international usage, OpenEMR's goal is a superior alternative to its proprietary counterparts.</p>
      </div>
      <div class="col-md-3">
        <p>With passionate volunteers and contributors, <a href="http://www.oemr.org/">OEMR 501(c)3</a> is dedicated to guarding OpenEMR's status as a free, open source software solution for medical practices with a commitment to openness, kindness and cooperation. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container home">
      <div class="row equal">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading non-profit-backing"><h3 class="panel-title">Non-profit Backing</h3></div>
            <img src="wiki/skins/openemr/images/give-heart.png" alt="" class="img-responsive center-block">
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
            <div class="panel-heading open-source"><h3 class="panel-title">Open Source</h3></div>
            <div class="panel-body">
              <img src="wiki/skins/openemr/images/osi.png" alt="" class="img-responsive center-block">
              <hr>
              <p>Open source software has changed the world for the better. OpenEMR is a leader in healthcare open source software. Costly proprietary EMRs are no longer the only option. <a href="/wiki/index.php/FAQ#How_do_I_begin_to_volunteer_for_the_OpenEMR_project.3F">Learn how to start contributing today!</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading certifications"><h3 class="panel-title">MU2 Certification</h3></div>
            <div class="panel-body">
              <img src="wiki/skins/openemr/images/onc-cert.jpg" alt="" class="img-responsive center-block">
              <hr>
              <p>OpenEMR is ONC Ambulatory EHR Certified. OpenEMR is poised to attain the ONC Meaningful Use Stage 2 certification.
              </p>  
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
  <div class="container">
    <div class="home">
      
    </div>
  </div>
  <?php include( 'template/footer.html' );?>
</body>

</html>
