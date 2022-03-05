# Section 13 - Browser Web Storage API

## Overview

Blah...

## Content Links

- Web Storage API - <https://www.w3schools.com/js/js_api_web_storage.asp>
- JSON `Stringify()` section on local storage - <https://www.w3schools.com/js/js_json_stringify.asp>

## Web Storage API

The Web Storage API is a simple syntax for storing and retrieving data in the browser. It is very easy to use:
 
```
localStorage.setItem("name", "John Doe");
localStorage.getItem("name");
```

## The localStorage Object

The `localStorage` object provides access to a local storage for a particular WebSite. It allows you to store, read, add, modify, and delete data items for that domain.

> The data is stored with no expiration date, and will not be deleted when the browser is closed.

The data will be available for days, weeks, and years.

### The `setItem()` Method

The `localStorage.setItem()` method stores a data item in a storage.

It takes a name and a value as parameters:

```
localStorage.setItem("name", "John Doe");
```

### The `getItem()` Method

The `localStorage.getItem()` method retrieves a data item from the storage.

It takes a name as parameter:

```
localStorage.getItem("name");
```

## The sessionStorage Object

> The `sessionStorage` object is identical to the `localStorage` object. The difference is that the sessionStorage object stores data for one session. The data is deleted when the browser is closed.

### The `setItem()` Method

The `sessionStorage.setItem()` method stores a data item in a storage.

It takes a name and a value as parameters:
         
```
sessionStorage.setItem("name", "John Doe");
```

### The `getItem()` Method

The `sessionStorage.getItem()` method retrieves a data item from the storage.

It takes a name as parameter:

```
sessionStorage.getItem("name");
```

> JSON `parse()` and `stringify()` to convert to JavaScript object and strings for storage. 

## JSON `Stringify()` When Storing / Retrieving Data

When storing data, the data has to be a certain format, and regardless of where you choose to store it, text is always one of the legal formats.

JSON makes it possible to store JavaScript objects as text.

```
// Storing data:
const myObj = {name: "John", age: 31, city: "New York"};
const myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

// Retrieving data:
let text = localStorage.getItem("testJSON");
let obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
```
