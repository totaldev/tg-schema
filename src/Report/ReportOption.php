<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an option to report an entity to Telegram.
 */
class ReportOption extends TdObject
{
    public const TYPE_NAME = 'reportOption';

    public function __construct(
        /**
         * Unique identifier of the option.
         */
        protected string $id,
        /**
         * Text of the option.
         */
        protected string $text
    ) {}

    public static function fromArray(array $array): ReportOption
    {
        return new static(
            $array['id'],
            $array['text'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
            'text'  => $this->text,
        ];
    }
}
