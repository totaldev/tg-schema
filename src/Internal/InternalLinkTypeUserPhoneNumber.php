<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a user by its phone number. Call searchUserByPhoneNumber with the given phone number to process the link
 */
class InternalLinkTypeUserPhoneNumber extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUserPhoneNumber';

    /**
     * Phone number of the user
     *
     * @var string
     */
    protected string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        parent::__construct();

        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): InternalLinkTypeUserPhoneNumber
    {
        return new static(
            $array['phone_number'],
        );
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
