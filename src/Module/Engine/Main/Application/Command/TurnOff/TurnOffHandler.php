<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Application\Command\TurnOff;


use App\Module\Engine\Main\Domain\Engines;

final class TurnOffHandler
{
	/** @var Engines */
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
