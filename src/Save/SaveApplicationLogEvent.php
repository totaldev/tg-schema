<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Save;

use Totaldev\TgSchema\Json\JsonValue;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Saves application log event on the server. Can be called before authorization.
 */
class SaveApplicationLogEvent extends TdFunction
{
    public const string TYPE_NAME = 'saveApplicationLogEvent';

    public function __construct(
        /**
         * Optional chat identifier, associated with the event.
         */
        protected int       $chatId,
        /**
         * The log event data.
         */
        protected JsonValue $data,
        /**
         * Event type.
         */
        protected string    $type,
    ) {}

    public static function fromArray(array $array): SaveApplicationLogEvent
    {
        return new static(
            chatId: $array['chat_id'],
            data  : TdSchemaRegistry::fromArray($array['data']),
            type  : $array['type'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getData(): JsonValue
    {
        return $this->data;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setData(JsonValue $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setType(string $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'data'    => $this->data->jsonSerialize(),
            'type'    => $this->type,
        ];
    }
}
