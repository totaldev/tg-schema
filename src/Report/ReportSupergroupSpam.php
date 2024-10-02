<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports messages in a supergroup as spam; requires administrator rights in the supergroup.
 */
class ReportSupergroupSpam extends TdFunction
{
    public const TYPE_NAME = 'reportSupergroupSpam';

    public function __construct(
        /**
         * Supergroup identifier.
         */
        protected int   $supergroupId,
        /**
         * Identifiers of messages to report. Use messageProperties.can_be_reported to check whether the message can be reported.
         *
         * @var int[]
         */
        protected array $messageIds,
    ) {}

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
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'message_ids'   => $this->messageIds,
        ];
    }
}
