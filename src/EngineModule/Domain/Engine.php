<?php
declare(strict_types=1);

namespace App\EngineModule\Domain;


use App\EngineModule\Domain\Event\EngineWasTurnedOff;
use App\EngineModule\Domain\ValueObject\Speed;
use App\SharedKernel\Domain\AggregateRoot;

final class Engine extends AggregateRoot
{
	private $id;
	private $speed;

	public function __construct(EngineId $id, Speed $speed)
	{
		$this->id    = $id;
		$this->speed = $speed;
	}

	public function turnOff(): void
	{
		$this->speed = new Speed(0);

		$this->record(new EngineWasTurnedOff($this->id));
	}
}
