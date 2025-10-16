<?php

namespace OpenAI\Contracts\Resources;

use OpenAI\Responses\Threads\Runs\Steps\ThreadRunStepListResponse;
use OpenAI\Responses\Threads\Runs\Steps\ThreadRunStepResponse;

/**
 * @deprecated The Assistants API has been deprecated and will stop working on August 26, 2026.
 * @see https://platform.openai.com/docs/assistants/migration
 */
interface ThreadsRunsStepsContract
{
    /**
     * Retrieves a run step.
     *
     * @see https://platform.openai.com/docs/api-reference/runs/getRunStep
     */
    public function retrieve(string $threadId, string $runId, string $stepId): ThreadRunStepResponse;

    /**
     * Returns a list of run steps belonging to a run.
     *
     * @see https://platform.openai.com/docs/api-reference/runs/listRunSteps
     *
     * @param  array<string, mixed>  $parameters
     */
    public function list(string $threadId, string $runId, array $parameters = []): ThreadRunStepListResponse;
}
