<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches a user by a token from the user's link
 */
class SearchUserByToken extends TdFunction
{
    public const TYPE_NAME = 'searchUserByToken';

    /**
     * Token to search for
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public static function fromArray(array $array): SearchUserByToken
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
