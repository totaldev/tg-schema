<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a URL for Toncoin withdrawal from the current user's account. The user must have at least 10 toncoins to withdraw and can withdraw up to 100000
 * Toncoins in one transaction.
 */
class GetTonWithdrawalUrl extends TdFunction
{
    public const string TYPE_NAME = 'getTonWithdrawalUrl';

    public function __construct(
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password
    ) {}

    public static function fromArray(array $array): GetTonWithdrawalUrl
    {
        return new static(
            password: $array['password'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }
}
