<html>
    <head>

    </head>

    <body>

        <h2>Show all jobs</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <input type="submit" name="AllTuples"></p>
        </form>

        <!-- insert1 -->
        <hr/>
        <h2>Post a new job</h2>
        <form method="POST" action="handlerinsert1.php"> 
            <input type="hidden" id="insertQueryRequest1" name="insertQueryRequest1">

            jobID: <input type="text" name="jobID"> <br /><br />
            Industry: <input type="text" name="insdutry"> <br /><br />
            Job name: <input type="text" name="jobName"> <br /><br />
            Post date: <input type="text" name="postDate"> <br /><br />
            End date: <input type="text" name="endDate"> <br /><br />
            Employer Email: <input type="text" name="email"> <br /><br />

            <input type="submit" value="Post a new job" name="insertSubmit1">
        </form>

        <!-- insert2 -->
        <hr/>
        <h2>Apply for a job</h2>
        <form method="POST" action="handlerinsert2.php"> 
            <input type="hidden" id="insertQueryRequest2" name="insertQueryRequest2">

            jobID: <input type="text" name="jobID"> <br /><br />
            appID: <input type="text" name="appID"> <br /><br />
            Intro: <input type="text" name="intro"> <br /><br />
            Email: <input type="text" name="email"> <br /><br />

            <input type="submit" value="Apply" name="insertSubmit2">
        </form>

        <!-- update -->
        <hr/>
        <h2>Update personal information</h2>
        <form method="POST" action="handleUpdate.php"> <!--refresh page when submitted-->

            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            Email <input type="text" name="email"> <br /><br /><br /><br /><br /><br />
            Phone: <input type="text" name="phone"> <br /><br />
            Username: <input type="text" name="userName"> <br /><br />
            Password: <input type="text" name="password"> <br /><br />

        <input type="submit" value="Update" name="updateSubmit"></p>
        </form>

        <!-- delete -->
        <hr/>
        <h2>Delete a job</h2>
        <form method="POST" action="handlerdelete.php"> 
            <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
            
            jobID: <input type="text" name="jobID"> <br /><br />
            Email: <input type="text" name="email"> <br /><br />

            <input type="submit" value="Delete" name="deleteSubmit">
        </form>

        <!-- selection -->
        <hr/>
        <h2>View all the jobs posted by:</h2>
        <form method="POST" action="handlerSelection.php"> 
            <input type="hidden" id="selectQueryRequest" name="selectQueryRequest">
            Employer email: <input type="text" name="email"> <br /><br />
            <input type="submit" value="View the jobs the user posted" name="selectSubmit">
        </form>
        <hr/>

        <!-- projection -->
        <h2>View all our users</h2>
        <br />
        <form method="POST" action="handlerprojection.php"> 
        <!-- <input type="hidden" id="insertQueryRequest" name="insertQueryRequest"> -->
        <input type="checkbox" id="vehicle1" name="vehicle1" value="email">
        <label for="vehicle1"> Email </label><br>

        <input type="checkbox" id="vehicle2" name="vehicle2" value="phone">
        <label for="vehicle2"> Phone </label><br>

        <input type="checkbox" id="vehicle3" name="vehicle3" value="userName">
        <label for="vehicle3"> Username </label><br>

        <input type="submit"  name="insertProjection"> 

        </form>
        <hr/>

        <!-- join -->
        <h2>Find all applicants to a job</h2>
        <form method="POST" action="handlerjoin.php"> 
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            jobID: <input type="text" name="jobID"> <br /><br />
            <input type="submit" name="insertJoin">    
        </form>
        <hr/>

        <!-- division -->
        <h2>View the applicants of all jobs</h2>
        <form method="POST" action="handlerdivision.php"> 
        <input type="submit" value="Check" name="insertDiv"> 
        </select>
        </form>
        <hr/>

        <!-- aggregation with group by -->
        <h2><h2>View jobs that have applicants</h2></h2>
        <br />
        <form method="POST" action="handlerGroupby.php"> 
        <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
        <select id="insGroupby" name="insGroupbyTable">
        <option value="count">Count</option>
        <input type="submit"  name="insertGB"> 
        </select>
        </form>
        <hr/>

        <!-- aggregation with group by & having -->
        <h2>View jobs that have no fewer than some applicants</h2>
        <br />
        <form method="POST" action="handlerHaving.php"> 
        <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
        Number of applicants: <input type="text" name="number"> <br /><br />
        <input type="submit"  name="insertHav"> 
        </form>
        <hr/>

        <!-- nested aggregation -->
        <h2>View the latest jobs and the number of their applicants</h2>
        <br />
        <form method="POST" action="handlerNested.php"> 
        <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
        <select id="insNested" name="insNestedTable">
        <option value="count">Count</option>
        <input type="submit"  name="insertNest"> 
        </select>

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
            echo "<br>All the jobs:<br>";
            echo "<table>";
            echo "<tr><th>jobID</th><th>Industry</th><th>Job name</th><th>Post date</th><th>End date</th><th>Employer email</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["jobID"] . "</td><td>" . $row["industry"] . "</td><td>" . $row["jobName"] . "</td><td>" . $row["postDate"] . "</td><td>" . $row["endDate"] . "</td><td>" . $row["email"] . "</td></tr>"; //or just use "echo $row[0]"
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
            $db_conn = OCILogon("ora_rxluo", "a65659203", "dbhost.students.cs.ubc.ca:1522/stu");

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
            echo printResult($result);
        }

        function handleGETRequest() {
            if (connectToDB()) {
                if(array_key_exists('AllTuples', $_GET)) {
                    handleCountRequest();
                }

                disconnectFromDB();
            }
        }


		// if (isset($_POST['insertSubmit'])){
        //     handlePOSTRequest();
        // } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        // }

    ?>

</html>
