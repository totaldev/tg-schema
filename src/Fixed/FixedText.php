<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Fixed;

use Totaldev\TgSchema\Diff\DiffText;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text fixed using fixTextWithAi.
 */
class FixedText extends TdObject
{
    public const string TYPE_NAME = 'fixedText';

    public function __construct(
        /**
         * Changes made to the original text.
         */
        protected DiffText      $diffText,
        /**
         * The resulting text.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): FixedText
    {
        return new static(
            diffText: TdSchemaRegistry::fromArray($array['diff_text']),
            text    : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getDiffText(): DiffText
    {
        return $this->diffText;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setDiffText(DiffText $value): static
    {
        $this->diffText = $value;

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
            '@type'     => static::TYPE_NAME,
            'diff_text' => $this->diffText->jsonSerialize(),
            'text'      => $this->text->jsonSerialize(),
        ];
    }
}
