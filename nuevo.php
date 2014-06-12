<?php
class HtmlElement
{
	protected $tag;
	protected $content;
	protected $attributes;

	public function __construct($tag, $attributes=[],$content=null)
	{
		$this -> tag = $tag;
		$this -> content = $content;
		$this -> attributes = $attributes;
	}
	
	public function __call($name, $arguments)
	{
		if('render' === $name)
			{
				$html = printf(
				'<%s %s> %s </%s>',
				$this->tag,
				implode('=', $this->attributes),
				$this->content,
				$this->tag);
				return $html;
			}
		
		
		//var_dump($name);
		//var_dump($arguments);
	}
	
	public function __get($property)
	{
		if ('tag'=== $property)
			{
				return $this->tag;
			}
	}
	
	
}

$link = new HtmlElement('a', ['href' => 'http://www.google.com.mx'], 'Google');

echo $link->render(['class' => 'important-link']);
echo $link->tag;
?>
//<a href="http://www.google.com.mx">google</a>
//<span>Nombre</span>
//<br>
