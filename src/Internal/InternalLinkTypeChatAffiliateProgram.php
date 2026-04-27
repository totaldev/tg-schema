<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is an affiliate program link. Call searchChatAffiliateProgram with the given username and referrer to process the link.
 */
class InternalLinkTypeChatAffiliateProgram extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeChatAffiliateProgram';

    public function __construct(
        /**
         * Referrer to be passed to searchChatAffiliateProgram.
         */
        protected string $referrer,
        /**
         * Username to be passed to searchChatAffiliateProgram.
         */
        protected string $username,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChatAffiliateProgram
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
