<?php 

namespace AppBundle\Infrastructure\Persistence\Redis;




class RedisExperienceRepository implements ExperienceRepository
{
	private $client;

	public function __construct()
	{
		$this->client = new \Predis\Client();
	}

	public function find($id)
	{
		$xp = $this->client->get($this->getKey($id));
		if (!$xp) {
			return null;
		}

		return unserialize($xp);
	}

	public function update(Xprience $xp)
	{
		$this->client->set(
		$this->getKey($xp->getId()),
		serialize($xp)
		);
	}

	private function getKey($id)
	{
		return 'experience:' . $id;
	}
}