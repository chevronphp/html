<?php

namespace Chevron\HTML\Traits;

trait ElementInnerHTMLTrait {

	/**
	 * the "innerHTML" of the current object
	 */
	protected $innerHTML = "";

	/**
	 * Add content to an Element object
	 * @param scalar $innerHTML The content to add
	 * @return
	 */
	function setInnerHTML($innerHTML){
		if(!is_array($innerHTML)){
			$innerHTML = [$innerHTML];
		}

		$this->innerHTML = $innerHTML;
	}

	/**
	 * method to entity-ize the innerHTML
	 * @return string
	 */
	protected function marshalInnerHTML(){
		if(empty($this->innerHTML)){
			return "";
		}

		$innerHTML = "";
		foreach($this->innerHTML as $entry){
			$innerHTML .= is_string($entry) ? $this->toEntity($entry) : $entry->__toString();
		}
		return $innerHTML;
	}

	/**
	 * method to sanitize values MUST exist
	 * @param scalar $value The value to convert
	 * @return string
	 */
	abstract function toEntity($value);

}