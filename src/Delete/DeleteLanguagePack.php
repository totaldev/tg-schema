<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all information about a language pack in the current localization target. The language pack which is currently in use (including base language pack)
 * or is being synchronized can't be deleted. Can be called before authorization.
 */
class DeleteLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'deleteLanguagePack';

    public function __construct(
        /**
         * Identifier of the language pack to delete.
         */
        protected string $languagePackId
    ) {}

    public static function fromArray(array $array): DeleteLanguagePack
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
