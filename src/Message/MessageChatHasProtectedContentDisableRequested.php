<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Chat has_protected_content setting was requested to be disabled.
 */
class MessageChatHasProtectedContentDisableRequested extends MessageContent
{
    public const string TYPE_NAME = 'messageChatHasProtectedContentDisableRequested';

    public function __construct(
        /**
         * True, if the request has expired.
         */
        protected bool $isExpired
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatHasProtectedContentDisableRequested
    {
        return new static(
            isExpired: $array['is_expired'],
        );
    }

    public function getIsExpired(): bool
    {
        return $this->isExpired;
    }

    public function setIsExpired(bool $value): static
    {
        $this->isExpired = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_expired' => $this->isExpired,
        ];
    }
}
