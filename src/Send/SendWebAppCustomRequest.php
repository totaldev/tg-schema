<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a custom request from a Web App
 */
class SendWebAppCustomRequest extends TdFunction
{
    public const TYPE_NAME = 'sendWebAppCustomRequest';

    /**
     * Identifier of the bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * The method name
     *
     * @var string
     */
    protected string $method;

    /**
     * JSON-serialized method parameters
     *
     * @var string
     */
    protected string $parameters;

    public function __construct(int $botUserId, string $method, string $parameters)
    {
        $this->botUserId = $botUserId;
        $this->method = $method;
        $this->parameters = $parameters;
    }

    public static function fromArray(array $array): SendWebAppCustomRequest
    {
        return new static(
            $array['bot_user_id'],
            $array['method'],
            $array['parameters'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'method' => $this->method,
            'parameters' => $this->parameters,
        ];
    }
}
