<?php
namespace Ratchet;

use http\Env\Request;
use HttpRequest;

/**
 * The version of Ratchet being used
 * @var string
 */
const VERSION = 'Ratchet/0.4.4';

/**
 * A proxy object representing a connection to the application
 * This acts as a container to store data (in memory) about the connection
 */
interface ConnectionInterface {
    /**
     * Send data to the connection
     * @param  string $data
     * @return \Ratchet\ConnectionInterface
     */
    function send($data);

    /**
     * Close the connection
     */
    function close();

    /**
     * Get the internal id of the connection
     * @return string
     */
    public function getResourceId();

    /**
     * Get the Request of the incoming connection
     */
    public function getHttpRequest();
}
