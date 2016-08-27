<!doctype html><html>    <head>        <title>Zebra_Pagination, database example</title>        <meta charset="utf-8">        <?php if (isset($_GET['bootstrap']) && $_GET['bootstrap'] == 1):?>        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">        <?php else:?>        <link rel="stylesheet" href="../public/css/zebra_pagination.css" type="text/css">        <?php endif?>        <link rel="stylesheet" href="style.css" type="text/css">    </head>    <body>        <h2>Zebra_Pagination, database example</h2>        <p>For this example, you need to first import the <strong>countries.sql</strong> file from the examples folder        and to edit the <strong>example2.php file and change your database connection related settings.</strong></p>                <p>Show next/previous page links on the <a href="example2.php?navigation_position=left">left</a> or on the        <a href="example2.php?navigation_position=right">right</a>. Or revert to the <a href="example2.php">default style</a>.<br>        Pagination links can be shown in <a href="example2.php">natural</a> or <a href="example2.php?direction=reversed">reversed</a> order.<br>        See the <a href="example2.php">default</a> looks or with <a href="example2.php?bootstrap=1">Bootstrap</a><br>        <em>(when using Bootstrap you don't need to include the zebra_pagination.css file anymore)</em></p>        <?php        // database connection details        $MySQL_host     = 'localhost';        $MySQL_username = 'root';        $MySQL_password = '8902345jmcr';        $MySQL_database = 'countries';        $con = mysqli_connect($MySQL_host, $MySQL_username, $MySQL_password, $MySQL_database);       // Check connection       if (mysqli_connect_errno()) {          echo "Failed to connect to MySQL: " . mysqli_connect_error();        }        // how many records should be displayed on a page?        $records_per_page = 10;        // include the pagination class        require '/php/zebra/Zebra_Pagination.php';        // instantiate the pagination object        $pagination = new Zebra_Pagination();        // set position of the next/previous page links        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');        // the MySQL statement to fetch the rows        // note how we build the LIMIT        // also, note the "SQL_CALC_FOUND_ROWS"        // this is to get the number of rows that would've been returned if there was no LIMIT        // see http://dev.mysql.com/doc/refman/5.0/en/information-functions.html#function_found-rows        $MySQL = '            SELECT                SQL_CALC_FOUND_ROWS                country            FROM                countries            ORDER BY                country            LIMIT                ' . (($pagination->get_page() - 1) * $records_per_page) . ', ' . $records_per_page . '        ';        // if query could not be executed        if (!($result = @mysqli_query($MySQL))):            // stop execution and display error message            die (mysqli_error($result));        endif;        // fetch the total number of records in the table        $rows = mysqli_fetch_assoc(mysqli_query('SELECT FOUND_ROWS() AS rows'));        // pass the total number of records to the pagination class        $pagination->records($rows['rows']);        // records per page        $pagination->records_per_page($records_per_page);        ?>        <table class="countries" border="1">        	<tr><th>Country</th></tr>            <?php $index = 0?>            <?php while ($row = mysqli_fetch_assoc($result)):?>            <tr<?php echo $index++ % 2 ? ' class="even"' : ''?>>                <td><?php echo $row['country']?></td>            </tr>            <?php endwhile?>        </table>        <div class="text-center">        <?php        // render the pagination links        $pagination->render();        ?>        </div>    </body></html>