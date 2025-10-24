<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether all users directly joining the supergroup need to be approved by supergroup administrators; requires can_restrict_members administrator
 * right.
 */
class ToggleSupergroupJoinByRequest extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupJoinByRequest';

    public function __construct(
        /**
         * Identifier of the supergroup that isn't a broadcast group and isn't a channel direct message group.
         */
        protected int  $supergroupId,
        /**
         * New value of join_by_request.
         */
        protected bool $joinByRequest,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupJoinByRequest
    {
        return new static(
            $array['supergroup_id'],
            $array['join_by_request'],
        );
    }

    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setJoinByRequest(bool $value): static
    {
        $this->joinByRequest = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'supergroup_id'   => $this->supergroupId,
            'join_by_request' => $this->joinByRequest,
        ];
    }
}
