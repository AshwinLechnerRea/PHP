<?php
class Cell
{
	private string $content;

	public function __construct(string $content)
	{
		$this->content = $content;
	}

	public function draw()
	{
		echo '<td>' . $this->content . '</td>';
	}
}
class StrongCell extends Cell
{
	private string $content;

	public function __construct(string $content)
	{
		$this->content = $content;
	}

	public function draw()
	{
		echo '<td><strong>' . $this->content . '</strong></td>';
	}
}
class UnderlineCell extends Cell
{
	private string $content;

	public function __construct(string $content)
	{
		$this->content = $content;
	}

	public function draw()
	{
		echo '<td><u>' . $this->content . '</u></td>';
	}
}
class StrikethroughCell extends Cell
{
	private string $content;

	public function __construct(string $content)
	{
		$this->content = $content;
	}

	public function draw()
	{
		echo '<td><s>' . $this->content . '</s></td>';
	}
}
class EmphasisCell extends Cell
{
	private string $content;

	public function __construct(string $content)
	{
		$this->content = $content;
	}

	public function draw()
	{
		echo '<td><em>' . $this->content . '</em></td>';
	}
}