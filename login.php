<?php

include("header.php");

?>


<form action="handleLogin.php" method="post">

<input type="text" placeholder="Username" name="username" />
<input type="password" placeholder="Password" name="password" />
<input type="submit" value="logga in" />

</form>


<?php

include("footer.php");

?>