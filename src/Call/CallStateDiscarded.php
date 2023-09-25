<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call has ended successfully
 */
class CallStateDiscarded extends CallState
{
    public const TYPE_NAME = 'callStateDiscarded';

    /**
     * The reason, why the call has ended
     *
     * @var CallDiscardReason
     */
    protected CallDiscardReason $reason;

    /**
     * True, if the call rating must be sent to the server
     *
     * @var bool
     */
    protected bool $needRating;

    /**
     * True, if the call debug information must be sent to the server
     *
     * @var bool
     */
    protected bool $needDebugInformation;

    /**
     * True, if the call log must be sent to the server
     *
     * @var bool
     */
    protected bool $needLog;

    public function __construct(
        CallDiscardReason $reason,
        bool $needRating,
        bool $needDebugInformation,
        bool $needLog,
    ) {
        parent::__construct();

        $this->reason = $reason;
        $this->needRating = $needRating;
        $this->needDebugInformation = $needDebugInformation;
        $this->needLog = $needLog;
    }

    public static function fromArray(array $array): CallStateDiscarded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reason']),
            $array['need_rating'],
            $array['need_debug_information'],
            $array['need_log'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reason' => $this->reason->typeSerialize(),
            'need_rating' => $this->needRating,
            'need_debug_information' => $this->needDebugInformation,
            'need_log' => $this->needLog,
        ];
    }

    public function getReason(): CallDiscardReason
    {
        return $this->reason;
    }

    public function getNeedRating(): bool
    {
        return $this->needRating;
    }

    public function getNeedDebugInformation(): bool
    {
        return $this->needDebugInformation;
    }

    public function getNeedLog(): bool
    {
        return $this->needLog;
    }
}
