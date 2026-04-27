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
    public const string TYPE_NAME = 'botMediaPreviewInfo';

    public function __construct(
        /**
         * List of language codes for which the bot has dedicated previews.
         *
         * @var string[]
         */
        protected array $languageCodes,
        /**
         * List of media previews.
         *
         * @var BotMediaPreview[]
         */
        protected array $previews,
    ) {}

    public static function fromArray(array $array): BotMediaPreviewInfo
    {
        return new static(
            languageCodes: $array['language_codes'],
            previews     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['previews']),
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

    public function setLanguageCodes(array $value): static
    {
        $this->languageCodes = $value;

        return $this;
    }

    public function setPreviews(array $value): static
    {
        $this->previews = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'language_codes' => $this->languageCodes,
            'previews'       => array_map(static fn($x) => $x->jsonSerialize(), $this->previews),
        ];
    }
}
