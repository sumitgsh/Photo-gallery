
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Kevin Skoglund</div>
</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>