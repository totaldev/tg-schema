<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reply;

use Totaldev\TgSchema\Inline\InlineKeyboardButton;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains an inline keyboard layout.
 */
class ReplyMarkupInlineKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupInlineKeyboard';

    public function __construct(
        /**
         * A list of rows of inline keyboard buttons.
         *
         * @var InlineKeyboardButton[][]
         */
        protected array $rows
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReplyMarkupInlineKeyboard
    {
        return new static(
            array_map(static fn($x) => array_map(static fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['rows']),
        );
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => array_map(static fn($y) => $y->typeSerialize(), $x), $this->rows),
        ];
    }
}
