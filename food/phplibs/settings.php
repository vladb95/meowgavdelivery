<?PHP
function phrase($str)
{
return iconv("windows-1251", "UTF-8", $str);
}
?>