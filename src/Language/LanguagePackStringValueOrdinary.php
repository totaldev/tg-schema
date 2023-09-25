<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An ordinary language pack string
 */
class LanguagePackStringValueOrdinary extends LanguagePackStringValue
{
    public const TYPE_NAME = 'languagePackStringValueOrdinary';

    /**
     * String value
     *
     * @var string
     */
    protected string $value;

    public function __construct(string $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): LanguagePackStringValueOrdinary
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}
