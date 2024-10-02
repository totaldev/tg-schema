<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a language pack. Call getLanguagePackInfo with the given language pack identifier to process the link. If the language pack is found
 * and the user wants to apply it, then call setOption for the option "language_pack_id".
 */
class InternalLinkTypeLanguagePack extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeLanguagePack';

    public function __construct(
        /**
         * Language pack identifier.
         */
        protected string $languagePackId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeLanguagePack
    {
        return new static(
            $array['language_pack_id'],
        );
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
        ];
    }
}
