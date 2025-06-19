<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches a chat with an affiliate program. Returns the chat if found and the program is active.
 */
class SearchChatAffiliateProgram extends TdFunction
{
    public const TYPE_NAME = 'searchChatAffiliateProgram';

    public function __construct(
        /**
         * Username of the chat.
         */
        protected string $username,
        /**
         * The referrer from an internalLinkTypeChatAffiliateProgram link.
         */
        protected string $referrer
    ) {}

    public static function fromArray(array $array): SearchChatAffiliateProgram
    {
        return new static(
            $array['username'],
            $array['referrer'],
        );
    }

    public function getReferrer(): string
    {
        return $this->referrer;
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
            'referrer' => $this->referrer,
        ];
    }
}
