<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a custom server language pack to the list of installed language packs in current localization target. Can be called before authorization.
 */
class AddCustomServerLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'addCustomServerLanguagePack';

    public function __construct(
        /**
         * Identifier of a language pack to be added.
         */
        protected string $languagePackId
    ) {}

    public static function fromArray(array $array): AddCustomServerLanguagePack
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
