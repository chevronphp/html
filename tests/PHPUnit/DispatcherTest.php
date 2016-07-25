<?php

use \Chevron\HTML;

class DispatcherTest extends PHPUnit_Framework_TestCase {

	function test_Element__call(){

		$dispatcher = new HTML\ElementDispatcher;

		$el = $dispatcher->div("This is a <bad>data string</bad>");
		$this->assertEquals("<div>This is a &lt;bad&gt;data string&lt;&sol;bad&gt;</div>", $el->render());

	}

	function test_Form__call(){

		$dispatcher = new HTML\FormDispatcher;

		$el = $dispatcher->text("name", "value");
		$this->assertEquals("<input name=\"name\" type=\"text\" value=\"value\" />", $el->render());
	}

	function test_Select__call(){

		$dispatcher = new HTML\SelectDispatcher;

		$el = $dispatcher->testSelect(
			["one" => "1", "two" => "2"],
			["one"],
			["class" => ["test", "testtwo"]]
		);

		$expected = "<select class=\"test testtwo\" name=\"testSelect\"><option value=\"one\" selected=\"selected\">1</option><option value=\"two\">2</option></select>";

		$this->assertEquals($expected, $el->render());
	}

}

