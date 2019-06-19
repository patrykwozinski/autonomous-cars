<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Api;


interface ShiftGearApi
{
	public function higherGear(string $shiftGearId): void;

	public function reduceGear(string $shiftGearId): void;
}
