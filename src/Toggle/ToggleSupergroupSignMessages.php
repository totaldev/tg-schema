<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether sender signature or link to the account is added to sent messages in a channel; requires can_change_info member right.
 */
class ToggleSupergroupSignMessages extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupSignMessages';

    public function __construct(
        /**
         * New value of show_message_sender.
         */
        protected bool $showMessageSender,
        /**
         * New value of sign_messages.
         */
        protected bool $signMessages,
        /**
         * Identifier of the channel.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupSignMessages
    {
        return new static(
            showMessageSender: $array['show_message_sender'],
            signMessages     : $array['sign_messages'],
            supergroupId     : $array['supergroup_id'],
        );
    }

    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setShowMessageSender(bool $value): static
    {
        $this->showMessageSender = $value;

        return $this;
    }

    public function setSignMessages(bool $value): static
    {
        $this->signMessages = $value;

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
            '@type'               => static::TYPE_NAME,
            'show_message_sender' => $this->showMessageSender,
            'sign_messages'       => $this->signMessages,
            'supergroup_id'       => $this->supergroupId,
        ];
    }
}
