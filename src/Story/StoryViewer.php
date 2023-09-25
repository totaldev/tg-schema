<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a viewer of a story
 */
class StoryViewer extends TdObject
{
    public const TYPE_NAME = 'storyViewer';

    /**
     * User identifier of the viewer
     *
     * @var int
     */
    protected int $userId;

    /**
     * Approximate point in time (Unix timestamp) when the story was viewed
     *
     * @var int
     */
    protected int $viewDate;

    /**
     * Block list to which the user is added; may be null if none
     *
     * @var BlockList|null
     */
    protected ?BlockList $blockList;

    /**
     * Type of the reaction that was chosen by the user; may be null if none
     *
     * @var ReactionType|null
     */
    protected ?ReactionType $chosenReactionType;

    public function __construct(int $userId, int $viewDate, ?BlockList $blockList, ?ReactionType $chosenReactionType)
    {
        $this->userId = $userId;
        $this->viewDate = $viewDate;
        $this->blockList = $blockList;
        $this->chosenReactionType = $chosenReactionType;
    }

    public static function fromArray(array $array): StoryViewer
    {
        return new static(
            $array['user_id'],
            $array['view_date'],
            (isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null),
            (isset($array['chosen_reaction_type']) ? TdSchemaRegistry::fromArray($array['chosen_reaction_type']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'view_date' => $this->viewDate,
            'block_list' => (isset($this->blockList) ? $this->blockList : null),
            'chosen_reaction_type' => (isset($this->chosenReactionType) ? $this->chosenReactionType : null),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getViewDate(): int
    {
        return $this->viewDate;
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getChosenReactionType(): ?ReactionType
    {
        return $this->chosenReactionType;
    }
}
