<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Passport\PassportElementType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns one of the available Telegram Passport elements.
 */
class GetPassportElement extends TdFunction
{
    public const string TYPE_NAME = 'getPassportElement';

    public function __construct(
        /**
         * The 2-step verification password of the current user.
         */
        protected string              $password,
        /**
         * Telegram Passport element type.
         */
        protected PassportElementType $type,
    ) {}

    public static function fromArray(array $array): GetPassportElement
    {
        return new static(
            password: $array['password'],
            type    : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

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
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
            'type'     => $this->type->jsonSerialize(),
        ];
    }
}
