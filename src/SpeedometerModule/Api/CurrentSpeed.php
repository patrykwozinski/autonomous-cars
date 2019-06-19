<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Api;


final class CurrentSpeed
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
