<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Collectible;

/**
 * A phone number.
 */
class CollectibleItemTypePhoneNumber extends CollectibleItemType
{
    public const TYPE_NAME = 'collectibleItemTypePhoneNumber';

    public function __construct(
        /**
         * The phone number.
         */
        protected string $phoneNumber
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CollectibleItemTypePhoneNumber
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
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
