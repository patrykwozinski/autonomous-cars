<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


final class ShiftGear
{
	private $id;

	public function __construct(ShiftGearId $id)
	{
		$this->id = $id;
	}

	public function higherGear(): void
	{
	}

	public function reduceGear(): void
	{
	}
}
