<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of media previews of a bot for the given language and the list of languages for which the bot has dedicated previews.
 */
class BotMediaPreviewInfo extends TdObject
{
    public const TYPE_NAME = 'botMediaPreviewInfo';

    public function __construct(
        /**
         * List of media previews.
         *
         * @var BotMediaPreview[]
         */
        protected array $previews,
        /**
         * List of language codes for which the bot has dedicated previews.
         *
         * @var string[]
         */
        protected array $languageCodes,
    ) {}

    public static function fromArray(array $array): BotMediaPreviewInfo
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['previews']),
            $array['language_codes'],
        );
    }

    public function getLanguageCodes(): array
    {
        return $this->languageCodes;
    }

    public function getPreviews(): array
    {
        return $this->previews;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->previews),
            'language_codes' => $this->languageCodes,
        ];
    }
}
