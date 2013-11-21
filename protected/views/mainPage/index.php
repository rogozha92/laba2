<div class="form">
	<?php echo CHtml::beginForm(); ?>
	 
	<?php echo CHtml::errorSummary($model); ?>
	
	<?php echo CHtml::activeHiddenField($model, "colorList"); ?>
	 
	<div class="row">
	<table cellspacing="0" cellpadding="0" id="colorTable">
	<tr>
		<td><?php echo CHtml::activeListBox($model, "colors", $colors, array("class" => "listBox")); ?></td>
		<td><?php echo CHtml::button("ADD", array("id" => "addButton")); ?></td>
		<td><?php echo CHtml::activeListBox($model, "activeColors", array(), array("class" => "listBox")); ?></td>
	</tr>
	</table>
	</div>
	<?php echo CHtml::activeTextArea($model, "text", array("style" => "margin: 20px 0; width: 480px; height: 150px; display: block;")); ?></
	 
	<div class="row submit">
	<?php echo CHtml::submitButton('Готово'); ?>
	</div>
	 
	<?php echo CHtml::endForm(); ?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			colors = {
				"red": "Красный",
				"orange": "Оранжевый",
				"yellow": "Желтый",
				"green": "Зеленый",
				"lightblue": "Голубой",
				"blue": "Синий",
				"purple": "Фиолетовый"
			};
			
			added = [];
		
			$("#addButton").click(function() {
				selectedValue = $("#MainForm_colors").val();
				if (selectedValue != null) {
					var notExists = true;
					for (element in added) {
						if (added[element] == selectedValue) {
							notExists = false;
						}
					}
					if (notExists == true) {
						added[added.length] = selectedValue;
						$("#MainForm_colorList").val(JSON.stringify(added));
						$("#MainForm_activeColors").append($("<option></option>").attr("value", selectedValue).text(colors[selectedValue]));
					}
				}
			});
		});
	</script>
</div>