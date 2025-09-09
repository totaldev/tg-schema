<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Fact;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a fact-check added to the message by an independent checker.
 */
class FactCheck extends TdObject
{
    public const TYPE_NAME = 'factCheck';

    public function __construct(
        /**
         * Text of the fact-check.
         */
        protected FormattedText $text,
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check is shown.
         */
        protected string        $countryCode,
    ) {}

    public static function fromArray(array $array): FactCheck
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['country_code'],
        );
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'text'         => $this->text->typeSerialize(),
            'country_code' => $this->countryCode,
        ];
    }
}
