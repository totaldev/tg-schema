<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a venue found by the bot getOption("venue_search_bot_username")
 */
class InputStoryAreaTypeFoundVenue extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeFoundVenue';

    /**
     * Identifier of the inline query, used to found the venue
     *
     * @var int
     */
    protected int $queryId;

    /**
     * Identifier of the inline query result
     *
     * @var string
     */
    protected string $resultId;

    public function __construct(int $queryId, string $resultId)
    {
        parent::__construct();

        $this->queryId = $queryId;
        $this->resultId = $resultId;
    }

    public static function fromArray(array $array): InputStoryAreaTypeFoundVenue
    {
        return new static(
            $array['query_id'],
            $array['result_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query_id' => $this->queryId,
            'result_id' => $this->resultId,
        ];
    }

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }
}
