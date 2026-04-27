<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserPrivacySetting;
use Totaldev\TgSchema\User\UserPrivacySettingRules;

/**
 * Changes user privacy settings.
 */
class SetUserPrivacySettingRules extends TdFunction
{
    public const string TYPE_NAME = 'setUserPrivacySettingRules';

    public function __construct(
        /**
         * The new privacy rules.
         */
        protected UserPrivacySettingRules $rules,
        /**
         * The privacy setting.
         */
        protected UserPrivacySetting      $setting,
    ) {}

    public static function fromArray(array $array): SetUserPrivacySettingRules
    {
        return new static(
            rules  : TdSchemaRegistry::fromArray($array['rules']),
            setting: TdSchemaRegistry::fromArray($array['setting']),
        );
    }

    public function getRules(): UserPrivacySettingRules
    {
        return $this->rules;
    }

    public function getSetting(): UserPrivacySetting
    {
        return $this->setting;
    }

    public function setRules(UserPrivacySettingRules $value): static
    {
        $this->rules = $value;

        return $this;
    }

    public function setSetting(UserPrivacySetting $value): static
    {
        $this->setting = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'rules'   => $this->rules->jsonSerialize(),
            'setting' => $this->setting->jsonSerialize(),
        ];
    }
}
