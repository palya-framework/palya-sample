<?php

namespace PalyaSample\Component\Model;

interface Entity
{
    /**
     * @param Entity $entity
     * @return bool
     */
    public function isIdentityEqualTo(Entity $entity): bool;
}
