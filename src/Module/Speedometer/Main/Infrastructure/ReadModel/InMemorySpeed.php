<?php
declare(strict_types=1);

namespace App\Module\Speedometer\Main\Infrastructure\ReadModel;


use App\Module\Speedometer\Main\Application\Query\CurrentSpeed\CurrentSpeedQuery;
use App\Module\Speedometer\Main\Application\Query\CurrentSpeed\CurrentSpeedReadModel;
use App\Module\Speedometer\Main\Domain\SpeedometerId;

final class InMemorySpeed implements CurrentSpeedQuery
{
	public function byId(SpeedometerId $id): CurrentSpeedReadModel
	{
		return new CurrentSpeedReadModel(60);
	}
}
