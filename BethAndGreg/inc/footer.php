  <footer class="powered-by-footer">
    <a href="http://www.idohq.com" id="ido-logo-in-footer">
      <img src="/images/ido@2x.png" alt="Powered by iDo" />
    </a>
    <div> <?php # Show only when debug info exists ?>
      <a href='#' id='heart' class='heart'>❤</a>
    </div>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="/js/global-ck.js"></script>
   
  <?php # Only use rsvp-ck.js on rsvp pages (themes/rsvp.aspx & website.aspx)
  function curPageName() {
   return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
  if (curPageName() == "rsvp.php")
    echo "<script src='/js/rsvp-ck.js'></script>";
  ?>
  
</body>

</html>