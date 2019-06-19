<?php
declare(strict_types=1);

namespace App\SharedKernel\Domain;


abstract class AggregateRoot
{
	private $events = [];

	final public function pullEvents(): array
	{
		$events       = $this->events;
		$this->events = [];

		return $events;
	}

	final protected function record(DomainEvent $event): void
	{
		$this->events[] = $event;
	}
}
