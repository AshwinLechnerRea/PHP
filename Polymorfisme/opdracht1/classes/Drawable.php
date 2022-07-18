<?php
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
    public function ddFigure(Rectangle $rectangle)
    {
        $this->figures[] = $rectangle;
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
class Rectangle implements Drawable
{
    private int $x;
    private int $y;
    private int $height;
    private int $width;
    private string $color;

    public function __construct(int $x, int $y,  int $width, int $height, string $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }
    function draw()
    {
        echo '<rect x="' . $this->x . '" y="' . $this->y . '" width="' . $this->width . '" height="' . $this->height . '" fill="' . $this->color . '"></rect>';
    }
}