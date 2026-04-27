<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a game.
 */
class InputInlineQueryResultGame extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultGame';

    public function __construct(
        /**
         * Short name of the game.
         */
        protected string       $gameShortName,
        /**
         * Unique identifier of the query result.
         */
        protected string       $id,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultGame
    {
        return new static(
            gameShortName: $array['game_short_name'],
            id           : $array['id'],
            replyMarkup  : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
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

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function setGameShortName(string $value): static
    {
        $this->gameShortName = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_short_name' => $this->gameShortName,
            'id'              => $this->id,
            'reply_markup'    => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
