<?

function view_page ($page, $vars= array())
{

foreach($vars as $key=>$name)
{
$$key = $name;

}
ob_start();
include $page;

return ob_get_clean();

}




?>