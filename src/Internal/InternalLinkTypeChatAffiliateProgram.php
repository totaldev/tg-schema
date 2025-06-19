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
    public const TYPE_NAME = 'internalLinkTypeChatAffiliateProgram';

    public function __construct(
        /**
         * Username to be passed to searchChatAffiliateProgram.
         */
        protected string $username,
        /**
         * Referrer to be passed to searchChatAffiliateProgram.
         */
        protected string $referrer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChatAffiliateProgram
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
