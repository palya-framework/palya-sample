<?php

namespace PalyaSample\Component\Model;

interface ValueObject
{
    /**
     * @param ValueObject $object
     * @return bool
     */
    public function isEqualTo(ValueObject $object): bool;
}
