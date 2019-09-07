<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Api;


interface ShiftGear
{
	public function higherGear(string $shiftGearId): void;

	public function reduceGear(string $shiftGearId): void;
}
