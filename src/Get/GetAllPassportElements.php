<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all available Telegram Passport elements.
 */
class GetAllPassportElements extends TdFunction
{
    public const TYPE_NAME = 'getAllPassportElements';

    public function __construct(
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password
    ) {}

    public static function fromArray(array $array): GetAllPassportElements
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
