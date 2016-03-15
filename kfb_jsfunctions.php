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
            
            DebugAlert("Unable to get cookie: " + cname,debug);
            return;
        }


        function SetTheme(ThemeFileName)
        {
            DebugAlert("Setting theme to: " + ThemeFileName, debug);
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


        function ChangeThemes(value)
        {
            debug=false;
            //var h = document.getElementsByTagName('head').item(0);
            //var s = document.createElement("link");
            //s.type = "text/css";
            //s.appendChild(document.createTextNode("href=\"test.css\ rel=\"stylesheet\""));
            //h.appendChild(s);
            var cssfile = "";
            var cssId = "";
            DebugAlert("ChangeThemes:: value=" + value, debug);

            if (value == "custom-1")
            {
                cssfile = 'kfb_style.css';
                cssId = value;
                $("link[href='neal.css']").remove();
                SetTheme(cssfile);

                return;
            }

            if (value == "custom-2")
            {
                //DebugAlert("ChangeThemes:: Changing them to 'neal.css'", debug);
                cssfile = 'kfb_style_2.css';
                cssId = value;
                $("link[href='kfb_style.css']").remove();
                $("link[href='neal.css']").remove();
                SetTheme(cssfile);

                return;
            }

            if (value == "custom-3")
            {
                cssfile = 'kfb_style_3.css';
                cssId = value;
                SetTheme(cssfile);

                return;
            }

            if (value == "custom-4")
            {
                cssfile = 'kfb_style_4.css';
                cssId = value;
                SetTheme(cssfile);

                return;
            }
            if (value == "custom-5")
            {
                cssfile = 'neal.css';
                cssId = value;
                SetTheme(cssfile);

                return;
            }

            DebugAlert("ChangeThemes:: cssfile=" + cssfile, debug);

            //var cssId = 'myCss';  // you could encode the css path itself to generate id..
            //if (!document.getElementById(cssId))
            if (value!="")
            {

                DebugAlert("ChangeThemes:: SetTheme('" + cssfile + "');",true );
                // $(document).ready(function(){
                //$("#msgid").html("This is Hello World by JQuery " + value );
                //});
                // $('link[id=myCss2]').remove();
                //$('link[id=myCss1]').remove();
                $("link[href='kfb_style.css']").remove();
                //$("link['kfb_style.css']");
                //$('link[rel=stylesheet][href="test.css"]').remove();
                //$('link[rel=stylesheet][href="test2.css"]').remove();
                //$("link[href='test.css']").prop('disabled', true);
                //$("link[href='test2.css']").prop('disabled', true);
                //var head  = document.getElementsByTagName('head')[0];
                //var link  = document.createElement('link');
                //link.id   = cssId;
                //link.rel  = 'stylesheet';
                //link.type = 'text/css';
                //link.href = cssfile;
                //link.media = 'all';
                //head.appendChild(link);
                //cssId ="";
                //cssfile = 'kfb_style.css';
                DebugAlert("ChangeThemes:: SetTheme('" + cssfile + "');",debug );
                SetTheme(cssfile);
            }
        }

		
		</script>