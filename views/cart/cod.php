<?php
/* @var $this yii\web\View */
?>

<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="box_style_2">
				<h2 class="inner">Order confirmed!</h2>
				<div id="confirm">
					<i class="icon_check_alt2"></i>
					<h3>Thank you!</h3>
					<p>
						You order has been confirmed, we will email the details. Your order is 
                        <a target="_blank" class="view_detail" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/order/view', 'id' => $model->id]) ?>">
                            <?= $model->sn ?>
                        </a>.We will dispatch your order asap. 
					</p>
				</div>
				<h4>Summary</h4>
				<table class="table table-striped nomargin">
				<tbody>
				<tr>
					<td>
						<strong>1x</strong> Enchiladas
					</td>
					<td>
						<strong class="pull-right">$11</strong>
					</td>
				</tr>
				<tr>
					<td>
						<strong>2x</strong> Burrito
					</td>
					<td>
						<strong class="pull-right">$14</strong>
					</td>
				</tr>
				<tr>
					<td>
						<strong>1x</strong> Chicken
					</td>
					<td>
						<strong class="pull-right">$20</strong>
					</td>
				</tr>
				<tr>
					<td>
						<strong>2x</strong> Corona Beer
					</td>
					<td>
						<strong class="pull-right">$9</strong>
					</td>
				</tr>
				<tr>
					<td>
						<strong>2x</strong> Cheese Cake
					</td>
					<td>
						<strong class="pull-right">$12</strong>
					</td>
				</tr>
				<tr>
					<td>
						 Delivery schedule <a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Please consider 30 minutes of margin for the delivery!"><i class="icon_question_alt"></i></a>
					</td>
					<td>
						<strong class="pull-right">Today 07.30 pm</strong>
					</td>
				</tr>

                <tr>
					<td>
						 Points earned from this order
					</td>
					<td >
						<strong class="pull-right"><?= $model->amount ?></strong>
					</td>
				</tr>
                
				<tr>
					<td class="total_confirm">
						 TOTAL PAID
					</td>
					<td class="total_confirm">
						<span class="pull-right"><?= $model->amount ?></span>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div><!-- End row -->
</div>