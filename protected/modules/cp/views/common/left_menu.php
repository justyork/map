<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 30.06.14
 * Time: 22:35
 */
?>

<?php $this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'dker',
		'id' => 'menu'
	),
	'encodeLabel' => false,
	//'linkLabelWrapper' => 'false',
	'submenuHtmlOptions' => array(
		'class' => 'subresp',
	),
	'items'=>array(
		array('label' => 'Menu', 'itemOptions' => array('class' => 'nav-header')),
		array('label' => '',  'itemOptions' => array('class' => 'nav-divider')),
		array('label' => '<i class="fa fa-dashboard"></i> <span class="link-title">'. Yii::t('menu', 'Home').'</span>', 'url'=>array('/cp/')),
		array('label' => '<i class="fa fa-user"></i> <span class="link-title">'. Yii::t('menu', 'Users').'</span>', 'url'=>array('/cp/users/index')),
		array('label' => '<i class="fa fa-folder-open"></i> <span class="link-title">'. Yii::t('menu', 'Groups').'</span>', 'url'=>array('/cp/groups')),
		array('label' => '<i class="fa fa-lock"></i> <span class="link-title">'. Yii::t('menu', 'Actions').'</span>', 'url'=>array('/cp/actions')),


		/*array('label' => '<i class="icon-hdd"></i>' . Yii::t('menu', 'properties'),
			'url'=>array('#'),
			//'visible' => in_array("SHOW_PROPERTY_MENU", Access::Act()),
			'items' => array(
				//array('label' => Yii::t('menu', 'properties'), 'url'=>array('property/index'),
				//	'visible' => in_array("PROPERTY_VIEW", Access::Act())),
				array('label' => Yii::t('menu', 'usersProperty'), 'url'=>array('usersProperty/index'),
					'visible' => in_array("USERSPROPERTY_VIEW", Access::Act())),

			)
		),*/

	),
)); ?>
<!--
<ul id="menu" class="dker">
	<li class="nav-header">Menu</li>
	<li class="nav-divider"></li>
	<li class="active">
		<a href="dashboard.html"> <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span> </a>
	</li>
	<li class="">
		<a href="javascript:;">
			<i class="fa fa-building "></i>
			<span class="link-title">Layouts</span>
			<span class="fa arrow"></span>
		</a>
		<ul>
			<li class="">
				<a href="fixed-header.html"> <i class="fa fa-angle-right"></i>&nbsp;Fixed Header</a>
			</li>
			<li class="">
				<a href="fixed-menu.html"> <i class="fa fa-angle-right"></i>&nbsp;Fixed Menu</a>
			</li>

		</ul>
	</li>

	<li>
		<a href="/cp/users"> <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Users</span> </a>
	</li>
</ul>-->
<!-- /#menu -->