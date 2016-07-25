<?php

namespace Chevron\HTML\Traits;

trait EncodeEntitiesTrait {

	/**
	 * method to explicitly call __toString();
	 * @return string
	 */
	function toEntity($string){
		return \htmlentities($string, \ENT_COMPAT | \ENT_HTML5);
	}

}
