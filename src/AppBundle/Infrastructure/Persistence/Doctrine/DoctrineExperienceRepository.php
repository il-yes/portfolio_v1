<?php


namespace AppBundle\Infrastructure\Persistence\Doctrine;


use Doctrine\ORM\EntityManager;
use AppBundle\Domain\Experience\Model\Xprience;
use AppBundle\Domain\Experience\ValueObject\XprienceId;
use AppBundle\Domain\Experience\Repository\ExperienceRepository;


class DoctrineExperienceRepository implements ExperienceRepository
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function add(Xprience $aXprience)
	{
		$this->em->persist($aXprience);
	}

	public function remove(Xprience $aXprience)
	{
		$this->em->remove($aXprience);
	}

	public function xpOfId(XprienceId $anId)
	{
		return $this->em->find(
			'\AppBundle\Domain\Experience\Model\Xprience',
			$anId
		);
	}


	public function xpFromName($name)
	{
		return $this->em->find(
			'AppBundle\Domain\Experience\Model\Xprience',
			$name
		);
	}



	public function addAll(array $xpriences)
	{

	}

	public function removeAll(array $xpriences)
	{

	}


		

	public function nextIdentity()
	{
		return new XprienceId();
	}
}