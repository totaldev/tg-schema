<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the authentication code that was sent.
 */
class AuthenticationCodeInfo extends TdObject
{
    public const string TYPE_NAME = 'authenticationCodeInfo';

    public function __construct(
        /**
         * The way the next code will be sent to the user; may be null.
         */
        protected ?AuthenticationCodeType $nextType,
        /**
         * A phone number that is being authenticated.
         */
        protected string                  $phoneNumber,
        /**
         * Timeout before the code can be re-sent, in seconds.
         */
        protected int                     $timeout,
        /**
         * The way the code was sent to the user.
         */
        protected AuthenticationCodeType  $type,
    ) {}

    public static function fromArray(array $array): AuthenticationCodeInfo
    {
        return new static(
            nextType   : (isset($array['next_type']) ? TdSchemaRegistry::fromArray($array['next_type']) : null),
            phoneNumber: $array['phone_number'],
            timeout    : $array['timeout'],
            type       : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getNextType(): ?AuthenticationCodeType
    {
        return $this->nextType;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function getType(): AuthenticationCodeType
    {
        return $this->type;
    }

    public function setNextType(?AuthenticationCodeType $value): static
    {
        $this->nextType = $value;

        return $this;
    }

    public function setPhoneNumber(string $value): static
    {
        $this->phoneNumber = $value;

        return $this;
    }

    public function setTimeout(int $value): static
    {
        $this->timeout = $value;

        return $this;
    }

    public function setType(AuthenticationCodeType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'next_type'    => (null !== $this->nextType ? $this->nextType->jsonSerialize() : null),
            'phone_number' => $this->phoneNumber,
            'timeout'      => $this->timeout,
            'type'         => $this->type->jsonSerialize(),
        ];
    }
}
