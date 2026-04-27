<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages between the specified dates in a chat. Supported only for private chats and basic groups. Messages sent in the last 30 seconds will not
 * be deleted.
 */
class DeleteChatMessagesByDate extends TdFunction
{
    public const string TYPE_NAME = 'deleteChatMessagesByDate';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * The maximum date of the messages to delete.
         */
        protected int  $maxDate,
        /**
         * The minimum date of the messages to delete.
         */
        protected int  $minDate,
        /**
         * Pass true to delete chat messages for all users; private chats only.
         */
        protected bool $revoke,
    ) {}

    public static function fromArray(array $array): DeleteChatMessagesByDate
    {
        return new static(
            chatId : $array['chat_id'],
            maxDate: $array['max_date'],
            minDate: $array['min_date'],
            revoke : $array['revoke'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMaxDate(int $value): static
    {
        $this->maxDate = $value;

        return $this;
    }

    public function setMinDate(int $value): static
    {
        $this->minDate = $value;

        return $this;
    }

    public function setRevoke(bool $value): static
    {
        $this->revoke = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'max_date' => $this->maxDate,
            'min_date' => $this->minDate,
            'revoke'   => $this->revoke,
        ];
    }
}
