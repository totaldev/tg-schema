<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Chat has_protected_content setting was changed or request to change it was rejected.
 */
class MessageChatHasProtectedContentToggled extends MessageContent
{
    public const string TYPE_NAME = 'messageChatHasProtectedContentToggled';

    public function __construct(
        /**
         * New value of the setting.
         */
        protected bool $newHasProtectedContent,
        /**
         * Previous value of the setting.
         */
        protected bool $oldHasProtectedContent,
        /**
         * Identifier of the message with the request to change the setting; can be an identifier of a deleted message or 0.
         */
        protected int  $requestMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatHasProtectedContentToggled
    {
        return new static(
            newHasProtectedContent: $array['new_has_protected_content'],
            oldHasProtectedContent: $array['old_has_protected_content'],
            requestMessageId      : $array['request_message_id'],
        );
    }

    public function getNewHasProtectedContent(): bool
    {
        return $this->newHasProtectedContent;
    }

    public function getOldHasProtectedContent(): bool
    {
        return $this->oldHasProtectedContent;
    }

    public function getRequestMessageId(): int
    {
        return $this->requestMessageId;
    }

    public function setNewHasProtectedContent(bool $value): static
    {
        $this->newHasProtectedContent = $value;

        return $this;
    }

    public function setOldHasProtectedContent(bool $value): static
    {
        $this->oldHasProtectedContent = $value;

        return $this;
    }

    public function setRequestMessageId(int $value): static
    {
        $this->requestMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'new_has_protected_content' => $this->newHasProtectedContent,
            'old_has_protected_content' => $this->oldHasProtectedContent,
            'request_message_id'        => $this->requestMessageId,
        ];
    }
}
