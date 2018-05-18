<?php


namespace AppBundle\Application\UseCase\Experience;


use AppBundle\Domain\Experience\Repository\ExperienceRepository;
use AppBundle\Domain\Experience\Model\Xprience;

class CreateXpService
{
	private $experienceRepository;
	
	public function __construct(ExperienceRepository $xpRepository)
	{
		$this->experienceRepository = $xpRepository;
	}


	public function execute(CreateXpRequest $request)
	{
		/*
		$xp = $this->experienceRepository->xpFromName($request->name());
		
		if ($xp) {
			throw new XpNameAlreadyExistsException();
		}
		*/
		$xp = new Xprience(
			//$this->experienceRepository->nextIdentity(),
			$request->name(),
			$request->description(),
			$request->techno(),
			$request->language()
		);

		$this->experienceRepository->add($xp);


		return new ExperienceDto($xp);
	}
}