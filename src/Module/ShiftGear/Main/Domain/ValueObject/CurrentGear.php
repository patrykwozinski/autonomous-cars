<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Domain;


final class CurrentGear
{
	private const FIRST_GEAR = 1;

	/** @var int */
	private $maximumGear;
	/** @var int */
	private $gear;

	public function __construct(int $maximumGear, int $gear)
	{
		$this->maximumGear = $maximumGear;
		$this->gear        = $gear;
	}

	public function isFirst(): bool
	{
		return self::FIRST_GEAR === $this->gear;
	}

	public function isMaximum(): bool
	{
		return ++$this->gear === $this->maximumGear;
	}
}
