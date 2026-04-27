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
    public const string TYPE_NAME = 'searchChatAffiliateProgram';

    public function __construct(
        /**
         * The referrer from an internalLinkTypeChatAffiliateProgram link.
         */
        protected string $referrer,
        /**
         * Username of the chat.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): SearchChatAffiliateProgram
    {
        return new static(
            referrer: $array['referrer'],
            username: $array['username'],
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

    public function setReferrer(string $value): static
    {
        $this->referrer = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'referrer' => $this->referrer,
            'username' => $this->username,
        ];
    }
}
