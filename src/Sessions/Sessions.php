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
    public const TYPE_NAME = 'sessions';

    public function __construct(
        /**
         * List of sessions.
         *
         * @var Session[]
         */
        protected array $sessions,
        /**
         * Number of days of inactivity before sessions will automatically be terminated; 1-366 days.
         */
        protected int   $inactiveSessionTtlDays
    ) {}

    public static function fromArray(array $array): Sessions
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sessions']),
            $array['inactive_session_ttl_days'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'sessions'                  => array_map(static fn($x) => $x->typeSerialize(), $this->sessions),
            'inactive_session_ttl_days' => $this->inactiveSessionTtlDays,
        ];
    }
}
