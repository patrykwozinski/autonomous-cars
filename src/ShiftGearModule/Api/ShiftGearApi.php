<?php
declare(strict_types=1);

namespace ShiftGearModule\Api;


interface ShiftGearApi
{
	public function higherGear(): void;
	public function reduceGear(): void;
}
