<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the authentication token of a bot; to log in as a bot. Works only when the current authorization state is authorizationStateWaitPhoneNumber. Can be
 * used instead of setAuthenticationPhoneNumber and checkAuthenticationCode to log in.
 */
class CheckAuthenticationBotToken extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationBotToken';

    public function __construct(
        /**
         * The bot token.
         */
        protected string $token
    ) {}

    public static function fromArray(array $array): CheckAuthenticationBotToken
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
