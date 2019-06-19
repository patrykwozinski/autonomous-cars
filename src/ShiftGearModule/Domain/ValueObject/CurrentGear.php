<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


final class CurrentGear
{
	private $gear;
	private $maximumGear;

	public function __construct(int $gear, int $maximumGear)
	{
		$this->maximumGear = $maximumGear;
		$this->gear        = $gear;
	}

	public function isMaximum(): bool
	{
		return ++$this->gear === $this->maximumGear;
	}
}
