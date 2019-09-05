<?php
declare(strict_types=1);

namespace App\Module\Engine\Main\Domain;


use App\Module\Engine\Main\Domain\Event\EngineStarted;
use App\Module\Engine\Main\Domain\Event\EngineTurnedOff;
use App\Module\Engine\Main\Domain\ValueObject\Speed;
use App\Module\SharedKernel\Domain\AggregateRoot;

final class Engine extends AggregateRoot
{
	private $id;
	private $speed;

	public function __construct(EngineId $id, Speed $speed)
	{
		$this->id    = $id;
		$this->speed = $speed;
	}

	public function start(): void
	{
		$this->speed = Speed::initial();

		$this->record(new EngineStarted($this->id));
	}

	public function turnOff(): void
	{
		$this->speed = new Speed(0);

		$this->record(new EngineTurnedOff($this->id));
	}

	public function increaseSpeed(): void
	{
		$this->speed = $this->speed->increase();
	}

	public function decreaseSpeed(): void
	{
		$this->speed = $this->speed->decrease();
	}
}
