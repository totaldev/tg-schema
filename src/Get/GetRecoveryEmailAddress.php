<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a 2-step verification recovery email address that was previously set up. This method can be used to verify a password provided by the user.
 */
class GetRecoveryEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'getRecoveryEmailAddress';

    public function __construct(
        /**
         * The 2-step verification password for the current user.
         */
        protected string $password
    ) {}

    public static function fromArray(array $array): GetRecoveryEmailAddress
    {
        return new static(
            $array['password'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }
}
