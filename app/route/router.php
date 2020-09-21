<?php
class Router
{
    public static function parse($url, $request)
    {
        $url = trim($url);

        $domain = "/SZFM_2020_10_SZFM-Weboldal/app/";

        /**
         * /mvcpattern/ - fő mappára át kell írni
         */
        if($url == $domain)
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

        if($url == $domain . 'login')
        {
            $request->controller = "Login";
            $request->action = "index";
            $request->params = "data";
        }
        if($url == $domain . 'loginvalidation')
        {
            $request->controller = "Login";
            $request->action = "authentication";
            $request->params = [$_POST['email'], $_POST['pwd']];
        }


    }
}
?>