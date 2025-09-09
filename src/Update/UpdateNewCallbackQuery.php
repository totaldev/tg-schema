<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Callback\CallbackQueryPayload;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming callback query; for bots only.
 */
class UpdateNewCallbackQuery extends Update
{
    public const TYPE_NAME = 'updateNewCallbackQuery';

    public function __construct(
        /**
         * Unique query identifier.
         */
        protected int                  $id,
        /**
         * Identifier of the user who sent the query.
         */
        protected int                  $senderUserId,
        /**
         * Identifier of the chat where the query was sent.
         */
        protected int                  $chatId,
        /**
         * Identifier of the message from which the query originated.
         */
        protected int                  $messageId,
        /**
         * Identifier that uniquely corresponds to the chat to which the message was sent.
         */
        protected int                  $chatInstance,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewCallbackQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['chat_id'],
            $array['message_id'],
            $array['chat_instance'],
            TdSchemaRegistry::fromArray($array['payload']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'sender_user_id' => $this->senderUserId,
            'chat_id'        => $this->chatId,
            'message_id'     => $this->messageId,
            'chat_instance'  => $this->chatInstance,
            'payload'        => $this->payload->typeSerialize(),
        ];
    }
}
