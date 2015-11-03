<?php

namespace Eab\ImageFilterBundle\Imagine\Filter\Basic;
use Imagine\Image\BoxInterface;
use Imagine\Image\Point;

class TopMiddle extends AbstractGravity
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
        return ceil($this->box->getWidth() / 2);
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartPoint(BoxInterface $box)
    {
        return new Point($this->getX() - ($box->getWidth() / 2), $this->getY());
    }

    /**
     * {@inheritdoc}
     */
    public function getEndPoint(BoxInterface $box)
    {
        return new Point($this->getX(), $this->getY() + $box->getHeight());
    }
}
