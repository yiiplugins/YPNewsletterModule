<div class="container">
<h1>Manage Newsletter Contact Lists</h1>
<?php $this->widget('ext.yiiplugins.YPNewsletterModule.components.YPMenuWidget'); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'newsletter-contact-list-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		array(
		'header'=>'Group',
		'value'=>'CHtml::value($data,"ypNewsletterGroups.newsletterTemplate.name")',
		),
		//'yp_newsletter_groups_id',
		array(
		'header'=>'Sender',
		'value'=>'CHtml::value($data,"ypNewsletterGroups.newsletterTemplate.email_from")',
		),
		array(
		'name'=>'data_attributes_data',
		'header'=>'Receiver info',
		'type'=>'raw',
		'value'=>'NewsletterGroups::renderFieldsData($data->data_attributes_data)',
		),
		array(
		'header'=>'Status',
		'value'=>'Yii::app()->getModule("newsletter")->getSendStatus($data->id)',
		'htmlOptions'=>array('style'=>'text-align:center')
		),
		array(
		'header'=>'Log',
		'value'=>'CHtml::encode("N/A")',
		'htmlOptions'=>array('style'=>'text-align:center')
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}'
		),
	),
)); ?>

<div>
<strong>Note: Group, Contact, Template status must be Active to send mail</h3>
</div>

</div>

