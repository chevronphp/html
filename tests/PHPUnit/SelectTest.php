<?php

use \Chevron\HTML;

class SelectTest extends PHPUnit_Framework_TestCase {

	/**
	 * HTML\Select::__callStatic() w/o optgroups, attributes
	 */
	function test_Select__callStatic_1(){

		$dispatcher = new HTML\SelectDispatcher;

		$el = $dispatcher->testSelect(
			["one" => "1", "two" => "2"],
			["one"],
			["class" => ["test", "testtwo"]]
		);

		$expected = "<select class=\"test testtwo\" name=\"testSelect\"><option value=\"one\" selected=\"selected\">1</option><option value=\"two\">2</option></select>";

		$this->assertEquals($expected, $el->render());
	}

	/**
	 * HTML\Select::__callStatic() w/ optgroups w/o attributes
	 */
	function test_Select__callStatic_2(){

		$dispatcher = new HTML\SelectDispatcher;

		$el = $dispatcher->testSelect(
			["numbers" => ["one" => "1", "two" => "2"]],
			["one"]
		);

		$expected = "<select name=\"testSelect\"><optgroup label=\"numbers\"><option value=\"one\" selected=\"selected\">1</option><option value=\"two\">2</option></optgroup></select>";

		$this->assertEquals($expected, $el->render());
	}

	/**
	 * HTML\Select::__callStatic() w/ optgroups w/ attributes
	 */
	function test_Select__callStatic_3(){

		$dispatcher = new HTML\SelectDispatcher;

		$el = $dispatcher->testSelect(
			["numbers" => ["one" => "1", "two" => "2"]],
			["one"],
			["class" => ["one", "two"]]
		);

		$expected = "<select class=\"one two\" name=\"testSelect\"><optgroup label=\"numbers\"><option value=\"one\" selected=\"selected\">1</option><option value=\"two\">2</option></optgroup></select>";

		$this->assertEquals($expected, $el->render());
	}

}

