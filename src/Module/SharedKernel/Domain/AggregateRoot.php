<?php
declare(strict_types=1);

namespace App\Module\SharedKernel\Domain;


abstract class AggregateRoot
{
	/** @var DomainEvent[] */
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
