<?php include ('inc/autoload.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php include ('inc/home.php'); ?>
<?php include ('inc/header.php'); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<?php include ('inc/navigation.php'); ?>

    <section class="intro" style="background: url(<?= $page['sections']['intro']['image'] ?>) no-repeat bottom center /cover scroll">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?= $page['sections']['intro']['title'] ?></h1>
                        <p class="intro-text"><?= $page['sections']['intro']['content'] ?></p>
                        <p class="small"><?= $page['sections']['intro']['subtitle'] ?></p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-6">
                <h2><?= $page['sections']['about']['title'] ?></h2>
                <?= $page['sections']['about']['content'] ?>
            </div>
          <div class="col-lg-6">
          <div class="marginbot20">
          <img src="<?= $page['sections']['about']['image'] ?>" class="img-responsive" alt="<?= $page['sections']['about']['title'] ?>" data-toggle="modal" data-target="#about-modal"></div>
            <h3><i class="fa fa-quote-left"></i><?= $page['sections']['about']['quote'] ?><i class="fa fa-quote-right"></i></h3>
             
                <br>
            </div>
        </div>
      <div class="row marginbot60 margintop-30">
        <div class="col-lg-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?= $page['sections']['about']['video'] ?>" allowfullscreen></iframe>
          </div>
        </div>
        </div>
        
</section>


  <div class="modal fade" id="about-modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
          <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?= $page['sections']['about']['caption'] ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?= $page['sections']['about']['image'] ?>" class="w-100" alt="<?= $page['sections']['about']['title'] ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


        <section id="mission" class="mission-section text-center">
        <div class="about-section" style="background: url(<?= $page['sections']['mission']['image'] ?>) no-repeat center center /cover scroll;">
            <div class="container">
                <div class="row">
                <div class="col-lg-5 pull-right text-right margintop50">
                    <h2><?= $page['sections']['mission']['title'] ?></h2>
                    <div><?= $page['sections']['mission']['content'] ?></div>
                    </div>
                </div>
                <?php if(count($page['sections']['mission']['links'])) { ?>
                <div class="row">
                    <?php foreach ($page['sections']['mission']['links'] as $link) { ?>
                    <div class="img-link col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="<?= $root . $link['permalink'] ?>">
                            <img src="<?= $link['image'] ?>" class="img-responsive" alt="<?= $link['title'] ?>">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
             </div>
        </div>
    </section>
    
    <section id="history" class="history-section text-center">
        
      <div class="container">
        <div class="row">
              <div class="col-lg-5 text-left">
                  <h2><?= $page['sections']['history']['title_1'] ?></h2>
                  <?= $page['sections']['history']['content_1'] ?>
                  <br><br>
                 
               <h3><i class="fa fa-quote-left"></i><?= $page['sections']['history']['quote'] ?><i class="fa fa-quote-right"></i></h3>
<p class="small"><?= $page['sections']['history']['reference_1'] ?></p>
                
              </div>
              <div class="col-lg-7 text-left">
              
        <h2><?= $page['sections']['history']['title_2'] ?></h2>

<div class="marginbot20">
  <img src="<?= $page['sections']['history']['image'] ?>" class="img-responsive" alt="<?= $page['sections']['history']['title_1'] ?>" data-toggle="modal" data-target="#history-modal"></div>

                  <?= $page['sections']['history']['content_2'] ?>
                <p class="small"><?= $page['sections']['history']['reference_2'] ?></p>
                
              </div>
        </div>
   </div>
   </section>
   
    <div class="modal fade" id="history-modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
          <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?= $page['sections']['history']['caption'] ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?= $page['sections']['history']['image'] ?>" class="w-100" alt="<?= $page['sections']['history']['title_1'] ?>" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<?php if(count($page['sections']['history']['banners'])) { ?>
      <section id="history1" class="history-section text-center"> 
       <div class="container">     
        <div class="row col-lg-12">    
        
    <div id="myCarousel" class="carousel slide margintop40" data-ride="carousel">
    <div class="text-left"><h2><?= $page['sections']['history']['title_3'] ?></h2></div>
        <div class="carousel-inner">

            <?php foreach ($page['sections']['history']['banners'] as $key => $banner) { ?>
      <div class="item<?= $key==0 ? ' active' : '' ?>">
        <img src="<?= $banner['image'] ?>" alt="<?= $banner['title'] ?>" class="w-100">
        <div class="carousel-caption">
        <h2><?= $banner['title'] ?></h2>
        <p><?= $banner['content'] ?></p></div>
      </div>
        <?php } ?>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
        </div>     
        </div> 
    </div>
  
    </section>
<?php } ?>
    
   
    <section id="contact" class="container content-section text-center">
        <div class="row col-lg-12 marginbot50">
       
        <h2><?= $page['sections']['contact']['title'] ?></h2>
                <p style="font-size:16px"><?= $page['sections']['contact']['content'] ?></p>

        <div class="row">

            <?php foreach ($page['sections']['contact']['offices'] as $column) { ?>
            <div class="col-lg-3 text-left marginbot50 contact-info">
            <?php foreach ($column as $office) { ?>
                <h4><?=  $office['name'] ?></h4>
                <?php if(array_key_exists('phone', $office)) { ?>
                    <p><i class="fa fa-phone fa-lg"></i><?= $office['phone'] ?></p>
                    <?php } if (array_key_exists('address', $office)) { ?>
                    <p><i class="fa fa-map-marker fa-lg"></i><?= $office['address'] ?></p>
                    <?php } if (array_key_exists('po_box', $office)) { ?>
                    <p><i class="fa fa-envelope fa-lg"></i><?= $office['po_box'] ?></p>
                    <?php } if (array_key_exists('email', $office)) { ?>
                    <p><a href="mailto:<?= $office['email'] ?>"><i class="fa fa-envelope-o fa-lg"></i><?= $office['email'] ?></a></p>
                <?php } if(array_key_exists('twitter', $office)) { ?>
                    <p><a href="<?= $office['twitter']['link'] ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i><?= $office['twitter']['label'] ?></a></p>
                    <?php } ?>
            <?php } ?>
            </div>
            <?php } ?>

     <div class="col-lg-6 paddingbot50">
          <img src="<?= $page['sections']['contact']['image'] ?>" class="img-responsive" alt="<?= $page['sections']['contact']['title'] ?>" data-toggle="modal" data-target="#contact-modal">
     </div>

    <form id="contact-form" method="" action="" role="form" class="col-lg-6" novalidate>
        <h4>Contact form</h4>

        <div class="messages"></div>

    <div class="controls">

                    <div class="col-sm-6">
          
                <div class="form-group">
                    <label for="fname">Firstname *</label>
                    <input id="fname" type="text" name="fname" maxlength="80" class="form-control" required placeholder="Please enter your firstname *" data-error="<?= $page['validation']['required'] ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="lname">Lastname *</label>
                    <input id="lname" type="text" name="lname" maxlength="80" class="form-control" required placeholder="Please enter your lastname *" data-error="<?= $page['validation']['required'] ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        

            <div class="col-sm-6">
            
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input id="email" type="email" name="email" maxlength="40" class="form-control" required placeholder="Please enter your email *" pattern="^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" data-error="<?= $page['validation']['required'] ?>" data-valid="<?= $page['validation']['invalid'] ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input id="phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone *" required pattern="^\+?[0-9]{3}-?([0-9]{7}|[0-9]-[0-9]{2}-[0-9]{2}-[0-9]{2}|[0-9]{3}-[0-9]{2}-[0-9]-[0-9])$" data-error="<?= $page['validation']['required'] ?>" data-valid="<?= $page['validation']['invalid'] ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
      
        <div class="col-sm-12">
                <div class="form-group">
                    <label for="form_country">Country *</label>
                    <?php $countries = HomeController::Countries();

                    if(count($countries)) { ?>
                    <select class="form-control" id="country" name="country" required data-error="<?= $page['validation']['required'] ?>">
                        <option value="">Select Country *</option>
                        <?php foreach ($countries as $country) { ?>
                            <option value="<?= $country->id ?>">
                                <?= $country->country ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php } ?>
                    <div class="help-block with-errors"></div>
                </div>
        </div>

        
            <div class="col-sm-12">
                <div class="form-group marginbot30">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" class="form-control" required placeholder="Message for Amnesty International *" rows="4" data-error="<?= $page['validation']['required'] ?>"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
         
         <button type="button" class="btn btn-info btn-send"><i class="glyphicon glyphicon-send"></i> Send message</button>
                <button id="reset" type="reset" name="reset" class="btn btn-danger btn-reset" style="margin-left:20px;padding-right:0;"><i class="fa fa-undo"></i></button>
       </div>
       </form>  
        </div>


       </div>
                    
   
       
<div class="row col-lg-12 text-center marginbot50">

    <?php if(count($page['sections']['social'])) { ?>
 <ul class="list-inline banner-social-buttons text-center">
     <?php foreach ($page['sections']['social'] as $social) { ?>
                    <li><a href="<?= $social['link'] ?>" target="_blank"><i class="fa <?= $social['icon'] ?> fa-2x"></i> <span class="network-name"></span></a>
                    </li>
     <?php } ?>
                </ul>
    <?php } ?>
<div>
       
    </div>                   
  
    </section>

<div class="modal fade" id="contact-modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
          <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?= $page['sections']['contact']['caption'] ?></h4>
        </div>
        <div class="modal-body">
          <img src="<?= $page['sections']['contact']['image'] ?>" class="w-100" alt="<?= $page['sections']['contact']['title'] ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div>
        <iframe src="<?= $page['sections']['contact']['map'] ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

    <?php include ('inc/footer.php'); ?>
    <?php include ('inc/scripts.php'); ?>

</body>

</html>
