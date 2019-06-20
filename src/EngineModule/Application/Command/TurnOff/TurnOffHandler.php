<?php
declare(strict_types=1);

namespace App\EngineModule\Application\Command\TurnOff;


use App\EngineModule\Domain\Engines;

final class TurnOffHandler
{
	private $engines;

	public function __construct(Engines $engines)
	{
		$this->engines = $engines;
	}

	public function __invoke(TurnOffCommand $command): void
	{
		$engine = $this->engines->oneById($command->engineId());
		$engine->turnOff();
	}
}
