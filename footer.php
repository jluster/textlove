    <footer class="footer">
      <div class="pure-menu pure-menu-horizontal pure-menu-open">
        <?php wp_nav_menu( array( 'theme_location' => 'bottom-menu', 'container' => 'false' ) ); ?>
      </div>
      <div class="credits">
        Made with <a href="/textlove/">textlove</a> in Frankfurt am Main, Germany
        - &copy <a href="/who-i-am-and-what-this-is/">1999-2013 Jonas M Luster</a> 
      </div>
    </footer>
  </div>
</div>
</div>
<?php wp_footer(); ?>
  <?php if(!is_user_logged_in()): ?>
  <script>
    var _gaq = _gaq || [];
    setTimeout("_gaq.push(['_trackEvent', '15_seconds', 'read'])",15000);
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-9309357-13', 'jml.is');
    ga('send', 'pageview');

  </script>

  <!-- Piwik -->
  <script type="text/javascript"> 
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u=(("https:" == document.location.protocol) ? "https" : "http") + "://admin.jml.is/piwik//";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', 1]);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
      g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();

  </script>
  <noscript><p><img src="http://admin.jml.is/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
  <!-- End Piwik Code -->
  <?php endif; ?>
</body>
</html>