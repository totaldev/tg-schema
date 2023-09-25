<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A rule to allow all members of certain specified basic groups and supergroups to doing something
 */
class UserPrivacySettingRuleAllowChatMembers extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowChatMembers';

    /**
     * The chat identifiers, total number of chats in all rules must not exceed 20
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(array $chatIds)
    {
        parent::__construct();

        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowChatMembers
    {
        return new static(
            $array['chat_ids'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_ids' => $this->chatIds,
        ];
    }
}
