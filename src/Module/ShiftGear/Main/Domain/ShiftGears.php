<?php
declare(strict_types=1);

namespace App\Module\ShiftGear\Main\Domain;


interface ShiftGears
{
	public function oneById(ShiftGearId $shiftGearId): ShiftGear;
}
