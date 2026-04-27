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
    public const string TYPE_NAME = 'preparedInlineMessage';

    public function __construct(
        /**
         * Types of the chats to which the message can be sent.
         */
        protected TargetChatTypes   $chatTypes,
        /**
         * Unique identifier of the inline query to pass to sendInlineQueryResultMessage.
         */
        protected int               $inlineQueryId,
        /**
         * Resulted inline message of the query.
         */
        protected InlineQueryResult $result,
    ) {}

    public static function fromArray(array $array): PreparedInlineMessage
    {
        return new static(
            chatTypes    : TdSchemaRegistry::fromArray($array['chat_types']),
            inlineQueryId: $array['inline_query_id'],
            result       : TdSchemaRegistry::fromArray($array['result']),
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

    public function setChatTypes(TargetChatTypes $value): static
    {
        $this->chatTypes = $value;

        return $this;
    }

    public function setInlineQueryId(int $value): static
    {
        $this->inlineQueryId = $value;

        return $this;
    }

    public function setResult(InlineQueryResult $value): static
    {
        $this->result = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_types'      => $this->chatTypes->jsonSerialize(),
            'inline_query_id' => $this->inlineQueryId,
            'result'          => $this->result->jsonSerialize(),
        ];
    }
}
