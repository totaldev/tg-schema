<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Countries;

use Totaldev\TgSchema\Country\CountryInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about countries.
 */
class Countries extends TdObject
{
    public const TYPE_NAME = 'countries';

    public function __construct(
        /**
         * The list of countries.
         *
         * @var CountryInfo[]
         */
        protected array $countries
    ) {}

    public static function fromArray(array $array): Countries
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['countries']),
        );
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'countries' => array_map(static fn($x) => $x->typeSerialize(), $this->countries),
        ];
    }
}
