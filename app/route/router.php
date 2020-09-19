<?php
class Router
{
    public static function parse($url, $request)
    {
        $url = trim($url);

        /**
         * /mvcpattern/ - fő mappára át kell írni
         */
        if($url == "/mvcpattern/")
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = "data";
        }
        else
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = "data";
        }
    }
}
?>