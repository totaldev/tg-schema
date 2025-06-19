<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the editable username of a business account; for bots only.
 */
class SetBusinessAccountUsername extends TdFunction
{
    public const TYPE_NAME = 'setBusinessAccountUsername';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
        /**
         * The new value of the username.
         */
        protected string $username
    ) {}

    public static function fromArray(array $array): SetBusinessAccountUsername
    {
        return new static(
            $array['business_connection_id'],
            $array['username'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'username'               => $this->username,
        ];
    }
}
