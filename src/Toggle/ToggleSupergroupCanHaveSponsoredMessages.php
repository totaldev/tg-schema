<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether sponsored messages are shown in the channel chat; requires owner privileges in the channel. The chat must have at least
 * chatBoostFeatures.min_sponsored_message_disable_boost_level boost level to disable sponsored messages.
 */
class ToggleSupergroupCanHaveSponsoredMessages extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupCanHaveSponsoredMessages';

    public function __construct(
        /**
         * The identifier of the channel.
         */
        protected int  $supergroupId,
        /**
         * The new value of can_have_sponsored_messages.
         */
        protected bool $canHaveSponsoredMessages
    ) {}

    public static function fromArray(array $array): ToggleSupergroupCanHaveSponsoredMessages
    {
        return new static(
            $array['supergroup_id'],
            $array['can_have_sponsored_messages'],
        );
    }

    public function getCanHaveSponsoredMessages(): bool
    {
        return $this->canHaveSponsoredMessages;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'supergroup_id'               => $this->supergroupId,
            'can_have_sponsored_messages' => $this->canHaveSponsoredMessages,
        ];
    }
}
