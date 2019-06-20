<?php
declare(strict_types=1);

namespace App\EngineModule\Application\Command\Start;


use App\EngineModule\Domain\Engines;

final class StartHandler
{
	private $engines;

	public function __construct(Engines $engines)
	{
		$this->engines = $engines;
	}

	public function __invoke(StartCommand $command): void
	{
		$engine = $this->engines->oneById($command->engineId());
		$engine->start();
	}
}
