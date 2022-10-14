

<div style="...">
    <div class="float-left">
        <p>
            <a href="/crud/index.php?task=report">All Students  |  </a>
            <a href="/crud/index.php?task=add">Add New Students  |  </a>
            <a href="/crud/index.php?task=seed">Seed </a>
        </p>
    </div>
    <div class="float-right">
        <?php
            if(!$_SESSION['loggedin']):
        ?>
        <a href="/crud/auth.php">Log In</a>
        <?php
            else:
        ?>
        <a href="/crud/auth.php?logout=true">Log Out (<?php echo $_SESSION['role']; ?>)</a>
        <?php
            endif;
        ?>
    </div>
<p></p>

</div>
