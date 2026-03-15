<?php

declare(strict_types=1);

namespace MarekSkopal\MsTimeline\Domain\Model;

use DateTime;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Event extends AbstractEntity
{
    protected string $name = '';

    protected string $perex = '';

    protected string $description = '';

    protected ?DateTime $dateFrom = null;

    protected ?DateTime $dateTo = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPerex(): string
    {
        return $this->perex;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDateFrom(): ?DateTime
    {
        return $this->dateFrom;
    }

    public function getDateTo(): ?DateTime
    {
        return $this->dateTo;
    }
}
