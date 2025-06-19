<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the first and last name of the current user.
 */
class SetName extends TdFunction
{
    public const TYPE_NAME = 'setName';

    public function __construct(
        /**
         * The new value of the first name for the current user; 1-64 characters.
         */
        protected string $firstName,
        /**
         * The new value of the optional last name for the current user; 0-64 characters.
         */
        protected string $lastName
    ) {}

    public static function fromArray(array $array): SetName
    {
        return new static(
            $array['first_name'],
            $array['last_name'],
        );
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
        ];
    }
}
