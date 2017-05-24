<?php
declare(strict_types=1);

namespace Genkgo\Mail\Header;

use Genkgo\Mail\HeaderInterface;

final class Subject implements HeaderInterface
{
    /**
     * @var string
     */
    private $subject;

    /**
     * From constructor.
     * @param string $subject
     */
    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return HeaderName
     */
    public function getName(): HeaderName
    {
        return new HeaderName('Subject');
    }

    /**
     * @return HeaderValue
     */
    public function getValue(): HeaderValue
    {
        return new HeaderValue($this->subject);
    }
}