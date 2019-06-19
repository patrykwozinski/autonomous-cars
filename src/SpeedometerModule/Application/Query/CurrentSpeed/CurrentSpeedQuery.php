<?php
declare(strict_types=1);

namespace App\SpeedometerModule\Application\Query\CurrentSpeed;


use App\SpeedometerModule\Domain\SpeedometerId;

interface CurrentSpeedQuery
{
	public function byId(SpeedometerId $id): CurrentSpeedReadModel;
}
