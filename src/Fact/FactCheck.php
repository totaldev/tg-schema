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
    public const string TYPE_NAME = 'factCheck';

    public function __construct(
        /**
         * A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check is shown.
         */
        protected string        $countryCode,
        /**
         * Text of the fact-check.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): FactCheck
    {
        return new static(
            countryCode: $array['country_code'],
            text       : TdSchemaRegistry::fromArray($array['text']),
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

    public function setCountryCode(string $value): static
    {
        $this->countryCode = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'country_code' => $this->countryCode,
            'text'         => $this->text->jsonSerialize(),
        ];
    }
}
