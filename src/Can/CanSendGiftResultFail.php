<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The gift can't be sent now by the current user.
 */
class CanSendGiftResultFail extends CanSendGiftResult
{
    public const string TYPE_NAME = 'canSendGiftResultFail';

    public function __construct(
        /**
         * Reason to be shown to the user.
         */
        protected FormattedText $reason
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendGiftResultFail
    {
        return new static(
            reason: TdSchemaRegistry::fromArray($array['reason']),
        );
    }

    public function getReason(): FormattedText
    {
        return $this->reason;
    }

    public function setReason(FormattedText $value): static
    {
        $this->reason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reason' => $this->reason->jsonSerialize(),
        ];
    }
}
