<?php
/**
 * Pushy: Pushover PHP Client
 *
 * @author    Michael Squires <sqmk@php.net>
 * @copyright Copyright (c) 2013 Michael K. Squires
 * @license   http://github.com/sqmk/Pushy/wiki/License
 */

namespace Pushy\Priority;

/**
 * Emergency Priority
 */
class EmergencyPriority extends AbstractPriority
{
    /**
     * Priority code
     */
    const CODE = 2;

    /**
     * Retry period in seconds
     *
     * @var int
     */
    protected $retry = 30;

    /**
     * Expires in seconds
     *
     * @var int
     */
    protected $expire = 86400;

    /**
     * Callback URL
     *
     * @var string
     */
    protected $callback;

    /**
     * Get retry
     *
     * @return int Seconds
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * Set retry
     *
     * @param int $seconds Seconds
     *
     * @return self This object
     */
    public function setRetry($seconds)
    {
        $this->retry = (int) $seconds;

        return $this;
    }

    /**
     * Get expire
     *
     * @return int Seconds
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set expire
     *
     * @param int $seconds Seconds
     *
     * @return self This object
     */
    public function setExpire($seconds)
    {
        $this->expire = (int) $seconds;

        return $this;
    }

    /**
     * Get callback
     *
     * @return string Callback URL
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set callback URL
     *
     * @param string $url Callback URL
     */
    public function setCallback($url)
    {
        $this->callback = (string) $url;

        return $this;
    }

    /**
     * Get API parameters.
     *
     * @return array Parameter list.
     */
    public function getApiParameters()
    {
        return [
            'priority' => $this->getCode(),
            'retry'    => $this->getRetry(),
            'expire'   => $this->getExpire(),
            'callback' => $this->getCallback(),
        ];
    }
}
