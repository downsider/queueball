<?php

namespace Lexide\QueueBall\Message;

/**
 *
 */
interface QueueMessageFactoryInterface
{

    /**
     * @param $message
     * @param $queueId
     * @return mixed
     */
    public function createMessage($message, $queueId);

} 
