<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Synchronize;

use Totaldev\TgSchema\TdFunction;

/**
 * Fetches the latest versions of all strings from a language pack in the current localization target from the server. This method doesn't need to be called
 * explicitly for the current used/base language packs. Can be called before authorization.
 */
class SynchronizeLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'synchronizeLanguagePack';

    public function __construct(
        /**
         * Language pack identifier.
         */
        protected string $languagePackId
    ) {}

    public static function fromArray(array $array): SynchronizeLanguagePack
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
