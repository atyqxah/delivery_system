
 <script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>

<?php
 echo 'You have been logging out';
 header('Refresh: 2; URL = ../savory/index.html');
?>