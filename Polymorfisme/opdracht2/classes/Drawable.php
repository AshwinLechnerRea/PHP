<?php
abstract class Figure
{
    protected int $x;
    protected int $y;
    protected string $color;

    public function __construct(int $x, int $y, string $color)
    {
        $this->x = $x;
        $this->y = $y;

        $this->color = $color;
    }
}
interface Drawable
{
    public function draw();
}
class Drwaing implements Drawable
{
    private int $height;
    private int $width;
    private array $figures;

    public function __construct(int $height, int $width, array $figures)
    {
        $this->height = $height;
        $this->width = $width;
        $this->figures = $figures;
    }
    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }
    function draw()
    {
        echo '<svg width="' . $this->width . '" height="' . $this->height . '">';
        foreach ($this->figures as $figure) {
            $figure->draw();
        }
        echo '</svg>';
    }
}
class Rectangle extends Figure

{
    private int $width;
    private int $height;
    public function __construct(int $x, int $y, int $width, int $height, string $color)
    {
        parent::__construct($x, $y, $color);
        $this->width = $width;
        $this->height = $height;
    }

    function draw()
    {
        echo '<rect x="' . $this->x . '" y="' . $this->y . '" width="' . $this->width . '" height="' . $this->height . '" fill="' . $this->color . '"></rect>';
    }
}
class Ellipse extends Figure
{
    private int $rx;
    private int $ry;
    public function __construct(int $x, int $y, int $rx, int $ry, string $color)
    {
        parent::__construct($x, $y, $color);
        $this->rx = $rx;
        $this->ry = $ry;
    }
    public function draw()
    {
        echo '  <ellipse cx="' . $this->x . '" cy="' . $this->y . '" rx="' . $this->rx . '" ry="' . $this->ry . '" fill="' . $this->color . '" />';
    }
}