<?php

namespace PalyaSample\Domain\Model\Location;

use PalyaSample\Component\Model\Entity;

class Country implements Entity
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @param $code
     * @param $name
     */
    public function __construct(string $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function isIdentityEqualTo(Entity $entity): bool
    {
        return $entity instanceof Country
            && $entity->getCode() === $this->code;
    }
}
