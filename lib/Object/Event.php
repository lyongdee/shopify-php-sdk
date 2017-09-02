<?php
/**
 *
 * Shopify\Object\Event
 *
 * Events are generated by specific Shopify resources when specific things happen,
 * such as the creation of an article, the placement or fulfillment of an order,
 * the addition or deletion of a product, and so on. By requesting events, your
 * app can get a "log" of important occurrences in the operation of a shop
 *
 * MIT License
 *
 * Copyright (c) Rob Wittman
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @package Shopify
 * @author Rob Wittman <rob@ihsdigital.com>
 * @license MIT
 */
namespace Shopify\Object;

use Shopify\Concerns\HasTimestamps;
use Shopify\Concerns\HasId;

class Event extends AbstractObject
{
    use HasTimestamps,
        HasId;

    public static function getApiHandle()
    {
        return 'events';
    }
    
    /**
     * Refers to a certain event and its resources.
     * @var string
     */
    protected $arguments;

    /**
     * A text field containing information about the event.
     * @var string
     */
    protected $body;

    /**
     * This property will be deprecated on March 1, 2017. Human readable text
     * that describes the event.
     * @deprecated
     * @var string
     */
    protected $description;

    /**
     * A relative URL to the resource the event is for (may be null)
     * @var string
     */
    protected $path;

    /**
     * Human readable text that describes the event (may contain limited HTML formatting).
     * @var string
     */
    protected $message;

    /**
     * The id of the resource that generated the event.
     * @var string
     */
    protected $subject_id;

    /**
     * The type of the resource that generated the event.
     * @param string
     */
    protected $subject_type;

    /**
     * The type of event that took place. Different resources generate different
     * types of event; see Resources and their event verbs and messages (below)
     * for details.
     * @param string
     */
    protected $verb;

    public function getArguments()
    {
        return $this->get('arguments');
    }

    public function setArguments($arguments)
    {
        $this->set('arguments', $arguments);
        return $this;
    }

    public function getBody()
    {
        return $this->get('body');
    }

    public function setBody($body)
    {
        $this->set('body', $body);
        return $this;
    }

    public function getDescription()
    {
        return $this->get('description');
    }

    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }

    public function getPath()
    {
        return $this->get('path');
    }

    public function setPath($path)
    {
        $this->set('path', $path);
        return $this;
    }

    public function getMessage()
    {
        return $this->get('message');
    }

    public function setMessage($message)
    {
        $this->set('message', $message);
        return $this;
    }

    public function getSubjectId()
    {
        return $this->get('subject_id');
    }

    public function setSubjectId($subject_id)
    {
        $this->set('subject_id', $subject_id);
        return $this;
    }

    public function getSubjectType()
    {
        return $this->get('subject_type');
    }

    public function setSubjectType($subject_type)
    {
        $this->set('subject_type', $subject_type);
        return $this;
    }

    public function getVerb()
    {
        return $this->get('verb');
    }

    public function setVerb($verb)
    {
        $this->set('verb', $verb);
        return $this;
    }
}