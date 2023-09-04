<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Phone\PhoneNumberAuthenticationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the phone number of the user and sends an authentication code to the user. Works only when the current authorization state is authorizationStateWaitPhoneNumber, or if there is no pending authentication query and the current authorization state is authorizationStateWaitEmailAddress, authorizationStateWaitEmailCode, authorizationStateWaitCode, authorizationStateWaitRegistration, or authorizationStateWaitPassword
 */
class SetAuthenticationPhoneNumber extends TdFunction
{
    public const TYPE_NAME = 'setAuthenticationPhoneNumber';

    /**
     * The phone number of the user, in international format
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * Settings for the authentication of the user's phone number; pass null to use default settings
     *
     * @var PhoneNumberAuthenticationSettings
     */
    protected PhoneNumberAuthenticationSettings $settings;

    public function __construct(string $phoneNumber, PhoneNumberAuthenticationSettings $settings)
    {
        $this->phoneNumber = $phoneNumber;
        $this->settings = $settings;
    }

    public static function fromArray(array $array): SetAuthenticationPhoneNumber
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'settings' => $this->settings->typeSerialize(),
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getSettings(): PhoneNumberAuthenticationSettings
    {
        return $this->settings;
    }
}
