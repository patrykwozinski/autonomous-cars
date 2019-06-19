<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Application\Query\CurrentSpeed;


final class CurrentSpeedReadModel
{
	private $value;

	public function __construct(int $value)
	{
		$this->value = $value;
	}

	public function value(): int
	{
		return $this->value;
	}
}
