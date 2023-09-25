<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Order;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Order information
 */
class OrderInfo extends TdObject
{
    public const TYPE_NAME = 'orderInfo';

    /**
     * Email address of the user
     *
     * @var string
     */
    protected string $emailAddress;

    /**
     * Name of the user
     *
     * @var string
     */
    protected string $name;

    /**
     * Phone number of the user
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * Shipping address for this order; may be null
     *
     * @var Address|null
     */
    protected ?Address $shippingAddress;

    public function __construct(string $name, string $phoneNumber, string $emailAddress, ?Address $shippingAddress)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;
        $this->shippingAddress = $shippingAddress;
    }

    public static function fromArray(array $array): OrderInfo
    {
        return new static(
            $array['name'],
            $array['phone_number'],
            $array['email_address'],
            (isset($array['shipping_address']) ? TdSchemaRegistry::fromArray($array['shipping_address']) : null),
        );
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getShippingAddress(): ?Address
    {
        return $this->shippingAddress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'phone_number' => $this->phoneNumber,
            'email_address' => $this->emailAddress,
            'shipping_address' => (isset($this->shippingAddress) ? $this->shippingAddress : null),
        ];
    }
}
