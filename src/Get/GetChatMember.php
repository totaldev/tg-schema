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
    public const string TYPE_NAME = 'getChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Member identifier.
         */
        protected MessageSender $memberId,
    ) {}

    public static function fromArray(array $array): GetChatMember
    {
        return new static(
            chatId  : $array['chat_id'],
            memberId: TdSchemaRegistry::fromArray($array['member_id']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMemberId(MessageSender $value): static
    {
        $this->memberId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'member_id' => $this->memberId->jsonSerialize(),
        ];
    }
}
