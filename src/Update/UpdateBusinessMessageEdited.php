<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Business\BusinessMessage;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message in a business account was edited; for bots only.
 */
class UpdateBusinessMessageEdited extends Update
{
    public const string TYPE_NAME = 'updateBusinessMessageEdited';

    public function __construct(
        /**
         * Unique identifier of the business connection.
         */
        protected string          $connectionId,
        /**
         * The edited message.
         */
        protected BusinessMessage $message,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateBusinessMessageEdited
    {
        return new static(
            connectionId: $array['connection_id'],
            message     : TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function getMessage(): BusinessMessage
    {
        return $this->message;
    }

    public function setConnectionId(string $value): static
    {
        $this->connectionId = $value;

        return $this;
    }

    public function setMessage(BusinessMessage $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'connection_id' => $this->connectionId,
            'message'       => $this->message->jsonSerialize(),
        ];
    }
}
