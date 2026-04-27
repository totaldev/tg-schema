<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Save;

use Totaldev\TgSchema\Input\InputInlineQueryResult;
use Totaldev\TgSchema\Target\TargetChatTypes;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Saves an inline message to be sent by the given user; for bots only.
 */
class SavePreparedInlineMessage extends TdFunction
{
    public const string TYPE_NAME = 'savePreparedInlineMessage';

    public function __construct(
        /**
         * Types of the chats to which the message can be sent.
         */
        protected TargetChatTypes        $chatTypes,
        /**
         * The description of the message.
         */
        protected InputInlineQueryResult $result,
        /**
         * Identifier of the user.
         */
        protected int                    $userId,
    ) {}

    public static function fromArray(array $array): SavePreparedInlineMessage
    {
        return new static(
            chatTypes: TdSchemaRegistry::fromArray($array['chat_types']),
            result   : TdSchemaRegistry::fromArray($array['result']),
            userId   : $array['user_id'],
        );
    }

    public function getChatTypes(): TargetChatTypes
    {
        return $this->chatTypes;
    }

    public function getResult(): InputInlineQueryResult
    {
        return $this->result;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setChatTypes(TargetChatTypes $value): static
    {
        $this->chatTypes = $value;

        return $this;
    }

    public function setResult(InputInlineQueryResult $value): static
    {
        $this->result = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_types' => $this->chatTypes->jsonSerialize(),
            'result'     => $this->result->jsonSerialize(),
            'user_id'    => $this->userId,
        ];
    }
}
