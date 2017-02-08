<?php
/**
 * Part of the evias/php-nem-laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    evias/php-nem-laravel
 * @version    0.0.2
 * @author     Grégory Saive <greg@evias.be>
 * @license    MIT License
 * @copyright  (c) 2017, Grégory Saive <greg@evias.be>
 * @link       http://github.com/evias/php-nem-laravel
 */
namespace evias\NEMBlockchain\Handlers;

use Unirest\Request;
use evias\NEMBlockchain\Contracts\HttpHandler;

/**
 * This is the UnirestHttpHandler class
 *
 * @author Grégory Saive <greg@evias.be>
 */
class UnirestHttpHandler
    implements HttpHandler
{
    /**
     * Constructor for a new NEMBlockchain\API instance.
     */
    public function __construct()
    {
    }

    /**
     * This method triggers a GET request to the given
     * URI using the Unirest Request class.
     *
     * @see  \evias\NEMBlockchain\Contracts\HttpHandler
     * @param  string $uri     [description]
     * @param  array  $params  [description]
     * @param  array  $headers [description]
     * @return [type]          [description]
     */
    public function get($uri, array $params = [], array $headers = [])
    {

    }

    /**
     * This method triggers a POST request to the given
     * URI using the Unirest Request class.
     *
     * @see  \evias\NEMBlockchain\Contracts\HttpHandler
     * @param  string $uri     [description]
     * @param  array  $params  [description]
     * @param  array  $headers [description]
     * @return [type]          [description]
     */
    public function post($uri, array $params = [], array $headers = [])
    {

    }
}
