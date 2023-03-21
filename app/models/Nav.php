<?php
class Nav
{
    private array $pages;

    public function __construct(array $pages) {
        $this->pages = $pages;
    }

    public function getPages() : array {
        return $this->pages;
    }
}
?>