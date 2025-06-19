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
    public const TYPE_NAME = 'searchUserByPhoneNumber';

    public function __construct(
        /**
         * Phone number to search for.
         */
        protected string $phoneNumber,
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool   $onlyLocal
    ) {}

    public static function fromArray(array $array): SearchUserByPhoneNumber
    {
        return new static(
            $array['phone_number'],
            $array['only_local'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'only_local'   => $this->onlyLocal,
        ];
    }
}
