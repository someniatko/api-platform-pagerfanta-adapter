<?php

declare(strict_types=1);

namespace Someniatko\ApiPlatformPagerfantaAdapter;

use ApiPlatform\Core\DataProvider\PaginatorInterface;
use Pagerfanta\Pagerfanta;

final class PagerfantaAdapter implements PaginatorInterface
{
    /** @var Pagerfanta */
    private $pagerfanta;

    public function __construct(Pagerfanta $pagerfanta)
    {
        $this->pagerfanta = $pagerfanta;
    }

    public function count(): int
    {
        return $this->pagerfanta->count();
    }

    public function getLastPage(): float
    {
        return (float)$this->pagerfanta->getNbPages();
    }

    public function getTotalItems(): float
    {
        return (float)$this->pagerfanta->getNbResults();
    }

    public function getCurrentPage(): float
    {
        return (float)$this->pagerfanta->getCurrentPage();
    }

    public function getItemsPerPage(): float
    {
        return (float)$this->pagerfanta->getMaxPerPage();
    }
}
