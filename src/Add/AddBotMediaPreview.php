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
    public const string TYPE_NAME = 'addBotMediaPreview';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int               $botUserId,
        /**
         * Content of the added preview.
         */
        protected InputStoryContent $content,
        /**
         * A two-letter ISO 639-1 language code for which preview is added. If empty, then the preview will be shown to all users for whose languages there are no dedicated previews. If non-empty, then there must be an official language pack of the same name, which is returned by getLocalizationTargetInfo.
         */
        protected string            $languageCode,
    ) {}

    public static function fromArray(array $array): AddBotMediaPreview
    {
        return new static(
            botUserId   : $array['bot_user_id'],
            content     : TdSchemaRegistry::fromArray($array['content']),
            languageCode: $array['language_code'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setContent(InputStoryContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'content'       => $this->content->jsonSerialize(),
            'language_code' => $this->languageCode,
        ];
    }
}
