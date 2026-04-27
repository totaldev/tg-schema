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
    public const string TYPE_NAME = 'passportElementError';

    public function __construct(
        /**
         * Error message.
         */
        protected string                     $message,
        /**
         * Error source.
         */
        protected PassportElementErrorSource $source,
        /**
         * Type of the Telegram Passport element which has the error.
         */
        protected PassportElementType        $type,
    ) {}

    public static function fromArray(array $array): PassportElementError
    {
        return new static(
            message: $array['message'],
            source : TdSchemaRegistry::fromArray($array['source']),
            type   : TdSchemaRegistry::fromArray($array['type']),
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

    public function setMessage(string $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setSource(PassportElementErrorSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function setType(PassportElementType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message,
            'source'  => $this->source->jsonSerialize(),
            'type'    => $this->type->jsonSerialize(),
        ];
    }
}
