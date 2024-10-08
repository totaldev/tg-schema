<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

/**
 * A language pack string which has different forms based on the number of some object it mentions. See
 * https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information.
 */
class LanguagePackStringValuePluralized extends LanguagePackStringValue
{
    public const TYPE_NAME = 'languagePackStringValuePluralized';

    public function __construct(
        /**
         * Value for zero objects.
         */
        protected string $zeroValue,
        /**
         * Value for one object.
         */
        protected string $oneValue,
        /**
         * Value for two objects.
         */
        protected string $twoValue,
        /**
         * Value for few objects.
         */
        protected string $fewValue,
        /**
         * Value for many objects.
         */
        protected string $manyValue,
        /**
         * Default value.
         */
        protected string $otherValue,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LanguagePackStringValuePluralized
    {
        return new static(
            $array['zero_value'],
            $array['one_value'],
            $array['two_value'],
            $array['few_value'],
            $array['many_value'],
            $array['other_value'],
        );
    }

    public function getFewValue(): string
    {
        return $this->fewValue;
    }

    public function getManyValue(): string
    {
        return $this->manyValue;
    }

    public function getOneValue(): string
    {
        return $this->oneValue;
    }

    public function getOtherValue(): string
    {
        return $this->otherValue;
    }

    public function getTwoValue(): string
    {
        return $this->twoValue;
    }

    public function getZeroValue(): string
    {
        return $this->zeroValue;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'zero_value'  => $this->zeroValue,
            'one_value'   => $this->oneValue,
            'two_value'   => $this->twoValue,
            'few_value'   => $this->fewValue,
            'many_value'  => $this->manyValue,
            'other_value' => $this->otherValue,
        ];
    }
}
