<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches a public chat by its username. Currently, only private chats, supergroups and channels can be public. Returns the chat if found; otherwise, an
 * error is returned.
 */
class SearchPublicChat extends TdFunction
{
    public const TYPE_NAME = 'searchPublicChat';

    public function __construct(
        /**
         * Username to be resolved.
         */
        protected string $username
    ) {}

    public static function fromArray(array $array): SearchPublicChat
    {
        return new static(
            $array['username'],
        );
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'username' => $this->username,
        ];
    }
}
