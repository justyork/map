<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 14.03.14
 * Time: 0:11
 */

class Access{


	public static function Can($action){
		$group = Groups::model()->findByPk(Yii::app()->user->group);

		if(!$group)
			return false;
		$actions = array();
		foreach($group->_actions as $act){
			$actions[$act->id] = $act->name;
		}

		if(in_array($action, $actions))
			return true;
		else
			return false;
	}

	public static function Act(){
		if(isset(Yii::app()->user->group))
			$group = Groups::model()->findByPk(Yii::app()->user->group);
		else
			return array();



		$actions = array();
		foreach($group->_actions as $act){
			$actions[$act->id] = $act->name;
		}
		return $actions;
	}

}