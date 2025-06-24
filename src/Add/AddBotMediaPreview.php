<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a new media preview to the beginning of the list of media previews of a bot. Returns the added preview after addition is completed server-side. The
 * total number of previews must not exceed getOption("bot_media_preview_count_max") for the given language.
 */
class AddBotMediaPreview extends TdFunction
{
    public const TYPE_NAME = 'addBotMediaPreview';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int               $botUserId,
        /**
         * A two-letter ISO 639-1 language code for which preview is added. If empty, then the preview will be shown to all users for whose languages there are no dedicated previews. If non-empty, then there must be an official language pack of the same name, which is returned by getLocalizationTargetInfo.
         */
        protected string            $languageCode,
        /**
         * Content of the added preview.
         */
        protected InputStoryContent $content
    ) {}

    public static function fromArray(array $array): AddBotMediaPreview
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'language_code' => $this->languageCode,
            'content'       => $this->content->typeSerialize(),
        ];
    }
}
