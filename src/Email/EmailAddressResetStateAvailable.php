<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

/**
 * Email address can be reset after the given period. Call resetAuthenticationEmailAddress to reset it and allow the user to authorize with a code sent to the
 * user's phone number.
 */
class EmailAddressResetStateAvailable extends EmailAddressResetState
{
    public const TYPE_NAME = 'emailAddressResetStateAvailable';

    public function __construct(
        /**
         * Time required to wait before the email address can be reset; 0 if the user is subscribed to Telegram Premium.
         */
        protected int $waitPeriod
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmailAddressResetStateAvailable
    {
        return new static(
            $array['wait_period'],
        );
    }

    public function getWaitPeriod(): int
    {
        return $this->waitPeriod;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'wait_period' => $this->waitPeriod,
        ];
    }
}
