<?php


namespace AppBundle\Domain\Experience\Repository;

use AppBundle\Domain\Experience\Model\Xprience;

interface ExperienceRepository
{
	public function add(Xprience $xprience);

	public function addAll(array $xpriences);

	public function remove(Xprience $xprience);

	public function removeAll(array $xpriences);
	// ...
}