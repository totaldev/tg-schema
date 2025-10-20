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
    public const TYPE_NAME = 'suggestUserBirthdate';

    public function __construct(
        /**
         * User identifier.
         */
        protected int       $userId,
        /**
         * Birthdate to suggest.
         */
        protected Birthdate $birthdate,
    ) {}

    public static function fromArray(array $array): SuggestUserBirthdate
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
