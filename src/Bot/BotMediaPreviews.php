<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of media previews of a bot.
 */
class BotMediaPreviews extends TdObject
{
    public const TYPE_NAME = 'botMediaPreviews';

    public function __construct(
        /**
         * List of media previews.
         *
         * @var BotMediaPreview[]
         */
        protected array $previews
    ) {}

    public static function fromArray(array $array): BotMediaPreviews
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['previews']),
        );
    }

    public function getPreviews(): array
    {
        return $this->previews;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->previews),
        ];
    }
}
