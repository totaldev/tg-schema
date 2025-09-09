<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the editable username of a supergroup or channel, requires owner privileges in the supergroup or channel.
 */
class SetSupergroupUsername extends TdFunction
{
    public const TYPE_NAME = 'setSupergroupUsername';

    public function __construct(
        /**
         * Identifier of the supergroup or channel.
         */
        protected int    $supergroupId,
        /**
         * New value of the username. Use an empty string to remove the username. The username can't be completely removed if there is another active or disabled username.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): SetSupergroupUsername
    {
        return new static(
            $array['supergroup_id'],
            $array['username'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'username'      => $this->username,
        ];
    }
}
