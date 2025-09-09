<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatTheme;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of available chat themes has changed.
 */
class UpdateChatThemes extends Update
{
    public const TYPE_NAME = 'updateChatThemes';

    public function __construct(
        /**
         * The new list of chat themes.
         *
         * @var ChatTheme[]
         */
        protected array $chatThemes
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatThemes
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_themes']),
        );
    }

    public function getChatThemes(): array
    {
        return $this->chatThemes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_themes' => array_map(static fn($x) => $x->typeSerialize(), $this->chatThemes),
        ];
    }
}
