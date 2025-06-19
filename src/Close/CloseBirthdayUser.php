<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a user that had or will have a birthday soon.
 */
class CloseBirthdayUser extends TdObject
{
    public const TYPE_NAME = 'closeBirthdayUser';

    public function __construct(
        /**
         * User identifier.
         */
        protected int       $userId,
        /**
         * Birthdate of the user.
         */
        protected Birthdate $birthdate
    ) {}

    public static function fromArray(array $array): CloseBirthdayUser
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['birthdate']),
        );
    }

    public function getBirthdate(): Birthdate
    {
        return $this->birthdate;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            'birthdate' => $this->birthdate->typeSerialize(),
        ];
    }
}
