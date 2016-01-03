<?php

namespace PalyaSample\Domain\Model\Conference;

use PalyaSample\Component\Model\Entity;

class Conference implements Entity
{
    private $name;
    private $location;
    private $startDate;
    private $endDate;

    /**
     * {@inheritdoc}
     */
    public function isIdentityEqualTo(Entity $entity): bool
    {
        // todo implement
    }
}
