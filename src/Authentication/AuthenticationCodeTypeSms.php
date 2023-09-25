<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code is delivered via an SMS message to the specified phone number; applications may not receive this type of code
 */
class AuthenticationCodeTypeSms extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeSms';

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

    public static function fromArray(array $array): AuthenticationCodeTypeSms
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
