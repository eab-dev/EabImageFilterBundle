<?php

namespace Eab\ImageFilterBundle\Imagine\Filter\Basic;
use Imagine\Image\BoxInterface;
use Imagine\Image\Point;

class BottomRight extends AbstractGravity
{
    /**
     * @var BoxInterface
     */
    private $box;

    /**
     * Constructs coordinate with size instance, it needs to be relative to
     *
     * @param BoxInterface $box
     */
    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return $this->box->getWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return $this->box->getHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getStartPoint(BoxInterface $box)
    {
        return new Point($this->getX() - $box->getWidth(), $this->getY() - $box->getHeight());
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint(BoxInterface $box)
    {
        return $this;
    }
}
