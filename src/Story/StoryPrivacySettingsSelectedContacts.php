<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The story can be viewed by certain specified users
 */
class StoryPrivacySettingsSelectedContacts extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsSelectedContacts';

    /**
     * Identifiers of the users; always unknown and empty for non-owned stories
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        parent::__construct();

        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): StoryPrivacySettingsSelectedContacts
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }
}
