<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sessions;

use Totaldev\TgSchema\Session\Session;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of sessions.
 */
class Sessions extends TdObject
{
    public const string TYPE_NAME = 'sessions';

    public function __construct(
        /**
         * Number of days of inactivity before sessions will automatically be terminated; 1-366 days.
         */
        protected int   $inactiveSessionTtlDays,
        /**
         * List of sessions.
         *
         * @var Session[]
         */
        protected array $sessions,
    ) {}

    public static function fromArray(array $array): Sessions
    {
        return new static(
            inactiveSessionTtlDays: $array['inactive_session_ttl_days'],
            sessions              : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sessions']),
        );
    }

    public function getInactiveSessionTtlDays(): int
    {
        return $this->inactiveSessionTtlDays;
    }

    public function getSessions(): array
    {
        return $this->sessions;
    }

    public function setInactiveSessionTtlDays(int $value): static
    {
        $this->inactiveSessionTtlDays = $value;

        return $this;
    }

    public function setSessions(array $value): static
    {
        $this->sessions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'inactive_session_ttl_days' => $this->inactiveSessionTtlDays,
            'sessions'                  => array_map(static fn($x) => $x->jsonSerialize(), $this->sessions),
        ];
    }
}
