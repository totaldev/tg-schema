<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call has ended successfully.
 */
class CallStateDiscarded extends CallState
{
    public const string TYPE_NAME = 'callStateDiscarded';

    public function __construct(
        /**
         * True, if the call debug information must be sent to the server.
         */
        protected bool              $needDebugInformation,
        /**
         * True, if the call log must be sent to the server.
         */
        protected bool              $needLog,
        /**
         * True, if the call rating must be sent to the server.
         */
        protected bool              $needRating,
        /**
         * The reason why the call has ended.
         */
        protected CallDiscardReason $reason,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateDiscarded
    {
        return new static(
            needDebugInformation: $array['need_debug_information'],
            needLog             : $array['need_log'],
            needRating          : $array['need_rating'],
            reason              : TdSchemaRegistry::fromArray($array['reason']),
        );
    }

    public function getNeedDebugInformation(): bool
    {
        return $this->needDebugInformation;
    }

    public function getNeedLog(): bool
    {
        return $this->needLog;
    }

    public function getNeedRating(): bool
    {
        return $this->needRating;
    }

    public function getReason(): CallDiscardReason
    {
        return $this->reason;
    }

    public function setNeedDebugInformation(bool $value): static
    {
        $this->needDebugInformation = $value;

        return $this;
    }

    public function setNeedLog(bool $value): static
    {
        $this->needLog = $value;

        return $this;
    }

    public function setNeedRating(bool $value): static
    {
        $this->needRating = $value;

        return $this;
    }

    public function setReason(CallDiscardReason $value): static
    {
        $this->reason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'need_debug_information' => $this->needDebugInformation,
            'need_log'               => $this->needLog,
            'need_rating'            => $this->needRating,
            'reason'                 => $this->reason->jsonSerialize(),
        ];
    }
}
