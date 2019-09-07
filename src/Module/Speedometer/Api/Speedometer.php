<?php
declare(strict_types=1);

namespace App\Module\Speedometer\Api;


use App\Module\Speedometer\IO\Output\CurrentSpeed;

interface Speedometer
{
	public function currentSpeed(string $speedometerId): CurrentSpeed;
}
