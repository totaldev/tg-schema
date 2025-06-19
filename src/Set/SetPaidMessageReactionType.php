<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Paid\PaidReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes type of paid message reaction of the current user on a message. The message must have paid reaction added by the current user.
 */
class SetPaidMessageReactionType extends TdFunction
{
    public const TYPE_NAME = 'setPaidMessageReactionType';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int              $chatId,
        /**
         * Identifier of the message.
         */
        protected int              $messageId,
        /**
         * New type of the paid reaction.
         */
        protected PaidReactionType $type
    ) {}

    public static function fromArray(array $array): SetPaidMessageReactionType
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function getType(): PaidReactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'type'       => $this->type->typeSerialize(),
        ];
    }
}
