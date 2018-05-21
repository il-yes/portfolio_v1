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


/**
 * Xprience
 *
 * @ORM\Table(name="xprience")
 * @ORM\Entity(repositoryClass="App\Infrastructure\Persistence\Doctrine\DoctrineExperienceRepository")
 */
class Xprience
{
    /**
     * @var int
     *
     * @ORM\Column(name="list_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="techno", type="string", length=255, nullable=false)
     */
    private $techno;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)
     */
    private $language;

    /**
     * @var XpImage[]|ArrayCollection
     */
    private $images;


    public function __construct($name, $description, $technology, $language)
    {
        $this->id          = new XprienceId();
        $this->name        = $name;
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