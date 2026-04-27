<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains statistics about messages sent by a user.
 */
class ChatStatisticsMessageSenderInfo extends TdObject
{
    public const string TYPE_NAME = 'chatStatisticsMessageSenderInfo';

    public function __construct(
        /**
         * Average number of characters in sent messages; 0 if unknown.
         */
        protected int $averageCharacterCount,
        /**
         * Number of sent messages.
         */
        protected int $sentMessageCount,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): ChatStatisticsMessageSenderInfo
    {
        return new static(
            averageCharacterCount: $array['average_character_count'],
            sentMessageCount     : $array['sent_message_count'],
            userId               : $array['user_id'],
        );
    }

    public function getAverageCharacterCount(): int
    {
        return $this->averageCharacterCount;
    }

    public function getSentMessageCount(): int
    {
        return $this->sentMessageCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setAverageCharacterCount(int $value): static
    {
        $this->averageCharacterCount = $value;

        return $this;
    }

    public function setSentMessageCount(int $value): static
    {
        $this->sentMessageCount = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'average_character_count' => $this->averageCharacterCount,
            'sent_message_count'      => $this->sentMessageCount,
            'user_id'                 => $this->userId,
        ];
    }
}
