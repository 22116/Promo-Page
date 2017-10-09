<?php

namespace App\Models\University;

use Illuminate\Support\Collection;

class Section
{
	private $href;
	private $text;
	private $active;
	private $content;

	public function __construct(string $href, string $text, string $content, bool $active)
	{
		$this->href = $href;
		$this->text = $text;
		$this->content = $content;
		$this->active = $active;
	}

	public function updateContent(string $content) :void   { $this->content = $content; }
	public function updatelink(string $link) :void         { $this->href = $link; }
	public function updateText(string $text) :void         { $this->text = $text; }
	public function updateActiveStatus(bool $active) :void { $this->active = $active; }
	public function getContent(): string                   { return $this->content; }
	public function getHref(): string                      { return $this->href; }
	public function getText(): string                      { return $this->text; }
	public function isActive(): bool                       { return $this->active; }

	public function build() :Collection
	{
		return new Collection([
			'href' => $this->href,
			'text' => $this->text,
			'active' => $this->active,
			'content' => $this->content
		]);
	}
}