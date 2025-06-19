<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Allow;

use Totaldev\TgSchema\TdFunction;

/**
 * Allows the specified user to send unpaid private messages to the current user by adding a rule to userPrivacySettingAllowUnpaidMessages.
 */
class AllowUnpaidMessagesFromUser extends TdFunction
{
    public const TYPE_NAME = 'allowUnpaidMessagesFromUser';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int  $userId,
        /**
         * Pass true to refund the user previously paid messages.
         */
        protected bool $refundPayments
    ) {}

    public static function fromArray(array $array): AllowUnpaidMessagesFromUser
    {
        return new static(
            $array['user_id'],
            $array['refund_payments'],
        );
    }

    public function getRefundPayments(): bool
    {
        return $this->refundPayments;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'user_id'         => $this->userId,
            'refund_payments' => $this->refundPayments,
        ];
    }
}
