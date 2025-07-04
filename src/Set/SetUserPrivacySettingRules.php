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
    public const TYPE_NAME = 'setUserPrivacySettingRules';

    public function __construct(
        /**
         * The privacy setting.
         */
        protected UserPrivacySetting      $setting,
        /**
         * The new privacy rules.
         */
        protected UserPrivacySettingRules $rules
    ) {}

    public static function fromArray(array $array): SetUserPrivacySettingRules
    {
        return new static(
            TdSchemaRegistry::fromArray($array['setting']),
            TdSchemaRegistry::fromArray($array['rules']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'setting' => $this->setting->typeSerialize(),
            'rules'   => $this->rules->typeSerialize(),
        ];
    }
}
