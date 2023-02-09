<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Notes</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="firstname" placeholder="First name"><br>
        <input type="text" name="lastname" placeholder="Last name"><br>
        <textarea name="message" cols="15" rows="5"></textarea><br>
        <input type="submit" name="submitBtn" value="Send message">
        <br>
        <br>
    </form>
    <?php
    /*
    action attribute on form: choose where to send the data Ex.: action="result.php";

    method attribute: defines HOW you send the request to the server (GET or POST);

    When the server receives request/data from a form, the data is saved in a superglobal variable.

    $_GET
    &_POST

    GET method: it will send the data through the url directly:
     form.php?firstname=simon&lastname=bertrand
    */

    /* echo '<pre>';
        var_dump($_GET);
        echo '</pre>'; */

    // only if form is submitted:

    // if isset (something exists in) GET (in this case, in this case, the button!):
    /*  if (isset($_GET['submitBtn'])) {
            $errors = false;

            // Validation
            if (empty($_GET['firstname'])) {
                echo "First name is mandatory!<br>";
                $errors = true;
            }
            if (empty($_GET['lastname'])) {
                echo "Last name is mandatory!<br>";
                $errors = true;
            }
            if ($errors === false) {
                echo 'Form was submitted. First name: ' . $_GET['firstname'] . ' / Last name: ' . $_GET['lastname'];
            }
        } */

    // if empty value in GET:
    /* if (empty($_GET))
            echo 'Form was submitted. First name: ' . $_GET['firstname'] . ' / Last name: ' . $_GET['lastname']; */
    // to stop the submit in case of empty value:
    // set the attribute "required" on an html input element; but this can be disabled within the client; so this must be done in the server, for security reasons!

    /* POST method:
            will send the data without editing the url; use it when using a lot of data or sensitive information (like passwords, etc.);
    */

    if (isset($_POST['submitBtn'])) {
        $errors = false;

        // Validation
        if (empty($_POST['firstname'])) {
            echo "First name is mandatory!<br>";
            $errors = true;
        }
        if (empty($_POST['lastname'])) {
            echo "Last name is mandatory!<br>";
            $errors = true;
        }
        if ($errors === false) {
            echo 'Form was submitted. First name: ' . $_POST['firstname'] . ' / Last name: ' . $_POST['lastname'];
        }
    }

    ?>

</body>

</html>