<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatNearby;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of users nearby has changed. The update is guaranteed to be sent only 60 seconds after a successful searchChatsNearby request.
 */
class UpdateUsersNearby extends Update
{
    public const TYPE_NAME = 'updateUsersNearby';

    public function __construct(
        /**
         * The new list of users nearby.
         *
         * @var ChatNearby[]
         */
        protected array $usersNearby
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUsersNearby
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['users_nearby']),
        );
    }

    public function getUsersNearby(): array
    {
        return $this->usersNearby;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->usersNearby),
        ];
    }
}
