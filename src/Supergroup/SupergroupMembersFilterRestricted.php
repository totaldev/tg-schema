<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Supergroup;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns restricted supergroup members; can be used only by administrators
 */
class SupergroupMembersFilterRestricted extends SupergroupMembersFilter
{
    public const TYPE_NAME = 'supergroupMembersFilterRestricted';

    /**
     * Query to search for
     *
     * @var string
     */
    protected string $query;

    public function __construct(string $query)
    {
        parent::__construct();

        $this->query = $query;
    }

    public static function fromArray(array $array): SupergroupMembersFilterRestricted
    {
        return new static(
            $array['query'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
