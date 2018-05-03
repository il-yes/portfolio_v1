<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 12:17
 */

namespace AppBundle\Domain\Common\Exception;

/**
 * Class InvalidUUIDException
 * @package Domain\Common\Exception
 */
class InvalidUUIDException extends \InvalidArgumentException
{

    /**
     * InvalidUUIDException constructor.
     */
    public function __construct()
    {
        parent::__construct("aggregator_root.exception.invalid_uuid", 400);
    }

}