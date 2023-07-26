<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Contains information about interactions with a message
 */
class MessageInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'messageInteractionInfo';

    /**
     * Number of times the message was viewed
     *
     * @var int
     */
    protected int $viewCount;

    /**
     * Number of times the message was forwarded
     *
     * @var int
     */
    protected int $forwardCount;

    /**
     * Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself
     *
     * @var MessageReplyInfo|null
     */
    protected ?MessageReplyInfo $replyInfo;

    /**
     * The list of reactions added to the message
     *
     * @var MessageReaction[]
     */
    protected array $reactions;

    public function __construct(int $viewCount, int $forwardCount, ?MessageReplyInfo $replyInfo, array $reactions)
    {
        $this->viewCount = $viewCount;
        $this->forwardCount = $forwardCount;
        $this->replyInfo = $replyInfo;
        $this->reactions = $reactions;
    }

    public static function fromArray(array $array): MessageInteractionInfo
    {
        return new static(
            $array['view_count'],
            $array['forward_count'],
            (isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'view_count' => $this->viewCount,
            'forward_count' => $this->forwardCount,
            'reply_info' => (isset($this->replyInfo) ? $this->replyInfo : null),
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
        ];
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getReplyInfo(): ?MessageReplyInfo
    {
        return $this->replyInfo;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }
}
