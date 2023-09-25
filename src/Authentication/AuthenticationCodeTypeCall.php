<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code is delivered via a phone call to the specified phone number
 */
class AuthenticationCodeTypeCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeCall';

    /**
     * Length of the code
     *
     * @var int
     */
    protected int $length;

    public function __construct(int $length)
    {
        parent::__construct();

        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeCall
    {
        return new static(
            $array['length'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'length' => $this->length,
        ];
    }
}
