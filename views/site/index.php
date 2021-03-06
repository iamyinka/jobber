<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if(null !== Yii::$app->session->getFlash('success')) : ?>
    <div class="alert alert-success">
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>
    <div class="jumbotron">
        <h1>Job Hunting?</h1>

        <p class="lead">Browse published open job listings or find employees.</p>

        <p><a class="btn btn-lg btn-success" href="index.php?r=job/index">View Listings &raquo;</a> <a class="btn btn-lg btn-primary" href="index.php?r=job/create">Post Jobs &raquo;</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Browse Jobs</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Find A Job &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Find Employees</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Search Resumes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Get Help</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Contact Us &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
