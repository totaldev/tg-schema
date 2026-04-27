<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds 2-10 messages grouped together into an album to a quick reply shortcut. Currently, only audio, document, photo and video messages can be grouped into
 * an album. Documents and audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class AddQuickReplyShortcutMessageAlbum extends TdFunction
{
    public const string TYPE_NAME = 'addQuickReplyShortcutMessageAlbum';

    public function __construct(
        /**
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array  $inputMessageContents,
        /**
         * Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none.
         */
        protected int    $replyToMessageId,
        /**
         * Name of the target shortcut.
         */
        protected string $shortcutName,
    ) {}

    public static function fromArray(array $array): AddQuickReplyShortcutMessageAlbum
    {
        return new static(
            inputMessageContents: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
            replyToMessageId    : $array['reply_to_message_id'],
            shortcutName        : $array['shortcut_name'],
        );
    }

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    public function setInputMessageContents(array $value): static
    {
        $this->inputMessageContents = $value;

        return $this;
    }

    public function setReplyToMessageId(int $value): static
    {
        $this->replyToMessageId = $value;

        return $this;
    }

    public function setShortcutName(string $value): static
    {
        $this->shortcutName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'input_message_contents' => array_map(static fn($x) => $x->jsonSerialize(), $this->inputMessageContents),
            'reply_to_message_id'    => $this->replyToMessageId,
            'shortcut_name'          => $this->shortcutName,
        ];
    }
}
