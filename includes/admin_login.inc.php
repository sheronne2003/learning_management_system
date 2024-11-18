<?php
    // --Add dbh file--
    require_once "./dbh.inc.php";
    // --Add validation file--
    require_once "./validations.inc.php";
    
    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $identity = $_POST["NIC"];
        $password = $_POST["password"];

        // Input validation
        if(inputs1EmptyLogin($identity, $password)){
            header("location: ../admin.php?err=empty_inputs");
        }
        else if (identityInvalid($identity)){
            header("location: ../admin.php?err=invalid_identity");
        }
        else if(passwordInvalid($password)){
            header("location: ../admin.php?err=invalid_password");
        }
        else{
            // If all inputs are error free
            loginAdmin($conn, $identity, $password);
        }
    }
    else{
        header("location: ../admin_page.php");
        exit();
    }

    // Function for login
    function loginAdmin($conn, $identity, $password){
        // Query
        $sql = "SELECT * FROM admin WHERE NIC = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($conn);
        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../admin.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "s", $identity);
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
                    $_SESSION["user_identity"] = $row["id"];
                    $_SESSION["user_name"] = $row["name"];

                    // If remember me checked
                    if(isset($remember)){
                        // Create cookies for email and password
                        setcookie("identitycookie", $identity, time() + (3600 * 24 * 7), "/");
                        setcookie("passwordcookie", $password, time() + (3600 * 24 * 7), "/");
                    }
                    else{
                        // Destroy cookies value
                        if(isset($_COOKIE["identitycookie"])){
                            setcookie("identitycookie", "", time() - (3600 * 24 * 7), "/");
                        }
                        if(isset($_COOKIE["passwordcookie"])){
                            setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                    }

                    header("location: ../admin_page.php");
                }
                else{
                    header("location: ../admin.php?err=loginfailedpass");
                    exit();
                }
            }
            else{
                header("location: ../admin.php?err=loginfailedID");
                exit();
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    }
?>