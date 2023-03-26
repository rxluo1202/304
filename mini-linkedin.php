<html>
    <head>

    </head>

    <body>
        
        <h2>Initialization</h2>
        <p>If you wish to reset the table press on the reset button. If this is the first time you're running this page, you MUST use reset</p>
        <form method="POST" action="mini-linkedin.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset" name="reset"></p>

        </form>
        <form method="POST" action="mini-linkedin.php">
            <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
            <input type="hidden" id="insertTablesRequest" name="insertTablesRequest">
            <p><input type="submit" value="Insert some data" name="insert"></p>

        </form>

        <hr />

        <h2>Jobs & Applications</h2>
        <form method="GET" action="mini-linkedin.php">
            <input type="hidden" id="countTupleRequest1" name="countTupleRequest1">
            <input type="submit" value="View All Jobs" name="AllJobs"></p>
        </form>
        <form method="GET" action="mini-linkedin.php">
            <input type="hidden" id="countTupleRequest2" name="countTupleRequest2">
            <input type="submit" value="View All Applications" name="AllApplications"></p>
        </form>
        <hr/>

        <h2>Employers & Employees</h2>
        <form method="GET" action="mini-linkedin.php">
            <input type="hidden" id="countTupleRequest3" name="countTupleRequest3">
            <input type="submit" value="View Employers" name="Employers"></p>
        </form>
        <form method="GET" action="mini-linkedin.php">
            <input type="hidden" id="countTupleRequest4" name="countTupleRequest4">
            <input type="submit" value="View Employees" name="Employees"></p>
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

        <!-- insert3 -->
        <hr/>
        <h2>Enter personal information</h2>
        <form method="POST" action="handlerinsert3.php"> <!--refresh page when submitted-->

            <input type="hidden" id="insertQueryRequest3" name="insertQueryRequest3">
            Email: <input type="text" name="email"> <br /><br />
            Phone: <input type="text" name="phone"> <br /><br />
            Username: <input type="text" name="userName"> <br /><br />
            Password: <input type="text" name="password"> <br /><br />
            <input type="radio" id="employer" name="role" value="employer">
            <label for="employer">Employer</label>
            <input type="radio" id="employee" name="role" value="employee">
            <label for="employee">Employee</label>

        <input type="submit" value="Register" name="insertSubmit3"></p>
        </form>

        <!-- update -->
        <hr/>
        <h2>Update personal information</h2>
        <form method="POST" action="handleUpdate.php"> <!--refresh page when submitted-->

            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            Email <input type="text" name="email"> <br /><br />
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
            <input type="submit" name="selectSubmit">
        </form>
        <hr/>

        <!-- projection -->
        <h2>View all our users</h2>
        <form method="POST" action="handlerprojection.php"> 
        <!-- <input type="hidden" id="insertQueryRequest" name="insertQueryRequest"> -->
        <input type="checkbox" id="vehicle1" name="vehicle1" value="email">
        <label for="vehicle1"> Email </label><br>

        <input type="checkbox" id="vehicle2" name="vehicle2" value="phone">
        <label for="vehicle2"> Phone </label><br>

        <input type="checkbox" id="vehicle3" name="vehicle3" value="userName">
        <label for="vehicle3"> Username </label><br>
        <br/>
        <input type="submit"  name="insertProjection"> 

        </form>
        <hr/>

        <!-- join -->
        <h2>View all applicants to a job</h2>
        <form method="POST" action="handlerjoin.php"> 
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            jobID: <input type="text" name="jobID"> <br /><br />
            <input type="submit" name="insertJoin">    
        </form>
        <hr/>

        <!-- division -->
        <h2>View the applicants of all jobs</h2>
        <form method="POST" action="handlerdivision.php"> 
        <input type="submit" name="insertDiv"> 
        </select>
        </form>
        <hr/>

        <!-- aggregation with group by -->
        <h2><h2>View jobs that have applicants</h2></h2>
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
        <form method="POST" action="handlerHaving.php"> 
        <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
        Number of applicants: <input type="text" name="number"> <br /><br />
        <input type="submit"  name="insertHav"> 
        </form>
        <hr/>

        <!-- nested aggregation -->
        <h2>View the latest jobs and the number of their applicants</h2>
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

        function printResult1($result) {
            echo "<br>All jobs:<br>";
            echo "<table>";
            echo "<tr><th>jobID</th><th>Industry</th><th>Job name</th><th>Post date</th><th>End date</th><th>Employer email</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function printResult2($result) {
            echo "<br>All applications:<br>";
            echo "<table>";
            echo "<tr><th>appID</th><th>jobID</th><th>Intro</th><th>Applicant's email</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function printResult3($result) {
            echo "<br>All employers:<br>";
            echo "<table>";
            echo "<tr><th>Email</th><th>Phone</th><th>User name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function printResult4($result) {
            echo "<br>All employees:<br>";
            echo "<table>";
            echo "<tr><th>Email</th><th>Phone</th><th>User name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>"; //or just use "echo $row[0]"
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

        function handleCountRequest1() {
            global $db_conn;

            $result = executePlainSQL("SELECT* FROM Jobs_Posts");
            // var_dump($result);
            echo printResult1($result);

            // $result = executePlainSQL("SELECT Count(*) FROM Jobs_Posts");

            // if (($row = oci_fetch_row($result)) != false) {
            //     echo "<br> The number of tuples in the table: " . $row[0] . "<br>";
            // }
        }

        function handleCountRequest2() {
            global $db_conn;

            $result = executePlainSQL("SELECT Applications_Completes.appID, Applications_For.jobID, Applications_Completes.intro, Applications_Completes.email FROM Applications_For, Applications_Completes WHERE Applications_For.appID = Applications_Completes.appID");
            // var_dump($result);
            echo printResult2($result);
        }

        function handleCountRequest3() {
            global $db_conn;

            $result = executePlainSQL("SELECT Users.email, phone, userName FROM Users, Employers WHERE Users.email = Employers.email");

            echo printResult3($result);
        }

        function handleCountRequest4() {
            global $db_conn;

            $result = executePlainSQL("SELECT Users.email, phone, userName FROM Users, Employees WHERE Users.email = Employees.email");

            echo printResult4($result);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table
            executePlainSQL("DROP TABLE Applications_Completes");
            executePlainSQL("DROP TABLE Applications_For");
            executePlainSQL("DROP TABLE Jobs_Posts");            
            executePlainSQL("DROP TABLE Employers");
            executePlainSQL("DROP TABLE Employees");
            executePlainSQL("DROP TABLE Users");
        
            // Create new table
            echo "<br> Creating new tables... <br>";
            executePlainSQL("CREATE TABLE Users (email VARCHAR(255), phone VARCHAR(15) NOT NULL, userName VARCHAR(20), password VARCHAR(20), PRIMARY KEY (email), UNIQUE(phone))");
            executePlainSQL("CREATE TABLE Employers (email VARCHAR(255), FOREIGN KEY (email) REFERENCES Users(email) ON DELETE CASCADE)");
            executePlainSQL("CREATE TABLE Employees (email VARCHAR(255), FOREIGN KEY (email) REFERENCES Users(email) ON DELETE CASCADE)");
            executePlainSQL("CREATE TABLE Applications_Completes (appID INT, intro VARCHAR(500), email VARCHAR(255) NOT NULL, PRIMARY KEY (appID), FOREIGN KEY (email) REFERENCES Users(email) ON DELETE CASCADE)");
            executePlainSQL("CREATE TABLE Jobs_Posts (jobID INT, industry VARCHAR(50), jobName VARCHAR(25), postDate DATE, endDate DATE, email VARCHAR(255) NOT NULL, PRIMARY KEY (jobID), FOREIGN KEY (email) REFERENCES Users(email) ON DELETE CASCADE)");
            executePlainSQL("CREATE TABLE Applications_For (appID INT, intro VARCHAR(500), jobID INT NOT NULL, PRIMARY KEY (appID), FOREIGN KEY (jobID) REFERENCES Jobs_Posts(jobID) ON DELETE CASCADE)");
        
            OCICommit($db_conn);
        } 
        
        function handleInsertRequest() {
            global $db_conn;
        
            // Create new table
            echo "<br> Adding some data... <br>";
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('abcd@gmail.com', '19585406686', 'John Bill', 'od324sajsod')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('foo@gmail.com', '15230990864', 'Ajeet McCracken', 'fijsoi243')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('bar@gmail.com', '19021867676', 'Felix Samuel', 'ljtrew32')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('fefgh90@gmail.com', '12127733559', 'Arwel Ybarra', 'plljak_dk')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('blahblah@gmail.com', '13179122284', 'Niles Medved', 'euowe2sd')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('opiu@gmail.com', '17262331094', 'Perle Simonis', 'ololol78u')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('xyz@outlook.com', '17300984224', 'Kalyani Adkins', 'aoloejdp23')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('def@gmail.com', '10778044605', 'Felizitas Lyon', 'thasooft#s')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('ghi@gmail.com',  '16846966019', 'Martin Strong', 'dolspaslp')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('jkl@outlook.com', '14140999677', 'Serhii Brant', 'ha3lo4basko')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('mnk@gmail.com', '15796144755', 'Boniface Ikin', 'f33llik3dyin')");
            executePlainSQL("INSERT INTO Users (email, phone, userName, password) VALUES 
            ('row@gmail.com', '1951548476', 'Ajay Sinclair', 'n3noonslay33r')");
            
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('abcd@gmail.com')");
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('foo@gmail.com')");
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('bar@gmail.com')");
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('fefgh90@gmail.com')");
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('blahblah@gmail.com')");
            executePlainSQL("INSERT INTO Employees (email) VALUES 
            ('opiu@gmail.com')");
            
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('xyz@outlook.com')");
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('def@gmail.com')");
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('ghi@gmail.com')");
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('jkl@outlook.com')");
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('mnk@gmail.com')");
            executePlainSQL("INSERT INTO Employers (email) VALUES 
            ('row@gmail.com')");
        
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (1, 'here is my application', 'abcd@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (2, 'here is my application', 'foo@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (3, 'here is my application', 'bar@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (4, 'here is my application', 'fefgh90@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (5, 'here is my application', 'blahblah@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (6, 'here is my application', 'opiu@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (7, 'here is my application', 'bar@gmail.com')");
            executePlainSQL("INSERT INTO Applications_Completes (appID, intro, email) VALUES 
            (8, 'here is my application', 'foo@gmail.com')");
            
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (1, 'Finance', 'accountant', TO_DATE('2023-01-01', 'yyyy-mm-dd'), TO_DATE('2023-01-30', 'yyyy-mm-dd'), 'xyz@outlook.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (2, 'Information Technology', 'software engineer', TO_DATE('2023-01-02', 'yyyy-mm-dd'), TO_DATE('2023-01-28', 'yyyy-mm-dd'), 'def@gmail.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (3, 'Information Technology', 'network administrator', TO_DATE('2023-01-06', 'yyyy-mm-dd'), TO_DATE('2023-01-30', 'yyyy-mm-dd'), 'ghi@gmail.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (4, 'Healthcare', 'doctor', TO_DATE('2022-01-02', 'yyyy-mm-dd'), TO_DATE('2023-01-30', 'yyyy-mm-dd'), 'jkl@outlook.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (5, 'Healthcare', 'nurse', TO_DATE('2023-02-01', 'yyyy-mm-dd'), TO_DATE('2023-02-25', 'yyyy-mm-dd'), 'mnk@gmail.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (6, 'Education', 'teacher', TO_DATE('2023-02-03', 'yyyy-mm-dd'), TO_DATE('2023-02-22', 'yyyy-mm-dd'), 'row@gmail.com')");
            executePlainSQL("INSERT INTO Jobs_Posts (jobID, industry, jobName, postDate, endDate, email) VALUES 
            (7, 'Finance', 'loan officers', TO_DATE('2023-01-01', 'yyyy-mm-dd'), TO_DATE('2023-01-20', 'yyyy-mm-dd'), 'xyz@outlook.com')");

            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (1, 'here is my application', 1)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (2, 'here is my application', 2)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (3, 'here is my application', 3)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (4, 'here is my application', 4)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (5, 'here is my application', 5)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (6, 'here is my application', 6)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (7, 'here is my application', 7)");
            executePlainSQL("INSERT INTO Applications_For (appID, intro, jobID) VALUES 
            (8, 'here is my application', 7)");
        
            OCICommit($db_conn);
        }

        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('AllJobs', $_GET)) {
                    handleCountRequest1();
                } else if (array_key_exists('AllApplications', $_GET)) {
                    handleCountRequest2();
                } else if (array_key_exists('Employers', $_GET)) {
                    handleCountRequest3();
                } else if (array_key_exists('Employees', $_GET)) {
                    handleCountRequest4();
                }

                disconnectFromDB();
            }
        }

        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('insertTablesRequest', $_POST)) {
                    handleInsertRequest();
                }

                disconnectFromDB();
            }
        }

        if (isset($_POST['reset']) || isset($_POST['insert'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest1']) || isset($_GET['countTupleRequest2']) || isset($_GET['countTupleRequest3']) || isset($_GET['countTupleRequest4'])) {
            handleGETRequest();
        }

    ?>

</html>
