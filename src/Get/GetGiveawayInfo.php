<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a giveaway.
 */
class GetGiveawayInfo extends TdFunction
{
    public const TYPE_NAME = 'getGiveawayInfo';

    public function __construct(
        /**
         * Identifier of the channel chat which started the giveaway.
         */
        protected int $chatId,
        /**
         * Identifier of the giveaway or a giveaway winners message in the chat.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): GetGiveawayInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
