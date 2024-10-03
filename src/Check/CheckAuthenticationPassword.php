<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the 2-step verification password for correctness. Works only when the current authorization state is authorizationStateWaitPassword.
 */
class CheckAuthenticationPassword extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationPassword';

    public function __construct(
        /**
         * The 2-step verification password to check.
         */
        protected string $password
    ) {}

    public static function fromArray(array $array): CheckAuthenticationPassword
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
