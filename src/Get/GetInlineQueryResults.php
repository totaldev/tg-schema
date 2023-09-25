<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends an inline query to a bot and returns its results. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires
 */
class GetInlineQueryResults extends TdFunction
{
    public const TYPE_NAME = 'getInlineQueryResults';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Identifier of the chat where the query was sent
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Offset of the first entry to return; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * Text of the query
     *
     * @var string
     */
    protected string $query;

    /**
     * Location of the user; pass null if unknown or the bot doesn't need user's location
     *
     * @var Location
     */
    protected Location $userLocation;

    public function __construct(int $botUserId, int $chatId, Location $userLocation, string $query, string $offset)
    {
        $this->botUserId = $botUserId;
        $this->chatId = $chatId;
        $this->userLocation = $userLocation;
        $this->query = $query;
        $this->offset = $offset;
    }

    public static function fromArray(array $array): GetInlineQueryResults
    {
        return new static(
            $array['bot_user_id'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['user_location']),
            $array['query'],
            $array['offset'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getUserLocation(): Location
    {
        return $this->userLocation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'chat_id' => $this->chatId,
            'user_location' => $this->userLocation->typeSerialize(),
            'query' => $this->query,
            'offset' => $this->offset,
        ];
    }
}
