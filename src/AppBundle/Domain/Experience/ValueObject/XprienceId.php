<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 12:01
 */

namespace AppBundle\Domain\Experience\ValueObject;


use AppBundle\Domain\Common\ValueObject\AggregateRootId;

class XprienceId extends AggregateRootId
{
    /**
     * @var string
     */
    protected $uuid;


    public function __toString()
	{
		return $this->uuid;
	}
}