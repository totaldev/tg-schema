<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a new temporary password for processing payments.
 */
class CreateTemporaryPassword extends TdFunction
{
    public const TYPE_NAME = 'createTemporaryPassword';

    public function __construct(
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password,
        /**
         * Time during which the temporary password will be valid, in seconds; must be between 60 and 86400.
         */
        protected int    $validFor,
    ) {}

    public static function fromArray(array $array): CreateTemporaryPassword
    {
        return new static(
            $array['password'],
            $array['valid_for'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getValidFor(): int
    {
        return $this->validFor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'password'  => $this->password,
            'valid_for' => $this->validFor,
        ];
    }
}
