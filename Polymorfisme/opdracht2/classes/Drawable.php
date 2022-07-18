<?php
abstract class Figure
{
    protected int $x;
    protected int $y;
    protected int $height;
    protected int $width;
    protected string $color;

    public function __construct(int $x, int $y,  int $width, int $height, string $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
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
    function draw()
    {
        echo '<rect x="' . $this->x . '" y="' . $this->y . '" width="' . $this->width . '" height="' . $this->height . '" fill="' . $this->color . '"></rect>';
    }
}
class Ellipse extends Figure
{
    public function draw()
    {
        echo '  <ellipse cx="100" cy="50" rx="100" ry="50" />';
    }
}