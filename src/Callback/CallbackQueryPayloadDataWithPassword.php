<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The payload for a callback button requiring password
 */
class CallbackQueryPayloadDataWithPassword extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadDataWithPassword';

    /**
     * Data that was attached to the callback button
     *
     * @var string
     */
    protected string $data;

    /**
     * The 2-step verification password for the current user
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $password, string $data)
    {
        parent::__construct();

        $this->password = $password;
        $this->data = $data;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
            'data' => $this->data,
        ];
    }
}
