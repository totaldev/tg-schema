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
    public const TYPE_NAME = 'updateUserPrivacySettingRules';

    public function __construct(
        /**
         * The privacy setting.
         */
        protected UserPrivacySetting      $setting,
        /**
         * New privacy rules.
         */
        protected UserPrivacySettingRules $rules,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUserPrivacySettingRules
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
