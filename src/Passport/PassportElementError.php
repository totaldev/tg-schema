<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the description of an error in a Telegram Passport element.
 */
class PassportElementError extends TdObject
{
    public const TYPE_NAME = 'passportElementError';

    public function __construct(
        /**
         * Type of the Telegram Passport element which has the error.
         */
        protected PassportElementType        $type,
        /**
         * Error message.
         */
        protected string                     $message,
        /**
         * Error source.
         */
        protected PassportElementErrorSource $source
    ) {}

    public static function fromArray(array $array): PassportElementError
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['message'],
            TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSource(): PassportElementErrorSource
    {
        return $this->source;
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'type'    => $this->type->typeSerialize(),
            'message' => $this->message,
            'source'  => $this->source->typeSerialize(),
        ];
    }
}
