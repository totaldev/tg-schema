<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserPrivacySetting;
use Totaldev\TgSchema\User\UserPrivacySettingRules;

/**
 * Some privacy setting rules have been changed.
 */
class UpdateUserPrivacySettingRules extends Update
{
    public const string TYPE_NAME = 'updateUserPrivacySettingRules';

    public function __construct(
        /**
         * New privacy rules.
         */
        protected UserPrivacySettingRules $rules,
        /**
         * The privacy setting.
         */
        protected UserPrivacySetting      $setting,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUserPrivacySettingRules
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
