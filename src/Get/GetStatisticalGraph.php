<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads an asynchronous or a zoomed in statistical graph.
 */
class GetStatisticalGraph extends TdFunction
{
    public const string TYPE_NAME = 'getStatisticalGraph';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * The token for graph loading.
         */
        protected string $token,
        /**
         * X-value for zoomed in graph or 0 otherwise.
         */
        protected int    $x,
    ) {}

    public static function fromArray(array $array): GetStatisticalGraph
    {
        return new static(
            $array['chat_id'],
            $array['token'],
            $array['x'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setToken(string $value): static
    {
        $this->token = $value;

        return $this;
    }

    public function setX(int $value): static
    {
        $this->x = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'token'   => $this->token,
            'x'       => $this->x,
        ];
    }
}
