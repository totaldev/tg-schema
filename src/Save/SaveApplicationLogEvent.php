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
    public const TYPE_NAME = 'saveApplicationLogEvent';

    public function __construct(
        /**
         * Event type.
         */
        protected string    $type,
        /**
         * Optional chat identifier, associated with the event.
         */
        protected int       $chatId,
        /**
         * The log event data.
         */
        protected JsonValue $data,
    ) {}

    public static function fromArray(array $array): SaveApplicationLogEvent
    {
        return new static(
            $array['type'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['data']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'type'    => $this->type,
            'chat_id' => $this->chatId,
            'data'    => $this->data->typeSerialize(),
        ];
    }
}
