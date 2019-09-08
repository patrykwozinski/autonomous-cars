<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Api;


use App\Module\ShiftGear\IO\Output\Gear;

interface ShiftGear
{
	public function higherGear(string $shiftGearId): void;

	public function reduceGear(string $shiftGearId): void;

	public function currentGear(string $shiftGearId): Gear;
}
