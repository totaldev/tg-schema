<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to disallow incoming voice and video note messages in private chats using setUserPrivacySettingRules with
 * userPrivacySettingAllowPrivateVoiceAndVideoNoteMessages and to restrict incoming messages from non-contacts using setNewChatPrivacySettings.
 */
class PremiumFeatureMessagePrivacy extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureMessagePrivacy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureMessagePrivacy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
