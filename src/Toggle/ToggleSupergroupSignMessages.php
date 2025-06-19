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
    public const TYPE_NAME = 'toggleSupergroupSignMessages';

    public function __construct(
        /**
         * Identifier of the channel.
         */
        protected int  $supergroupId,
        /**
         * New value of sign_messages.
         */
        protected bool $signMessages,
        /**
         * New value of show_message_sender.
         */
        protected bool $showMessageSender
    ) {}

    public static function fromArray(array $array): ToggleSupergroupSignMessages
    {
        return new static(
            $array['supergroup_id'],
            $array['sign_messages'],
            $array['show_message_sender'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'supergroup_id'       => $this->supergroupId,
            'sign_messages'       => $this->signMessages,
            'show_message_sender' => $this->showMessageSender,
        ];
    }
}
