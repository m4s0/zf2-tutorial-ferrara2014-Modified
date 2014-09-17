<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class GetHostName extends AbstractHelper {

	public function __invoke() {

		return gethostname();
		
	}

}