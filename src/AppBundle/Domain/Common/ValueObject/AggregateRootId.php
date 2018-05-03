<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 12:07
 */

namespace AppBundle\Domain\Common\ValueObject;


use Domain\Common\Exception\InvalidUUIDException;
use Ramsey\Uuid\Uuid;

class AggregateRootId
{

    /**
     * @var string
     */
    protected $uuid;

    public function __construct(?string $id = null)
    {
        try {
            $this->uuid = Uuid::fromString($id ?: (string) Uuid::uuid4())->toString();
        } catch (\InvalidArgumentException $e) {
            throw new InvalidUUIDException();
        }
    }

    /**
     * @param AggregateRootId $aggregateRootId
     * @return bool
     */
    public function equals(AggregateRootId $aggregateRootId)
    {
        return $this->uuid === $aggregateRootId->__toString();
    }

    /**
     * @return mixed
     *
     */
    public function bytes()
    {
        return Uuid::fromString($this->uuid)->getBytes();
    }

    /**
     * @param string $bytes
     * @return static
     */
    public static function fromBytes($bytes)
    {
        return new static(Uuid::fromBytes($bytes)->toString());
    }

    public static function toBytes($uid)
    {
        return (new static($uid))->bytes();
    }

    public function __toString()
    {
        return (string) $this->uuid;
    }
}