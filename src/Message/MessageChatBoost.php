<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The chat was boosted by the sender of the message.
 */
class MessageChatBoost extends MessageContent
{
    public const TYPE_NAME = 'messageChatBoost';

    public function __construct(
        /**
         * Number of times the chat was boosted.
         */
        protected int $boostCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatBoost
    {
        return new static(
            $array['boost_count'],
        );
    }

    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'boost_count' => $this->boostCount,
        ];
    }
}
