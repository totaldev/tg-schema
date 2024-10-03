<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserPrivacySetting;

/**
 * Returns the current privacy settings.
 */
class GetUserPrivacySettingRules extends TdFunction
{
    public const TYPE_NAME = 'getUserPrivacySettingRules';

    public function __construct(
        /**
         * The privacy setting.
         */
        protected UserPrivacySetting $setting
    ) {}

    public static function fromArray(array $array): GetUserPrivacySettingRules
    {
        return new static(
            TdSchemaRegistry::fromArray($array['setting']),
        );
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
        ];
    }
}
