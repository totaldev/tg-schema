<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Toggles whether all users directly joining the supergroup need to be approved by supergroup administrators; requires can_restrict_members administrator right
 */
class ToggleSupergroupJoinByRequest extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupJoinByRequest';

    /**
     * Identifier of the channel
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * New value of join_by_request
     *
     * @var bool
     */
    protected bool $joinByRequest;

    public function __construct(int $supergroupId, bool $joinByRequest)
    {
        $this->supergroupId = $supergroupId;
        $this->joinByRequest = $joinByRequest;
    }

    public static function fromArray(array $array): ToggleSupergroupJoinByRequest
    {
        return new static(
            $array['supergroup_id'],
            $array['join_by_request'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'join_by_request' => $this->joinByRequest,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }
}
