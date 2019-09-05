<?php
declare(strict_types=1);

namespace App\Module\Speedometer\Main\Application\Query\CurrentSpeed;


use App\Module\Speedometer\Main\Domain\SpeedometerId;

interface CurrentSpeedQuery
{
	public function byId(SpeedometerId $id): CurrentSpeedReadModel;
}
