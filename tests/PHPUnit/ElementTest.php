<?php

use \Chevron\HTML;

class ElementTest extends PHPUnit_Framework_TestCase {

	/**
	 * HTML\Element::__callStatic() w/o attributes
	 */
	function test_Element__callStatic_wo(){

		$dispatcher = new HTML\ElementDispatcher;

		$el = $dispatcher->div("This is a <bad>data string</bad>");
		$this->assertEquals("<div>This is a &lt;bad&gt;data string&lt/bad&gt;</div>", $el->render());
	}

	/**
	 * HTML\Element::__callStatic() w attributes
	 */
	function test_Element__callStatic_w(){

		$dispatcher = new HTML\ElementDispatcher;

		$el = $dispatcher->div("boom", [
			"class" => array("testClass", "testClass2"),
			"id"    => "testID",
		]);
		$this->assertEquals("<div class=\"testClass testClass2\" id=\"testID\">boom</div>", $el->render());
	}

}

