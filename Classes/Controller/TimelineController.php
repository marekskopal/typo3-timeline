<?php

declare(strict_types=1);

namespace MarekSkopal\MsTimeline\Controller;

use MarekSkopal\MsTimeline\Domain\Repository\EventRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TimelineController extends ActionController
{
    public function __construct(private readonly EventRepository $eventRepository)
    {
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('events', $this->eventRepository->findAllOrdered());

        return $this->htmlResponse();
    }
}
