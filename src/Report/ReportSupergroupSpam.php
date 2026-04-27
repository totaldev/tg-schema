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
    public const string TYPE_NAME = 'reportSupergroupSpam';

    public function __construct(
        /**
         * Identifiers of messages to report. Use messageProperties.can_report_supergroup_spam to check whether the message can be reported.
         *
         * @var int[]
         */
        protected array $messageIds,
        /**
         * Supergroup identifier.
         */
        protected int   $supergroupId,
    ) {}

    public static function fromArray(array $array): ReportSupergroupSpam
    {
        return new static(
            messageIds  : $array['message_ids'],
            supergroupId: $array['supergroup_id'],
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

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'message_ids'   => $this->messageIds,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
