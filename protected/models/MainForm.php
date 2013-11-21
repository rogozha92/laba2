<?php

class MainForm extends CFormModel
{
    public $colors;
	public $activeColors;
	public $text;
	public $colorList;
 
    public function rules()
    {
        // return array(
            // array('username, password', 'required'),
            // array('rememberMe', 'boolean'),
            // array('password', 'authenticate'),
        // );
        return array();
    }

}

?>