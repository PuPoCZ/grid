<?php declare (strict_types = 1);

namespace PuPo\Grid;

use Nette\SmartObject;

class Service
{

	use SmartObject;

    /**
     *
     */
    public function printThis(): void
    {
        dump('pivo');
        exit;
    }

}
