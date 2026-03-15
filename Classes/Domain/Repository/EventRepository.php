<?php

declare(strict_types=1);

namespace MarekSkopal\MsTimeline\Domain\Repository;

use MarekSkopal\MsTimeline\Domain\Model\Event;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/** @extends Repository<Event> */
class EventRepository extends Repository
{
    /** @return QueryResultInterface<int, Event> */
    public function findAllOrdered(): QueryResultInterface
    {
        $query = $this->createQuery();
        $query->setOrderings(['dateFrom' => QueryInterface::ORDER_DESCENDING]);
        return $query->execute();
    }
}
