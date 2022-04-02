# Section 12 - AJAX POST and Handling Responses

## Overview

This module builds on the topic of AJAX and PHP using JSON to send information between systems. 

## Content Links 

- AJAX GET vs POST - <https://www.w3schools.com/js/js_ajax_http_send.asp>
- PHP Superglobal `$_POST` - <https://www.w3schools.com/php/php_superglobals_post.asp>

## AJAX POST Requests

A simple POST request:

```
xhttp.open("POST", "demo_post.asp");
xhttp.send();
```

To POST data like an HTML form, add an HTTP header with `setRequestHeader()`. Specify the data you want to send in the `send()` method. This can either be formatted as name/value parameters or as a JSON formatted string to the server.

The example below illustrates sending parameters in the POST body:
 
```
xhttp.open("POST", "ajax_test.asp");
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fname=Henry&lname=Ford");
```

This example, illustrates converting a JavaScript object to JSON using `JSON.stringify()` in the POST body. Recall that `JSON.stringify()` converts the JavaScript object into a JSON string.   

```
xhttp.open("POST", "ajax_test.asp");

const person = {};
person.fname = 'Henry';
person.lname = 'Ford';

xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(JSON.stringify(person));
```

## PHP and JSON Support

PHP supports the JavaScript Object Notation data-interchange format via the following functions:

| Function | Description |
|---|---|
| `json_decode()` | Decodes a JSON string |
| `json_encode()` | Encode a value to JSON format |                           


### `json_decode()` - JSON to PHP Object

The `json_decode()` function is used to decode or convert a JSON object to a PHP object.

```
json_decode(string, assoc, depth, options)
```

| Parameter | Description |
|----|----|
| string | Required. Specifies the value to be decoded |
| assoc | Optional. Specifies a Boolean value. When set to true, the returned object will be converted into an associative array. When set to false, it returns an object. False is default |
| depth | Optional. Specifies the recursion depth. Default recursion depth is 512 |
| options | Optional. Specifies a bitmask (JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR) |


Convert JSON String to PHP Object and access attribute values:

```
<?php
  $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
  
  $obj = json_decode($jsonobj);
  
  echo $obj->Peter;
  echo $obj->Ben;
  echo $obj->Joe;
?>
```

### `Json_encode()` - PHP Array to JSON

The `json_encode()` function is used to encode a value to JSON format.

```
json_encode(value, options, depth)
```

| Parameter | Description |
|----|----|
| value | Required. Specifies the value to be encoded |
| options | Optional. Specifies a bitmask (JSON_FORCE_OBJECT, JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_NUMERIC_CHECK, JSON_PARTIAL_OUTPUT_ON_ERROR, JSON_PRESERVE_ZERO_FRACTION, JSON_PRETTY_PRINT, JSON_UNESCAPED_LINE_TERMINATORS, JSON_UNESCAPED_SLASHES, JSON_UNESCAPED_UNICODE, JSON_THROW_ON_ERROR)  |
| depth | Optional. Specifies the maximum depth |

Convert a PHP array to JSON using `json_encode()`:

```
<?php
  $cars = array("Volvo", "BMW", "Toyota");
  
  echo json_encode($cars);
?>
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
