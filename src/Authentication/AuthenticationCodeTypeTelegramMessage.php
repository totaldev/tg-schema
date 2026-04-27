<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * A digit-only authentication code is delivered via a private Telegram message, which can be viewed from another active session.
 */
class AuthenticationCodeTypeTelegramMessage extends AuthenticationCodeType
{
    public const string TYPE_NAME = 'authenticationCodeTypeTelegramMessage';

    public function __construct(
        /**
         * Length of the code.
         */
        protected int $length
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeTelegramMessage
    {
        return new static(
            length: $array['length'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
        ];
    }
}
