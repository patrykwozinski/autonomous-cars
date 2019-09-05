<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain\Event;


use App\Module\Engine\Main\Domain\EngineId;
use App\Module\SharedKernel\Domain\DomainEvent;

final class EngineStarted implements DomainEvent
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
