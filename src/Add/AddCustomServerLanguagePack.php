<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a custom server language pack to the list of installed language packs in current localization target. Can be called before authorization
 */
class AddCustomServerLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'addCustomServerLanguagePack';

    /**
     * Identifier of a language pack to be added
     *
     * @var string
     */
    protected string $languagePackId;

    public function __construct(string $languagePackId)
    {
        $this->languagePackId = $languagePackId;
    }

    public static function fromArray(array $array): AddCustomServerLanguagePack
    {
        return new static(
            $array['language_pack_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
        ];
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }
}
