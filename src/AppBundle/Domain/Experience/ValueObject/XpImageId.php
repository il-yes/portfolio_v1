<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 15:11
 */

namespace AppBundle\Domain\Experience\ValueObject;


use AppBundle\Domain\Common\ValueObject\AggregateRootId;

class XpImageId extends AggregateRootId
{
    /**
    * @var string
    */
    protected $uuid;
}