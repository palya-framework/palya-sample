<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\Entity;
use PalyaSample\Domain\Model\Order\Allocation;

class Registration implements Entity
{
    /**
     * @var Attendee
     */
    private $attendee;

    /**
     * @var PermissionSpecification
     */
    private $permissionSpecification;

    /**
     * @param Attendee $attendee
     * @param PermissionSpecification $permissionSpecification
     */
    public function __construct(Attendee $attendee, PermissionSpecification $permissionSpecification)
    {
        $this->attendee = $attendee;
        $this->permissionSpecification = $permissionSpecification;
    }

    /**
     * @param Invitation $invitation
     * @return Registration
     */
    public static function createFromInvitation(Invitation $invitation): Registration
    {
        return new self($invitation->getAttendee(), new AllAccessPermission());
    }

    /**
     * @param Allocation $allocation
     * @return Registration
     */
    public static function createFromAllocation(Allocation $allocation): Registration
    {
        // todo implement
    }

    /**
     * @return Attendee
     */
    public function getAttendee()
    {
        return $this->attendee;
    }

    /**
     * @return PermissionSpecification
     */
    public function getPermissionSpecification()
    {
        return $this->permissionSpecification;
    }

    /**
     * {@inheritdoc}
     */
    public function isIdentityEqualTo(Entity $entity): bool
    {
        // todo implement
        // todo implement identity
    }
}
