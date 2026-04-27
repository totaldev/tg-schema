<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggest;

use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests a birthdate to another regular user with common messages and allowing non-paid messages.
 */
class SuggestUserBirthdate extends TdFunction
{
    public const string TYPE_NAME = 'suggestUserBirthdate';

    public function __construct(
        /**
         * Birthdate to suggest.
         */
        protected Birthdate $birthdate,
        /**
         * User identifier.
         */
        protected int       $userId,
    ) {}

    public static function fromArray(array $array): SuggestUserBirthdate
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
