<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches a user by their phone number. Returns a 404 error if the user can't be found
 */
class SearchUserByPhoneNumber extends TdFunction
{
    public const TYPE_NAME = 'searchUserByPhoneNumber';

    /**
     * Phone number to search for
     *
     * @var string
     */
    protected string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): SearchUserByPhoneNumber
    {
        return new static(
            $array['phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
