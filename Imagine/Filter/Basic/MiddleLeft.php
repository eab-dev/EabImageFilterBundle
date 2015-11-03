<?php

namespace Eab\ImageFilterBundle\Imagine\Filter\Basic;
use Imagine\Image\BoxInterface;
use Imagine\Image\Point;

class MiddleLeft extends AbstractGravity
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
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return ceil($this->box->getHeight() / 2);
    }

    /**
     * {@inheritdoc}
     */
    public function getStartPoint(BoxInterface $box)
    {
        return new Point($this->getX(), $this->getY() - ($box->getHeight() / 2));
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint(BoxInterface $box)
    {
        return new Point($this->getX() + $box->getWidth(), $this->getY());
    }
}
