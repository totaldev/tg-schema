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
    public const string TYPE_NAME = 'updateNewBusinessCallbackQuery';

    public function __construct(
        /**
         * An identifier uniquely corresponding to the chat a message was sent to.
         */
        protected int                  $chatInstance,
        /**
         * Unique identifier of the business connection.
         */
        protected string               $connectionId,
        /**
         * Unique query identifier.
         */
        protected int                  $id,
        /**
         * The message from the business account from which the query originated.
         */
        protected BusinessMessage      $message,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
        /**
         * Identifier of the user who sent the query.
         */
        protected int                  $senderUserId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewBusinessCallbackQuery
    {
        return new static(
            chatInstance: $array['chat_instance'],
            connectionId: $array['connection_id'],
            id          : $array['id'],
            message     : TdSchemaRegistry::fromArray($array['message']),
            payload     : TdSchemaRegistry::fromArray($array['payload']),
            senderUserId: $array['sender_user_id'],
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

    public function setChatInstance(int $value): static
    {
        $this->chatInstance = $value;

        return $this;
    }

    public function setConnectionId(string $value): static
    {
        $this->connectionId = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMessage(BusinessMessage $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setPayload(CallbackQueryPayload $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_instance'  => $this->chatInstance,
            'connection_id'  => $this->connectionId,
            'id'             => $this->id,
            'message'        => $this->message->jsonSerialize(),
            'payload'        => $this->payload->jsonSerialize(),
            'sender_user_id' => $this->senderUserId,
        ];
    }
}
