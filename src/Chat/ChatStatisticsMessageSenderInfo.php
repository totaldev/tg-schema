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
    public const TYPE_NAME = 'chatStatisticsMessageSenderInfo';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId,
        /**
         * Number of sent messages.
         */
        protected int $sentMessageCount,
        /**
         * Average number of characters in sent messages; 0 if unknown.
         */
        protected int $averageCharacterCount
    ) {}

    public static function fromArray(array $array): ChatStatisticsMessageSenderInfo
    {
        return new static(
            $array['user_id'],
            $array['sent_message_count'],
            $array['average_character_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'user_id'                 => $this->userId,
            'sent_message_count'      => $this->sentMessageCount,
            'average_character_count' => $this->averageCharacterCount,
        ];
    }
}
