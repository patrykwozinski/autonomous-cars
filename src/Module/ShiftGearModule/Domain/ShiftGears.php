<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Domain;


interface ShiftGears
{
	public function oneById(ShiftGearId $shiftGearId): ShiftGear;
}
