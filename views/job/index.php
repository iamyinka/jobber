<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1 class="page-header">Jobs <a href="/index.php?r=job/create" class="btn btn-success pull-right">Post A New Job</a></h1>

<?php if(null !== Yii::$app->session->getFlash('success')) : ?>
	<div class="alert alert-success">
		<?php echo Yii::$app->session->getFlash('success'); ?>
	</div>
<?php endif; ?>

<?php if (!empty($jobs)) : ?>
<ul class="list-group">
	<?php foreach($jobs as $job): ?>
		
			<?php $phpdate = strtotime($job->create_date) ?>
			<?php $formatted_date = date("F j, Y, g:i a", $phpdate) ?>
			<li class="list-group-item"><a href="/index.php?r=job/details&id=<?php echo $job->id; ?>"><?php echo $job -> title; ?></a> - <strong><?php echo $job->city; ?>, <?php echo $job->state; ?></strong> - Listed on <?php echo $formatted_date; ?></li>
		

		
	<?php endforeach; ?>
</ul>
<?php else : ?>
	<p class="text-center">There are no job listings</p>
<?php endif; ?>
<?php LinkPager::widget(['pagination' => $pagination]) ?>