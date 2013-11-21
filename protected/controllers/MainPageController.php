<?php

class MainPageController extends Controller
{

	public function actionIndex()
	{
		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$colors = array(
			"red" => "Красный",
			"orange" => "Оранжевый",
			"yellow" => "Желтый",
			"green" => "Зеленый",
			"lightblue" => "Голубой",
			"blue" => "Синий",
			"purple" => "Фиолетовый"
		);
		
		
		$model = new MainForm();
		
		if(isset($_POST['MainForm']))
		{
			$text = $_POST["MainForm"]["text"];
			$colorList = $_POST["MainForm"]["colorList"];
			$colorList = json_decode($colorList);
			if (!$colorList) {
				$colorList = array();
			}
			$colorList = array_unique($colorList);
			
			$text = explode(" ", $text);
			
			$count = count($colorList);
			$counter = 0;
			
			foreach ($text as $key => $word) {
				if ($count > 0) {
					$text[$key] = "<span class=\"".$colorList[$counter]."\">".$word."</span>";
				}
				$counter++;
				if ($counter == $count) {
					$counter = 0;
				}
			}
			
			$result = implode(" ", $text);
			
			$this->render("result", array("text" => $result));
		} else {
			$this->render("index", array("model" => $model, "colors" => $colors));
		}
	}
}