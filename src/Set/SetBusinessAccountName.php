<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the first and last name of a business account; for bots only.
 */
class SetBusinessAccountName extends TdFunction
{
    public const string TYPE_NAME = 'setBusinessAccountName';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
        /**
         * The new value of the first name for the business account; 1-64 characters.
         */
        protected string $firstName,
        /**
         * The new value of the optional last name for the business account; 0-64 characters.
         */
        protected string $lastName,
    ) {}

    public static function fromArray(array $array): SetBusinessAccountName
    {
        return new static(
            $array['business_connection_id'],
            $array['first_name'],
            $array['last_name'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'first_name'             => $this->firstName,
            'last_name'              => $this->lastName,
        ];
    }
}
