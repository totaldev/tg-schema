<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The sign_messages setting of a channel was toggled.
 */
class ChatEventSignMessagesToggled extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventSignMessagesToggled';

    public function __construct(
        /**
         * New value of sign_messages.
         */
        protected bool $signMessages
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventSignMessagesToggled
    {
        return new static(
            $array['sign_messages'],
        );
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function setSignMessages(bool $value): static
    {
        $this->signMessages = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'sign_messages' => $this->signMessages,
        ];
    }
}
