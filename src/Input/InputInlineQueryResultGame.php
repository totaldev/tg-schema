<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a game
 */
class InputInlineQueryResultGame extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultGame';

    /**
     * Short name of the game
     *
     * @var string
     */
    protected string $gameShortName;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    public function __construct(string $id, string $gameShortName, ReplyMarkup $replyMarkup)
    {
        parent::__construct();

        $this->id = $id;
        $this->gameShortName = $gameShortName;
        $this->replyMarkup = $replyMarkup;
    }

    public static function fromArray(array $array): InputInlineQueryResultGame
    {
        return new static(
            $array['id'],
            $array['game_short_name'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'game_short_name' => $this->gameShortName,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
        ];
    }
}
