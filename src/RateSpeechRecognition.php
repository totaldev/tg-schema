<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Rates recognized speech in a video note or a voice note message
 */
class RateSpeechRecognition extends TdFunction
{
    public const TYPE_NAME = 'rateSpeechRecognition';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Pass true if the speech recognition is good
     *
     * @var bool
     */
    protected bool $isGood;

    public function __construct(int $chatId, int $messageId, bool $isGood)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->isGood = $isGood;
    }

    public static function fromArray(array $array): RateSpeechRecognition
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_good'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'is_good' => $this->isGood,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getIsGood(): bool
    {
        return $this->isGood;
    }
}
