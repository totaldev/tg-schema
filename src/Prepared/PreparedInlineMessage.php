<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Prepared;

use Totaldev\TgSchema\Inline\InlineQueryResult;
use Totaldev\TgSchema\Target\TargetChatTypes;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a ready to send inline message. Use sendInlineQueryResultMessage to send the message.
 */
class PreparedInlineMessage extends TdObject
{
    public const TYPE_NAME = 'preparedInlineMessage';

    public function __construct(
        /**
         * Unique identifier of the inline query to pass to sendInlineQueryResultMessage.
         */
        protected int               $inlineQueryId,
        /**
         * Resulted inline message of the query.
         */
        protected InlineQueryResult $result,
        /**
         * Types of the chats to which the message can be sent.
         */
        protected TargetChatTypes   $chatTypes
    ) {}

    public static function fromArray(array $array): PreparedInlineMessage
    {
        return new static(
            $array['inline_query_id'],
            TdSchemaRegistry::fromArray($array['result']),
            TdSchemaRegistry::fromArray($array['chat_types']),
        );
    }

    public function getChatTypes(): TargetChatTypes
    {
        return $this->chatTypes;
    }

    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    public function getResult(): InlineQueryResult
    {
        return $this->result;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'inline_query_id' => $this->inlineQueryId,
            'result'          => $this->result->typeSerialize(),
            'chat_types'      => $this->chatTypes->typeSerialize(),
        ];
    }
}
