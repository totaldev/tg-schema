<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Disable;

use Totaldev\TgSchema\TdFunction;

/**
 * Disables all active non-editable usernames of a supergroup or channel, requires owner privileges in the supergroup or channel.
 */
class DisableAllSupergroupUsernames extends TdFunction
{
    public const TYPE_NAME = 'disableAllSupergroupUsernames';

    public function __construct(
        /**
         * Identifier of the supergroup or channel.
         */
        protected int $supergroupId
    ) {}

    public static function fromArray(array $array): DisableAllSupergroupUsernames
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
