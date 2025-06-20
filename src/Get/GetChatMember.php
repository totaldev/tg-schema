<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a single member of a chat.
 */
class GetChatMember extends TdFunction
{
    public const TYPE_NAME = 'getChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Member identifier.
         */
        protected MessageSender $memberId
    ) {}

    public static function fromArray(array $array): GetChatMember
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['member_id']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'member_id' => $this->memberId->typeSerialize(),
        ];
    }
}
