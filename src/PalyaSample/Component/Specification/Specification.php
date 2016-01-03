<?php

namespace PalyaSample\Component\Specification;

interface Specification
{
    /**
     * @param mixed $candidate
     * @return bool
     */
    public function isSatisfiedBy($candidate): bool;
}
