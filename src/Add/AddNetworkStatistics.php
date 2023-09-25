<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Network\NetworkStatisticsEntry;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds the specified data to data usage statistics. Can be called before authorization
 */
class AddNetworkStatistics extends TdFunction
{
    public const TYPE_NAME = 'addNetworkStatistics';

    /**
     * The network statistics entry with the data to be added to statistics
     *
     * @var NetworkStatisticsEntry
     */
    protected NetworkStatisticsEntry $entry;

    public function __construct(NetworkStatisticsEntry $entry)
    {
        $this->entry = $entry;
    }

    public static function fromArray(array $array): AddNetworkStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['entry']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'entry' => $this->entry->typeSerialize(),
        ];
    }

    public function getEntry(): NetworkStatisticsEntry
    {
        return $this->entry;
    }
}
