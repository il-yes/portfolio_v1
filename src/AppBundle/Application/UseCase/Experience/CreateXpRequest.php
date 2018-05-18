<?php


namespace AppBundle\Application\UseCase\Experience;




class CreateXpRequest
{
	private $name;

    private $description;

    private $techno;

    private $language;

	public function __construct($name, $description, $technology, $language)
	{
		$this->name        = $name;
        $this->description = $description;
        $this->techno      = $technology;
        $this->language    = $language;
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
}