<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * Applies if a user enters new credentials using Apple Pay.
 */
class InputCredentialsApplePay extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsApplePay';

    public function __construct(
        /**
         * JSON-encoded data with the credential identifier.
         */
        protected string $data
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputCredentialsApplePay
    {
        return new static(
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }
}
