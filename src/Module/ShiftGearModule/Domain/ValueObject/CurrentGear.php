<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


final class CurrentGear
{
	private $maximumGear;
	private $gear;

	public function __construct(int $maximumGear, int $gear = 1)
	{
		$this->maximumGear = $maximumGear;
		$this->gear        = $gear;
	}

	public function isFirst(): bool
	{
		return 1 === $this->gear;
	}

	public function isMaximum(): bool
	{
		return ++$this->gear === $this->maximumGear;
	}
}
