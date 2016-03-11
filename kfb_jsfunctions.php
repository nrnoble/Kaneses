		<script type="text/javascript">
        
        function DebugAlert(msg,debug)
        {
            if (debug)
            {
                alert (msg);
            }
        }
        
        function setCookie(CookieName, cookieValue)
        {
            DebugAlert("setCookie:: CookieName=" +  CookieName +   "; Theme name is: " + cookieValue,debug);
            var cookie = CookieName + "=" + cookieValue + "; expires=Sat, 31 Dec 2016 12:00:00 UTC";
            DebugAlert("setCookie:: The cookie being set is: " + cookie, debug);
            document.cookie = cookie;
            DebugAlert("setCookie:: Debug Checking '" + CookieName + "' value: " + "getCookie('" + CookieName + "')) = " + getCookie(CookieName),debug);
            
        }

        function getCookie(cname)
        {
            var name = cname + "=";
            //alert("Debug. The entire cookie is: " + document.cookie);
            DebugAlert ("getCookie:: cname=" + cname,debug);
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++)
            {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0)
                {
                    DebugAlert("getCookie:: returning: " + c.substring(name.length,c.length),debug);
                    return c.substring(name.length,c.length);
                }
            }
            
            DebugAlert("getCookie:: returning: Opppps",debug);
            return "Oppps";
        }
        
        function SetTheme(ThemeFileName)
        {
            //alert("Setting theme to: " + ThemeFileName);
            var head  = document.getElementsByTagName('head')[0];
            var link  = document.createElement('link');
            link.id   = ThemeFileName;
            link.rel  = 'stylesheet';
            link.type = 'text/css';
            link.href = ThemeFileName;
            link.media = 'all';
            head.appendChild(link);
            DebugAlert ("ThameFileName="+ThemeFileName,debug);
            setCookie("Theme",ThemeFileName);
            cssId ="";
        }
		
		</script>