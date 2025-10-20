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
    public const TYPE_NAME = 'authenticationCodeInfo';

    public function __construct(
        /**
         * A phone number that is being authenticated.
         */
        protected string                  $phoneNumber,
        /**
         * The way the code was sent to the user.
         */
        protected AuthenticationCodeType  $type,
        /**
         * The way the next code will be sent to the user; may be null.
         */
        protected ?AuthenticationCodeType $nextType,
        /**
         * Timeout before the code can be re-sent, in seconds.
         */
        protected int                     $timeout,
    ) {}

    public static function fromArray(array $array): AuthenticationCodeInfo
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['type']),
            isset($array['next_type']) ? TdSchemaRegistry::fromArray($array['next_type']) : null,
            $array['timeout'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'type'         => $this->type->typeSerialize(),
            'next_type'    => $this->nextType ?? null,
            'timeout'      => $this->timeout,
        ];
    }
}
