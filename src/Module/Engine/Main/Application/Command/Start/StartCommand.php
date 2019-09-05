<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Application\Command\Start;


use App\Module\Engine\Main\Domain\EngineId;

final class StartCommand
{
	private $engineId;

	public function __construct(string $engineId)
	{
		$this->engineId = EngineId::fromString($engineId);
	}

	public function engineId(): EngineId
	{
		return $this->engineId;
	}
}
