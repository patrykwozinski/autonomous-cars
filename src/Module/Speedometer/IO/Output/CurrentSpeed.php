<?php
declare(strict_types=1);

namespace App\Module\Speedometer\IO\Output;


final class CurrentSpeed
{
	/** @var int */
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
