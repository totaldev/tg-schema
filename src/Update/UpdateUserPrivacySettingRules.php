<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserPrivacySetting;
use Totaldev\TgSchema\User\UserPrivacySettingRules;

/**
 * Some privacy setting rules have been changed
 */
class UpdateUserPrivacySettingRules extends Update
{
    public const TYPE_NAME = 'updateUserPrivacySettingRules';

    /**
     * New privacy rules
     *
     * @var UserPrivacySettingRules
     */
    protected UserPrivacySettingRules $rules;

    /**
     * The privacy setting
     *
     * @var UserPrivacySetting
     */
    protected UserPrivacySetting $setting;

    public function __construct(UserPrivacySetting $setting, UserPrivacySettingRules $rules)
    {
        parent::__construct();

        $this->setting = $setting;
        $this->rules = $rules;
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
            '@type' => static::TYPE_NAME,
            'setting' => $this->setting->typeSerialize(),
            'rules' => $this->rules->typeSerialize(),
        ];
    }
}
