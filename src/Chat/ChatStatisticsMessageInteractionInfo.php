<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains statistics about interactions with a message
 */
class ChatStatisticsMessageInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsMessageInteractionInfo';

    /**
     * Number of times the message was forwarded
     *
     * @var int
     */
    protected int $forwardCount;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Number of times the message was viewed
     *
     * @var int
     */
    protected int $viewCount;

    public function __construct(int $messageId, int $viewCount, int $forwardCount)
    {
        $this->messageId = $messageId;
        $this->viewCount = $viewCount;
        $this->forwardCount = $forwardCount;
    }

    public static function fromArray(array $array): ChatStatisticsMessageInteractionInfo
    {
        return new static(
            $array['message_id'],
            $array['view_count'],
            $array['forward_count'],
        );
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'view_count' => $this->viewCount,
            'forward_count' => $this->forwardCount,
        ];
    }
}
