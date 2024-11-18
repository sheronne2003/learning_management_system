<?php
    // --Add dbh file--
    require_once "./dbh.inc.php";
    // --Add validation file--
    require_once "./validations.inc.php";
    
    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $index = $_POST["index_no"];
        $password = $_POST["password"];

        // Input validation
        if(inputsEmptyLogin($index, $password)){
            header("location: ../Login_Page.php?err=empty_inputs");
        }
        else if(indexInvalid($index)){
            header("location: ../Login_Page.php?err=invalid_index");
        }
        else if(passwordInvalid($password)){
            header("location: ../Login_Page.php?err=invalid_password");
        }
        else{
            // If all inputs are error free
            loginUser($conn, $index, $password);
        }
    }
    else{
        header("location: ../Login_Page.php");
        exit();
    }

    // Function for login
    function loginUser($conn, $index, $password){
        // Query
        $sql = "SELECT * FROM student WHERE index_no = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../Login_Page.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "s", $index);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if($row = mysqli_fetch_assoc($data)){
                // Get encrypted password
                $passHashed = $row["password"];
                // Verify password
                $isPassOk = password_verify($password, $passHashed);
                if($isPassOk){
                    // Setup session variables
                    session_start();
                    $_SESSION["user_index"] = $row["index_no"];
                    $_SESSION["user_name"] = $row["name"];
                    $_SESSION["user_intake"] = $row["intake"];

                    // If remember me checked
                    if(isset($remember)){
                        // Create cookies for email and password
                        setcookie("indexcookie", $index, time() + (3600 * 24 * 7), "/");
                        setcookie("passwordcookie", $password, time() + (3600 * 24 * 7), "/");
                    }
                    else{
                        // Destroy cookies value
                        if(isset($_COOKIE["indexcookie"])){
                            setcookie("indexcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                        if(isset($_COOKIE["passwordcookie"])){
                            setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                    }

                    header("location: ../LMS.php");
                }
                else{
                    header("location: ../Login_Page.php?err=loginfailedpass");
                    exit();
                }
            }
            else{
                header("location: ../Login_Page.php?err=loginfailedemail");
                exit();
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    }
?>