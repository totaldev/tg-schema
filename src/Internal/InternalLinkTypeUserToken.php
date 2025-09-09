<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a user by a temporary token. Call searchUserByToken with the given token to process the link. If the user is found, then call
 * createPrivateChat and open the chat.
 */
class InternalLinkTypeUserToken extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUserToken';

    public function __construct(
        /**
         * The token.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeUserToken
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
