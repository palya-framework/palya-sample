<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\ValueObject;
use PalyaSample\Domain\Model\Scheduling\Talk;

class TalkPermission implements PermissionSpecification
{
    /**
     * @var Talk
     */
    private $talk;

    /**
     * @param Talk $talk
     */
    public function __construct(Talk $talk)
    {
        $this->talk = $talk;
    }

    /**
     * @return Talk
     */
    public function getTalk(): Talk
    {
        return $this->talk;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate): bool
    {
        return $this->isEqualTo($candidate);
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof TalkPermission
            && $object->isEqualTo($object);
    }
}
