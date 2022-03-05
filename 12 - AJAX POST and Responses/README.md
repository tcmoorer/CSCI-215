# Section 12 - AJAX POST and Handling Responses

## Overview

Blah...

## Content Links 

- AJAX GET vs POST - <https://www.w3schools.com/js/js_ajax_http_send.asp>
- PHP Superglobal `$_POST` - <https://www.w3schools.com/php/php_superglobals_post.asp>

## POST Requests

A simple POST request:

```
xhttp.open("POST", "demo_post.asp");
xhttp.send();
```

To POST data like an HTML form, add an HTTP header with `setRequestHeader()`. Specify the data you want to send in the `send()` method:
 
```
xhttp.open("POST", "ajax_test.asp");
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fname=Henry&lname=Ford");
```

## PHP Supergloabal `$_POST`

Some predefined variables in PHP are "superglobals", which means that they are always accessible - and you can access them from any function, class or file without having to do anything special.

### PHP `$_POST`

PHP `$_POST` is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". `$_POST` is also widely used to pass variables.

The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the `<form>` tag. 

In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable `$_POST` to collect the value of the input field:
  
```
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = $_POST['fname'];
      if (empty($name)) {
        echo "Name is empty";
      } else {
        echo $name;
      }
    }
?>

</body>
</html>
```
