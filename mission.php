<!DOCTYPE html>
<html lang="en">

<?php include ('inc/content.php'); ?>
<?php include ('inc/header.php'); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<?php include ('inc/navigation.php'); ?>

<section class="<?= $page['tag'] ?>">
    <div class="<?= $page['tag'] ?>-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading"><?= $page['title'] ?></h1>
                    <p class="intro-text"><i class="fa fa-quote-left"></i><?= $page['quote'] ?><i class="fa fa-quote-right"></i></p>
                    <div class="page-scroll">
                        <a href="#<?= $page['anchor'] ?>" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="<?= $page['anchor'] ?>" class="container content-section text-justify">
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-right">Overview</h2>
                <?= $page['overview'] ?>
                <h2 class="text-right">The problem</h2>
                <?= $page['problem'] ?>
            </div>
            <div class="col-lg-6">
                <div class="marginbot20 margintop70">
                    <img src="<?= $page['image']['src'] ?>" class="img-responsive" alt="<?= $page['title'] ?>"   data-toggle="modal" data-target="#<?= $page['image']['target'] ?>"></div>
                <p class="small text-right"><?= $page['image']['caption'] ?></p>
                <br>
                <h2>The issue in detail</h2>
                <?= $page['issue'] ?>
                <h2>Amnesty is calling for</h2>
                <?= $page['action'] ?>
            </div>
        </div>

    </div>
    <div class="col-lg-2 keyfacts text-left margintop70">
        <h2 class="text-center">KEY FACTS</h2>
        <div>
           <?= $page['key_facts'] ?>
        </div>
    </div>
</section>

<div class="modal fade" id="<?= $page['image']['target'] ?>" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $page['image']['modal'] ?></h4>
            </div>
            <div class="modal-body">
                <img src="<?= $page['image']['src'] ?>" alt="<?= $page['title'] ?>" class="w-100">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<?php include ('inc/footer.php'); ?>
<?php include ('inc/scripts.php'); ?>

</html>
