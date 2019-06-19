<?php
declare(strict_types=1);

namespace App\ShiftGearModule\Api;


interface ShiftGearApi
{
	public function higherGear(): void;
	public function reduceGear(): void;
}
