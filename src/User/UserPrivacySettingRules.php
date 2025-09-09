<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A list of privacy rules. Rules are matched in the specified order. The first matched rule defines the privacy setting for a given user. If no rule matches,
 * the action is not allowed.
 */
class UserPrivacySettingRules extends TdObject
{
    public const TYPE_NAME = 'userPrivacySettingRules';

    public function __construct(
        /**
         * A list of rules.
         *
         * @var UserPrivacySettingRule[]
         */
        protected array $rules
    ) {}

    public static function fromArray(array $array): UserPrivacySettingRules
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['rules']),
        );
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'rules' => array_map(static fn($x) => $x->typeSerialize(), $this->rules),
        ];
    }
}
