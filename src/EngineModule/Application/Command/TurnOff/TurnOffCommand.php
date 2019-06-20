<?php
declare(strict_types=1);

namespace App\EngineModule\Application\Command\TurnOff;


use App\EngineModule\Domain\EngineId;

final class TurnOffCommand
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
