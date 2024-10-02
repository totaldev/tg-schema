<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Paid media were bought.
 */
class BotTransactionPurposePaidMedia extends BotTransactionPurpose
{
    public const TYPE_NAME = 'botTransactionPurposePaidMedia';

    public function __construct(
        /**
         * The bought media if the trancastion wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array  $media,
        /**
         * Bot-provided payload; for bots only.
         */
        protected string $payload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotTransactionPurposePaidMedia
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            $array['payload'],
        );
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->media),
            'payload' => $this->payload,
        ];
    }
}
