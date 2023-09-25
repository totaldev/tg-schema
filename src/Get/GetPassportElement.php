<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Passport\PassportElementType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns one of the available Telegram Passport elements
 */
class GetPassportElement extends TdFunction
{
    public const TYPE_NAME = 'getPassportElement';

    /**
     * The 2-step verification password of the current user
     *
     * @var string
     */
    protected string $password;

    /**
     * Telegram Passport element type
     *
     * @var PassportElementType
     */
    protected PassportElementType $type;

    public function __construct(PassportElementType $type, string $password)
    {
        $this->type = $type;
        $this->password = $password;
    }

    public static function fromArray(array $array): GetPassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['password'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'password' => $this->password,
        ];
    }
}
