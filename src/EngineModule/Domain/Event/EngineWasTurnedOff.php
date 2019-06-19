<?php
declare(strict_types=1);

namespace App\EngineModule\Domain\Event;


use App\EngineModule\Domain\EngineId;
use App\SharedKernel\Domain\DomainEvent;

final class EngineWasTurnedOff implements DomainEvent
{
	private $engineId;

	public function __construct(EngineId $engineId)
	{
		$this->engineId = $engineId;
	}

	public function engineId(): EngineId
	{
		return $this->engineId;
	}
}
