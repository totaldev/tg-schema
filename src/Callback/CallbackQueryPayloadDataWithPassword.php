<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

/**
 * The payload for a callback button requiring password.
 */
class CallbackQueryPayloadDataWithPassword extends CallbackQueryPayload
{
    public const string TYPE_NAME = 'callbackQueryPayloadDataWithPassword';

    public function __construct(
        /**
         * The 2-step verification password for the current user.
         */
        protected string $password,
        /**
         * Data that was attached to the callback button.
         */
        protected string $data,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallbackQueryPayloadDataWithPassword
    {
        return new static(
            $array['password'],
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
            'data'     => $this->data,
        ];
    }
}
