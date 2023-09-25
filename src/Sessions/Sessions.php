<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sessions;

use Totaldev\TgSchema\Session\Session;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of sessions
 */
class Sessions extends TdObject
{
    public const TYPE_NAME = 'sessions';

    /**
     * Number of days of inactivity before sessions will automatically be terminated; 1-366 days
     *
     * @var int
     */
    protected int $inactiveSessionTtlDays;

    /**
     * List of sessions
     *
     * @var Session[]
     */
    protected array $sessions;

    public function __construct(array $sessions, int $inactiveSessionTtlDays)
    {
        $this->sessions = $sessions;
        $this->inactiveSessionTtlDays = $inactiveSessionTtlDays;
    }

    public static function fromArray(array $array): Sessions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['sessions']),
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
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->sessions),
            'inactive_session_ttl_days' => $this->inactiveSessionTtlDays,
        ];
    }
}
