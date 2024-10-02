<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\User;

/**
 * Some data of a user has changed. This update is guaranteed to come before the user identifier is returned to the application.
 */
class UpdateUser extends Update
{
    public const TYPE_NAME = 'updateUser';

    public function __construct(
        /**
         * New data about the user.
         */
        protected User $user
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUser
    {
        return new static(
            TdSchemaRegistry::fromArray($array['user']),
        );
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user'  => $this->user->typeSerialize(),
        ];
    }
}
