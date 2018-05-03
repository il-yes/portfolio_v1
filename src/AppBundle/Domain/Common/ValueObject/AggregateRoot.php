<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 12:09
 */

namespace AppBundle\Domain\Common\ValueObject;


abstract class AggregateRoot
{

    /**
     * @var AggregateRootId
     */
    protected $uuid;

    protected function __construct(AggregateRootId $aggregateRootId)
    {
        $this->uuid = $aggregateRootId;
    }

    /**
     * @return AggregateRootId
     */
    public function uuid()
    {
        return $this->uuid;
    }

    /**
     * @param AggregateRootId $aggregateRootId
     * @return mixed
     */
    final public function equals(AggregateRootId $aggregateRootId)
    {
        return $this->uuid->equals($aggregateRootId);
    }



    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->uuid;
    }
}