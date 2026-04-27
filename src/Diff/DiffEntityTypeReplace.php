<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Diff;

/**
 * Change of some text.
 */
class DiffEntityTypeReplace extends DiffEntityType
{
    public const string TYPE_NAME = 'diffEntityTypeReplace';

    public function __construct(
        /**
         * The old text.
         */
        protected string $oldText
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DiffEntityTypeReplace
    {
        return new static(
            oldText: $array['old_text'],
        );
    }

    public function getOldText(): string
    {
        return $this->oldText;
    }

    public function setOldText(string $value): static
    {
        $this->oldText = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'old_text' => $this->oldText,
        ];
    }
}
