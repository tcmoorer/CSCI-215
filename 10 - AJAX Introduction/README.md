# Section 10 - AJAX and Simple GET

## Overview

Blah, blah...

## Content Links

- AJAX - <https://www.w3schools.com/js/js_ajax_intro.asp>
  - XMLHttpRequest - <https://www.w3schools.com/js/js_ajax_http.asp>
  - AJAX Request - <https://www.w3schools.com/js/js_ajax_http_send.asp>
  - AJAX Response - <https://www.w3schools.com/js/js_ajax_http_response.asp>

## AJAX - Asynchronous JavaScript And XML

AJAX is not a programming language.

AJAX just uses a combination of:

- A browser built-in XMLHttpRequest object (to request data from a web server)
- JavaScript and HTML DOM (to display or use the data)

AJAX is a misleading name. AJAX applications might use XML to transport data, but it is equally common to transport data as plain text or JSON text.

AJAX allows web pages to be updated asynchronously by exchanging data with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

### How AJAX Works
    
![How AJAX Works](images/pic_ajax.gif)

- An event occurs in a web page (the page is loaded, a button is clicked)
- An XMLHttpRequest object is created by JavaScript
- The XMLHttpRequest object sends a request to a web server
- The server processes the request
- The server sends a response back to the web page
- The response is read by JavaScript
- Proper action (like page update) is performed by JavaScript
 
## The `XMLHttpRequest` Object

All modern browsers support the `XMLHttpRequest` object.

The `XMLHttpRequest` object can be used to exchange data with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

### Create an `XMLHttpRequest` Object

All modern browsers (Chrome, Firefox, IE, Edge, Safari, Opera) have a built-in `XMLHttpRequest` object.
            
```
variable = new XMLHttpRequest();
```

### Define a Callback Function

A callback function is a function passed as a parameter to another function.

In this case, the callback function should contain the code to execute when the response is ready.
    
```
xhttp.onload = function() {
  // What to do when the response is ready
}
```

### Send a Request

To send a request to a server, you can use the `open()` and `send()` methods of the `XMLHttpRequest` object:

```
xhttp.open("GET", "ajax_info.txt");
xhttp.send();
```
             
This is a complete example of an AJAX call:

```
// Create an XMLHttpRequest object
const xhttp = new XMLHttpRequest();

// Define a callback function
xhttp.onload = function() {
  // Here you can use the Data
}

// Send a request
xhttp.open("GET", "ajax_info.txt");
xhttp.send();
```
          
## GET Requests

A simple GET request:
   
```
xhttp.open("GET", "demo_get.asp");
xhttp.send();
```

A GET request with parameters (information added to the URL):

```
xhttp.open("GET", "demo_get2.asp?fname=Henry&lname=Ford");
xhttp.send();
```

### Server Response
    
### The `responseText` Property

The `responseText` property returns the server response as a JavaScript string, and you can use it accordingly:

```
document.getElementById("demo").innerHTML = xhttp.responseText;
```

