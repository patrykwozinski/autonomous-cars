<?php
declare(strict_types=1);

namespace App\Module\Speedometer\Main\Infrastructure\ReadModel;


use App\Module\Speedometer\IO\Output\CurrentSpeed;
use App\Module\Speedometer\Main\Application\Query\CurrentSpeedQuery;
use App\Module\Speedometer\Main\Domain\SpeedometerId;

final class InMemorySpeed implements CurrentSpeedQuery
{
	public function byId(SpeedometerId $id): CurrentSpeed
	{
		return new CurrentSpeed(60);
	}
}
