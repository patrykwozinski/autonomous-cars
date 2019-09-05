<?php
declare(strict_types=1);

namespace App\Module\Speedometer\Api;


interface SpeedometerApi
{
	public function currentSpeed(string $speedometerId): CurrentSpeed;
}
