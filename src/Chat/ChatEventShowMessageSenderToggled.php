<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The show_message_sender setting of a channel was toggled.
 */
class ChatEventShowMessageSenderToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventShowMessageSenderToggled';

    public function __construct(
        /**
         * New value of show_message_sender.
         */
        protected bool $showMessageSender
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventShowMessageSenderToggled
    {
        return new static(
            $array['show_message_sender'],
        );
    }

    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'show_message_sender' => $this->showMessageSender,
        ];
    }
}
