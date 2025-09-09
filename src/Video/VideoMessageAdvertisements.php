<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of advertisements to be shown while a video from a message is watched.
 */
class VideoMessageAdvertisements extends TdObject
{
    public const TYPE_NAME = 'videoMessageAdvertisements';

    public function __construct(
        /**
         * List of advertisements.
         *
         * @var VideoMessageAdvertisement[]
         */
        protected array $advertisements,
        /**
         * Delay before the first advertisement is shown, in seconds.
         */
        protected int   $startDelay,
        /**
         * Delay between consecutive advertisements, in seconds.
         */
        protected int   $betweenDelay,
    ) {}

    public static function fromArray(array $array): VideoMessageAdvertisements
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['advertisements']),
            $array['start_delay'],
            $array['between_delay'],
        );
    }

    public function getAdvertisements(): array
    {
        return $this->advertisements;
    }

    public function getBetweenDelay(): int
    {
        return $this->betweenDelay;
    }

    public function getStartDelay(): int
    {
        return $this->startDelay;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'advertisements' => array_map(static fn($x) => $x->typeSerialize(), $this->advertisements),
            'start_delay'    => $this->startDelay,
            'between_delay'  => $this->betweenDelay,
        ];
    }
}
