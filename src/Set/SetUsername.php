<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the editable username of the current user.
 */
class SetUsername extends TdFunction
{
    public const TYPE_NAME = 'setUsername';

    public function __construct(
        /**
         * The new value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username.
         */
        protected string $username
    ) {}

    public static function fromArray(array $array): SetUsername
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
