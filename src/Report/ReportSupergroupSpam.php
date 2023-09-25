<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports messages in a supergroup as spam; requires administrator rights in the supergroup
 */
class ReportSupergroupSpam extends TdFunction
{
    public const TYPE_NAME = 'reportSupergroupSpam';

    /**
     * Identifiers of messages to report
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * Supergroup identifier
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId, array $messageIds)
    {
        $this->supergroupId = $supergroupId;
        $this->messageIds = $messageIds;
    }

    public static function fromArray(array $array): ReportSupergroupSpam
    {
        return new static(
            $array['supergroup_id'],
            $array['message_ids'],
        );
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'message_ids' => $this->messageIds,
        ];
    }
}
