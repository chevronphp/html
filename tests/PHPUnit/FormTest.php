<?php

use \Chevron\HTML;

class FormTest extends PHPUnit_Framework_TestCase {

	/**
	 * HTML\Form::__callStatic() w/o attributes
	 */
	function test_Form__callStatic_wo(){
		$dispatcher = new HTML\FormDispatcher;

		$el = $dispatcher->text("name", "value");
		$this->assertEquals("<input name=\"name\" type=\"text\" value=\"value\" />", $el->render());
	}

	/**
	 * HTML\Form::__callStatic() w/ attributes
	 */
	function test_Form__callStatic_w(){
		$dispatcher = new HTML\FormDispatcher;

		$el = $dispatcher->text("name", "value", null, [
			"class" => array("testClass", "testClass2"),
			"id"    => "testID",
		]);
		$this->assertEquals("<input class=\"testClass testClass2\" id=\"testID\" name=\"name\" type=\"text\" value=\"value\" />", $el->render());
	}

	function test_setChecked(){
		$dispatcher = new HTML\FormDispatcher;

		$el = $dispatcher->radio("name", "value", true);
		$this->assertEquals("<input checked=\"checked\" name=\"name\" type=\"radio\" value=\"value\" />", $el->render());
	}

}

