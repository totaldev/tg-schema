<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Business\BusinessMessage;
use Totaldev\TgSchema\Callback\CallbackQueryPayload;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming callback query from a business message; for bots only.
 */
class UpdateNewBusinessCallbackQuery extends Update
{
    public const TYPE_NAME = 'updateNewBusinessCallbackQuery';

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
         * Unique identifier of the business connection.
         */
        protected string               $connectionId,
        /**
         * The message from the business account from which the query originated.
         */
        protected BusinessMessage      $message,
        /**
         * An identifier uniquely corresponding to the chat a message was sent to.
         */
        protected int                  $chatInstance,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewBusinessCallbackQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['connection_id'],
            TdSchemaRegistry::fromArray($array['message']),
            $array['chat_instance'],
            TdSchemaRegistry::fromArray($array['payload']),
        );
    }

    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessage(): BusinessMessage
    {
        return $this->message;
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
            'connection_id'  => $this->connectionId,
            'message'        => $this->message->typeSerialize(),
            'chat_instance'  => $this->chatInstance,
            'payload'        => $this->payload->typeSerialize(),
        ];
    }
}
