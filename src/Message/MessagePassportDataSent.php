<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Passport\PassportElementType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Passport data has been sent to a bot.
 */
class MessagePassportDataSent extends MessageContent
{
    public const TYPE_NAME = 'messagePassportDataSent';

    public function __construct(
        /**
         * List of Telegram Passport element types sent.
         *
         * @var PassportElementType[]
         */
        protected array $types
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePassportDataSent
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['types']),
        );
    }

    public function getTypes(): array
    {
        return $this->types;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'types' => array_map(static fn($x) => $x->typeSerialize(), $this->types),
        ];
    }
}
