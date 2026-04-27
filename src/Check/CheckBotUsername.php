<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a username can be set for a new bot. Use checkChatUsername to check username for other chat types.
 */
class CheckBotUsername extends TdFunction
{
    public const string TYPE_NAME = 'checkBotUsername';

    public function __construct(
        /**
         * Username to be checked.
         */
        protected string $username
    ) {}

    public static function fromArray(array $array): CheckBotUsername
    {
        return new static(
            username: $array['username'],
        );
    }

    public function getUsername(): string
    {
        return $this->username;
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
            'username' => $this->username,
        ];
    }
}
