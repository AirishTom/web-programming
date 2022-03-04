<?php
$cricket=array(array('Sachin tendulkar',50),
            array('Virat Kohli',46),
            array('M S Dhoni',45));
        ?>
<html>
    <table border="1"><tr><th>Name</th><th>Age</th></tr>
                        <tr><td><?php echo $cricket[0][0] ?></td><td><?php echo $cricket[0][1] ?></td></tr>
                        <tr><td><?php echo $cricket[1][0] ?></td><td><?php echo $cricket[1][1] ?></td></tr>
                        <tr><td><?php echo $cricket[2][0] ?></td><td><?php echo $cricket[2][1] ?></td></tr>
</table>
</html>
