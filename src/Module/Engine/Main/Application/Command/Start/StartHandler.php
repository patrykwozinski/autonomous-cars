<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Application\Command\Start;


use App\Module\Engine\Main\Domain\Engines;

final class StartHandler
{
	/** @var Engines */
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
