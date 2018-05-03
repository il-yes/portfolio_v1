<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 11:56
 */

namespace AppBundle\Domain\Experience\Model;


use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Domain\Experience\ValueObject\XprienceId;

class Xprience
{
    private $id;

    private $name;

    private $description;

    private $techno;

    private $language;

    /**
     * @var XpImage[]|ArrayCollection
     */
    private $images;


    public function __construct($description, $technology, $language, $images)
    {
        $this->id          = new XprienceId();
        $this->description = $description;
        $this->techno      = $technology;
        $this->language    = $language;
        $this->images      = new ArrayCollection();
    }

    public function name()
    {
        return $this->name;
    }

    public function description()
    {
        return $this->description;
    }

    public function techno()
    {
        return $this->techno;
    }

    public function language()
    {
        return $this->language;
    }

    public function images($image)
    {
        return $this->images[$image];
    }
}