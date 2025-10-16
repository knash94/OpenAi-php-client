<?php

namespace OpenAI\Contracts\Resources;

use OpenAI\Responses\Threads\Messages\ThreadMessageDeleteResponse;
use OpenAI\Responses\Threads\Messages\ThreadMessageListResponse;
use OpenAI\Responses\Threads\Messages\ThreadMessageResponse;

/**
 * @deprecated The Assistants API has been deprecated and will stop working on August 26, 2026.
 * @see https://platform.openai.com/docs/assistants/migration
 */
interface ThreadsMessagesContract
{
    /**
     * Create a message.
     *
     * @see https://platform.openai.com/docs/api-reference/messages/createMessage
     *
     * @param  array<string, mixed>  $parameters
     */
    public function create(string $threadId, array $parameters): ThreadMessageResponse;

    /**
     * Retrieve a message.
     *
     * @see https://platform.openai.com/docs/api-reference/messages/getMessage
     */
    public function retrieve(string $threadId, string $messageId): ThreadMessageResponse;

    /**
     * Modifies a message.
     *
     * @see https://platform.openai.com/docs/api-reference/messages/modifyMessage
     *
     * @param  array<string, mixed>  $parameters
     */
    public function modify(string $threadId, string $messageId, array $parameters): ThreadMessageResponse;

    /**
     * Deletes a message.
     *
     * @see https://platform.openai.com/docs/api-reference/messages/deleteMessage
     */
    public function delete(string $threadId, string $messageId): ThreadMessageDeleteResponse;

    /**
     * Returns a list of messages for a given thread.
     *
     * @see https://platform.openai.com/docs/api-reference/messages/listMessages
     *
     * @param  array<string, mixed>  $parameters
     */
    public function list(string $threadId, array $parameters = []): ThreadMessageListResponse;
}
