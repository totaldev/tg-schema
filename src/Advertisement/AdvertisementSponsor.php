<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Advertisement;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the sponsor of an advertisement.
 */
class AdvertisementSponsor extends TdObject
{
    public const string TYPE_NAME = 'advertisementSponsor';

    public function __construct(
        /**
         * URL of the sponsor to be opened when the advertisement is clicked.
         */
        protected string $url,
        /**
         * Photo of the sponsor; may be null if must not be shown.
         */
        protected ?Photo $photo,
        /**
         * Additional optional information about the sponsor to be shown along with the advertisement.
         */
        protected string $info,
    ) {}

    public static function fromArray(array $array): AdvertisementSponsor
    {
        return new static(
            $array['url'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['info'],
        );
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setInfo(string $value): static
    {
        $this->info = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
            'photo' => $this->photo ?? null,
            'info'  => $this->info,
        ];
    }
}
