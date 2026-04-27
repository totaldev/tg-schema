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
    public const string TYPE_NAME = 'closeBirthdayUser';

    public function __construct(
        /**
         * Birthdate of the user.
         */
        protected Birthdate $birthdate,
        /**
         * User identifier.
         */
        protected int       $userId,
    ) {}

    public static function fromArray(array $array): CloseBirthdayUser
    {
        return new static(
            birthdate: TdSchemaRegistry::fromArray($array['birthdate']),
            userId   : $array['user_id'],
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

    public function setBirthdate(Birthdate $value): static
    {
        $this->birthdate = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'birthdate' => $this->birthdate->jsonSerialize(),
            'user_id'   => $this->userId,
        ];
    }
}
