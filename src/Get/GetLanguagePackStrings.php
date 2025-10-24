<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns strings from a language pack in the current localization target by their keys. Can be called before authorization.
 */
class GetLanguagePackStrings extends TdFunction
{
    public const string TYPE_NAME = 'getLanguagePackStrings';

    public function __construct(
        /**
         * Language pack identifier of the strings to be returned.
         */
        protected string $languagePackId,
        /**
         * Language pack keys of the strings to be returned; leave empty to request all available strings.
         *
         * @var string[]
         */
        protected array  $keys,
    ) {}

    public static function fromArray(array $array): GetLanguagePackStrings
    {
        return new static(
            $array['language_pack_id'],
            $array['keys'],
        );
    }

    public function getKeys(): array
    {
        return $this->keys;
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function setKeys(array $value): static
    {
        $this->keys = $value;

        return $this;
    }

    public function setLanguagePackId(string $value): static
    {
        $this->languagePackId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
            'keys'             => $this->keys,
        ];
    }
}
