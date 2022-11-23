# Section 13 - Browser Web Storage API

## Learning Outcomes

HTML5 included a standard API to store information in the browser. This section 
provides an introduction to this feature and the basics of using it. At the end
of this section you should have the ability to use the WebStorage API to store,
access and update items saved using WebStorage. 

## Content Links

- Web Storage API - <https://www.w3schools.com/js/js_api_web_storage.asp>
- JSON `Stringify()` section on local storage - <https://www.w3schools.com/js/js_json_stringify.asp>

## Web Storage API

The Web Storage API is a simple syntax for storing and retrieving data in the browser. It is very easy to use:
 
```javascript
localStorage.setItem("name", "John Doe");
localStorage.getItem("name");
```

### Two scopes:

1. **localStorage** - The localStorage object provides access to a local storage for a particular Web Site. It allows you to store, read, add, modify, and delete data items for that domain. The data is stored with no expiration date, and will not be deleted when the browser is closed. The data will be available for days, weeks, and years.

2. **sessionStorage** - The sessionStorage object is identical to the localStorage object. The difference is that the sessionStorage object stores data for one session. The data is deleted when the browser is closed.

| Property / Method | Description |
|----------------|---|
| `key(n)` | Returns the name of the nth key in the storage |
| `length` | Returns the number of data items stored in the Storage object |
| `getItem(keyname)` | Returns the value of the specified key name |
| `setItem(keyname, value)` | Adds that key to the storage, or update that key's value if it already exists |
| `removeItem(keyname)` | Removes that key from the storage |
| `clear()` | Empty all key out of the storage |


| Property | Description |
|----------|---|
| `window.localStorage` | Allows to save key/value pairs in a web browser. Stores the data with no expiration date |
| `window.sessionStorage` | Allows to save key/value pairs in a web browser. Stores the data for one session |
       

## The localStorage Object

The `localStorage` object provides access to a local storage for a particular WebSite. It allows you to store, read, add, modify, and delete data items for that domain.

> The data is stored with no expiration date, and will not be deleted when the browser is closed.

The data will be available for days, weeks, and years.

### The `setItem()` Method

The `localStorage.setItem()` method stores a data item in a storage.

It takes a name and a value as parameters:

```javascript
localStorage.setItem("name", "John Doe");
```

### The `getItem()` Method

The `localStorage.getItem()` method retrieves a data item from the storage.

It takes a name as parameter:

```javascript
localStorage.getItem("name");
```

## The sessionStorage Object

> The `sessionStorage` object is identical to the `localStorage` object. The difference is that the sessionStorage object stores data for one session. The data is deleted when the browser is closed.

### The `setItem()` Method

The `sessionStorage.setItem()` method stores a data item in a storage.

It takes a name and a value as parameters:
         
```javascript
sessionStorage.setItem("name", "John Doe");
```

### The `getItem()` Method

The `sessionStorage.getItem()` method retrieves a data item from the storage.

It takes a name as parameter:

```javascript
sessionStorage.getItem("name");
```

> JSON `parse()` and `stringify()` to convert to JavaScript object and strings for storage. 

## JSON `Stringify()` When Storing / Retrieving Data

When storing data, the data has to be a certain format, and regardless of where you choose to store it, text is always one of the legal formats.

JSON makes it possible to store JavaScript objects as text.

```javascript
// Storing data:
const myObj = {name: "John", age: 31, city: "New York"};
const myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

// Retrieving data:
let text = localStorage.getItem("testJSON");
let obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
```
