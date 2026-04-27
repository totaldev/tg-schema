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
    public const string TYPE_NAME = 'videoMessageAdvertisements';

    public function __construct(
        /**
         * List of advertisements.
         *
         * @var VideoMessageAdvertisement[]
         */
        protected array $advertisements,
        /**
         * Delay between consecutive advertisements, in seconds.
         */
        protected int   $betweenDelay,
        /**
         * Delay before the first advertisement is shown, in seconds.
         */
        protected int   $startDelay,
    ) {}

    public static function fromArray(array $array): VideoMessageAdvertisements
    {
        return new static(
            advertisements: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['advertisements']),
            betweenDelay  : $array['between_delay'],
            startDelay    : $array['start_delay'],
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

    public function setAdvertisements(array $value): static
    {
        $this->advertisements = $value;

        return $this;
    }

    public function setBetweenDelay(int $value): static
    {
        $this->betweenDelay = $value;

        return $this;
    }

    public function setStartDelay(int $value): static
    {
        $this->startDelay = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'advertisements' => array_map(static fn($x) => $x->jsonSerialize(), $this->advertisements),
            'between_delay'  => $this->betweenDelay,
            'start_delay'    => $this->startDelay,
        ];
    }
}
