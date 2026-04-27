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
    public const string TYPE_NAME = 'toggleSupergroupCanHaveSponsoredMessages';

    public function __construct(
        /**
         * The new value of can_have_sponsored_messages.
         */
        protected bool $canHaveSponsoredMessages,
        /**
         * The identifier of the channel.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupCanHaveSponsoredMessages
    {
        return new static(
            canHaveSponsoredMessages: $array['can_have_sponsored_messages'],
            supergroupId            : $array['supergroup_id'],
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

    public function setCanHaveSponsoredMessages(bool $value): static
    {
        $this->canHaveSponsoredMessages = $value;

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
            '@type'                       => static::TYPE_NAME,
            'can_have_sponsored_messages' => $this->canHaveSponsoredMessages,
            'supergroup_id'               => $this->supergroupId,
        ];
    }
}
