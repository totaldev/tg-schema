<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat can be boosted
 */
class CanBoostChatResultOk extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultOk';

    /**
     * Identifier of the currently boosted chat from which boost will be removed; 0 if none
     *
     * @var int
     */
    protected int $currentlyBoostedChatId;

    public function __construct(int $currentlyBoostedChatId)
    {
        parent::__construct();

        $this->currentlyBoostedChatId = $currentlyBoostedChatId;
    }

    public static function fromArray(array $array): CanBoostChatResultOk
    {
        return new static(
            $array['currently_boosted_chat_id'],
        );
    }

    public function getCurrentlyBoostedChatId(): int
    {
        return $this->currentlyBoostedChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'currently_boosted_chat_id' => $this->currentlyBoostedChatId,
        ];
    }
}
