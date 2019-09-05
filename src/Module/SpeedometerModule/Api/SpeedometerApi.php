<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Api;


interface SpeedometerApi
{
	public function currentSpeed(string $speedometerId): CurrentSpeed;
}
