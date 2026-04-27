<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches a user by their phone number. Returns a 404 error if the user can't be found.
 */
class SearchUserByPhoneNumber extends TdFunction
{
    public const string TYPE_NAME = 'searchUserByPhoneNumber';

    public function __construct(
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool   $onlyLocal,
        /**
         * Phone number to search for.
         */
        protected string $phoneNumber,
    ) {}

    public static function fromArray(array $array): SearchUserByPhoneNumber
    {
        return new static(
            onlyLocal  : $array['only_local'],
            phoneNumber: $array['phone_number'],
        );
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setOnlyLocal(bool $value): static
    {
        $this->onlyLocal = $value;

        return $this;
    }

    public function setPhoneNumber(string $value): static
    {
        $this->phoneNumber = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'only_local'   => $this->onlyLocal,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
