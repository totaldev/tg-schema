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
    public const TYPE_NAME = 'savePreparedInlineMessage';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int                    $userId,
        /**
         * The description of the message.
         */
        protected InputInlineQueryResult $result,
        /**
         * Types of the chats to which the message can be sent.
         */
        protected TargetChatTypes        $chatTypes
    ) {}

    public static function fromArray(array $array): SavePreparedInlineMessage
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['result']),
            TdSchemaRegistry::fromArray($array['chat_types']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'result'     => $this->result->typeSerialize(),
            'chat_types' => $this->chatTypes->typeSerialize(),
        ];
    }
}
