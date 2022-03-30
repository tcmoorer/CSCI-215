# Section 11 - JSON, AJAX GET, and Handling Responses

## Overview

A key concept with AJAX is the ability to transform data between systems.This section covers the techniques and 
methods to transform objects into JSON and the reverse of JSON into objects.

## Content Links

- AJAX - <https://www.w3schools.com/js/js_ajax_intro.asp>
  - XMLHttpRequest - <https://www.w3schools.com/js/js_ajax_http.asp>
  - AJAX Request - <https://www.w3schools.com/js/js_ajax_http_send.asp>
  - AJAX Response - <https://www.w3schools.com/js/js_ajax_http_response.asp>
- JSON - <https://www.w3schools.com/js/js_json_intro.asp>
  - JSON.parse() - <https://www.w3schools.com/js/js_json_parse.asp>
  - JSON.stringify() - <https://www.w3schools.com/js/js_json_stringify.asp>
- PHP JSON - <https://www.w3schools.com/php/php_ref_json.asp>
- PHP Superglobals $_GET - <https://www.w3schools.com/php/php_superglobals.asp>
        

## AJAX Overview

See Section 10. Go on. Go back and look there. 

## JSON

### What is JSON?

JSON stands for JavaScript Object Notation.

	• JSON is a lightweight data-interchange format
	• JSON is plain text written in JavaScript object notation
	• JSON is used to send data between computers
	• JSON is language independent *

This example is a JSON string:
             
```
'{"name":"John", "age":30, "car":null}'
```

### Why Use JSON?

> The JSON format is syntactically similar to the code for creating JavaScript objects. Because of this, a JavaScript program can easily convert JSON data into JavaScript objects.

> Since the format is text only, JSON data can easily be sent between computers, and used by any programming language.

JavaScript has a built-in function for converting JSON strings into JavaScript objects:

`JSON.parse()`

JavaScript also has a built in function for converting an object into a JSON string:

`JSON.stringify()`

You can receive pure text from a server and use it as a JavaScript object.
You can send a JavaScript object to a server in pure text format.
You can work with data as JavaScript objects, with no complicated parsing and translations.

JSON Format and Syntax Rules

JSON syntax is derived from JavaScript object notation syntax:

- Data is in name/value pairs
- Data is separated by commas
- Curly braces hold objects
- Square brackets hold arrays

### Data - A Name and a Value

JSON data is written as name/value pairs (aka key/value pairs). A name/value pair consists of a field name (in double quotes), followed by a colon, followed by a value:

```
"name":"John"
```

**JSON names require double quotes.**

### JSON - Evaluates to JavaScript Objects

The JSON format is almost identical to JavaScript objects.

In JSON, keys must be strings, written with double quotes:

```
{"name":"John"}
```

In JavaScript, keys can be strings, numbers, or identifier names:

```
{name:"John"}
```

## `JSON.parse()` - Parsing JSON into an JavaScript Object

A common use of JSON is to exchange data to/from a web server. When receiving data from a web server, the data is always a string. Parse the data with `JSON.parse()`, and the data becomes a JavaScript `object`.

Imagine we received this text from a web server:

```
'{"name":"John", "age":30, "city":"New York"}'
```

Use the JavaScript function `JSON.parse()` to convert text into a JavaScript `object`:
          
```
const obj = JSON.parse('{"name":"John", "age":30, "city":"New York"}');
```
                                          
### Array as JSON

When using the `JSON.parse()` on a JSON derived from an `array`, the method will return a JavaScript `array`, instead of a JavaScript `object`.

```
const text = '["Ford", "BMW", "Audi", "Fiat"]';
const myArr = JSON.parse(text);
```       

## `JSON.stringify()` - Converting JavaScript Object to JSON

A common use of JSON is to exchange data to/from a web server. When sending data to a web server, the data has to be a string. Convert a JavaScript object into a string with `JSON.stringify()`.

### Stringify a JavaScript Object

Imagine we have this object in JavaScript:

```
const obj = {name: "John", age: 30, city: "New York"};
```

Use the JavaScript function `JSON.stringify()` to convert it into a string.

```
const myJSON = JSON.stringify(obj);
```

### Stringify a JavaScript Array

It is also possible to stringify JavaScript arrays:

Imagine we have this array in JavaScript:
    
```
const arr = ["John", "Peter", "Sally", "Jane"];
```

Use the JavaScript function `JSON.stringify()` to convert it into a string.

```
const myJSON = JSON.stringify(arr);
```

`myJSON` is now a string, and ready to be sent to a server:

```
const arr = ["John", "Peter", "Sally", "Jane"];
const myJSON = JSON.stringify(arr);
```

## PHP and JSON Format

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

## PHP Supergloabal $_GET

Some predefined variables in PHP are "superglobals", which means that they are always accessible - and you can access them from any function, class or file without having to do anything special.

PHP `$_GET`

PHP `$_GET` is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

`$_GET` can also collect data sent in the URL.

```
<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>
```

When a user clicks on the link "Test `$GET`", the parameters "`subject`" and "`web`" are sent to "`test_get.php`", and you can then access their values in "test_get.php" with `$_GET`.

The example below shows the code in "`test_get.php`":

```
<html>
<body>

<?php
  echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>
```

