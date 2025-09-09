<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches a user by a token from the user's link.
 */
class SearchUserByToken extends TdFunction
{
    public const TYPE_NAME = 'searchUserByToken';

    public function __construct(
        /**
         * Token to search for.
         */
        protected string $token
    ) {}

    public static function fromArray(array $array): SearchUserByToken
    {
        return new static(
            $array['token'],
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }
}
