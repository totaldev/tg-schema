<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS link to boost the specified supergroup or channel chat.
 */
class GetChatBoostLink extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostLink';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatBoostLink
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
