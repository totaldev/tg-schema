<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

/**
 * The category contains a list of similar emoji to search for in getStickers and searchStickers for stickers, or getInlineQueryResults with the bot
 * getOption("animation_search_bot_username") for animations.
 */
class EmojiCategorySourceSearch extends EmojiCategorySource
{
    public const TYPE_NAME = 'emojiCategorySourceSearch';

    public function __construct(
        /**
         * List of emojis to search for.
         *
         * @var string[]
         */
        protected array $emojis
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiCategorySourceSearch
    {
        return new static(
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }
}
