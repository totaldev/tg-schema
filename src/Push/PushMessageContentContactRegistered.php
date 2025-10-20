<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A contact has registered with Telegram.
 */
class PushMessageContentContactRegistered extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentContactRegistered';

    public function __construct(
        /**
         * True, if the user joined Telegram as a Telegram Premium account.
         */
        protected bool $asPremiumAccount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentContactRegistered
    {
        return new static(
            $array['as_premium_account'],
        );
    }

    public function getAsPremiumAccount(): bool
    {
        return $this->asPremiumAccount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'as_premium_account' => $this->asPremiumAccount,
        ];
    }
}
