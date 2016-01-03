<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\ValueObject;

class AllAccessPermission implements PermissionSpecification
{
    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof AllAccessPermission;
    }
}
