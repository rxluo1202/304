<html>
    <head>

    </head>

    <body>
        
        <h2>Go back</h2>
        <form method="GET" action="mini-linkedin.php">
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <input type="submit" name="AllJobs"></p>
        </form>
        <hr/>

	</body>

    <?php

        $success = True;
        $db_conn = NULL; 
        $show_debug_alert_messages = False;

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

            return $statement;
        }


        function printResult($result) {
            echo "<br>Jobs & Count of applications:<br>";
            echo "<table>";
            echo "<tr><th>jobID</th><th>Count</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function console_log( $data ) {
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            // $db_conn = OCILogon("ora_rxluo", "a65659203", "dbhost.students.cs.ubc.ca:1522/stu");
            $db_conn = OCILogon("ora_echo1203", "a43994375", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT* FROM Jobs_Posts");
            // var_dump($result);
            echo printResult($result);

            // $result = executePlainSQL("SELECT Count(*) FROM Jobs_Posts");

            // if (($row = oci_fetch_row($result)) != false) {
            //     echo "<br> The number of tuples in the table: " . $row[0] . "<br>";
            // }
        }

        function handleGBRequest() {
            global $db_conn;

            //employer email
            $email = $_POST['email'];

            $result = executePlainSQL("SELECT Applications_For.jobID, COUNT(*) FROM Applications_For, Jobs_Posts WHERE Applications_For.jobID = Jobs_Posts.jobID AND Jobs_Posts.email = '" . $email . "' GROUP BY Applications_For.jobID");
            $numRows = oci_num_rows($result);
            if ($numRows == 0) {
                echo "No such jobs and applications found!";
                // or you can use other methods to generate an alert such as JavaScript alert or a log file entry
            } else {
                echo printResult($result);
                OCICommit($db_conn);
            }
        }

        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('AllJobs', $_GET)) {
                    handleCountRequest();
                }

                disconnectFromDB();
            }
        }

        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('GBQueryRequest', $_POST)) {
                    handleGBRequest();
                }

                disconnectFromDB();
            }
        }

        if (isset($_POST['insertGB'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        }

    ?>

</html>
