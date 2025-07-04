<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatPosition;
use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat draft has changed. Be aware that the update may come in the currently opened chat but with old content of the draft. If the user has changed the
 * content of the draft, this update mustn't be applied.
 */
class UpdateChatDraftMessage extends Update
{
    public const TYPE_NAME = 'updateChatDraftMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * The new draft message; may be null if none.
         */
        protected ?DraftMessage $draftMessage,
        /**
         * The new chat positions in the chat lists.
         *
         * @var ChatPosition[]
         */
        protected array         $positions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'draft_message' => $this->draftMessage ?? null,
            'positions'     => array_map(static fn($x) => $x->typeSerialize(), $this->positions),
        ];
    }
}
