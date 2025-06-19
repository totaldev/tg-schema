<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * Applies if a user enters new credentials on a payment provider website.
 */
class InputCredentialsNew extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsNew';

    public function __construct(
        /**
         * JSON-encoded data with the credential identifier from the payment provider.
         */
        protected string $data,
        /**
         * True, if the credential identifier can be saved on the server side.
         */
        protected bool   $allowSave
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputCredentialsNew
    {
        return new static(
            $array['data'],
            $array['allow_save'],
        );
    }

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'data'       => $this->data,
            'allow_save' => $this->allowSave,
        ];
    }
}
