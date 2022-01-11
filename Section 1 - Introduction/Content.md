# Section 1 - Introduction to JavaScript

This section includes a high-level discussion related to JavaScript and the DOM.

## Content Links

1. JS Home - https://www.w3schools.com/js/default.asp
2. Introduction - https://www.w3schools.com/js/js_intro.asp
3. Where To Add JavaScript? - https://www.w3schools.com/js/js_whereto.asp
4. Document Object Model (DOM) - https://www.w3schools.com/js/js_htmldom.asp

## 1. Home: Why Study JavaScript?

- JavaScript is the world's most popular programming language.
- JavaScript is the programming language of the Web.
- JavaScript is easy to learn.

JavaScript is one of the 3 languages all web developers must learn:

1. [HTML](https://www.w3schools.com/html/default.asp) to define the content of web pages.
2. [CSS](https://www.w3schools.com/css/default.asp) to specify the layout of web pages.
3. [JavaScript](https://www.w3schools.com/js/default.asp) to program the behavior of web pages.
    
## 2. Introduction - What can JavaScript do?

### JavaScript Can Change HTML Content

One of many JavaScript HTML methods is `getElementById()`.

The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":
           
```
document.getElementById("demo").innerHTML = "Hello JavaScript";
```

### JavaScript Can Change HTML Attribute Values

In this example JavaScript changes the value of the `src` (source) attribute of an `<img>` tag:

```
<!DOCTYPE html>
<html>
  <body>

    <!-- 
         In this case JavaScript changes the value of the src (source) 
         attribute of an image.
    -->

    <button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Turn on the light</button>

    <img id="myImage" src="pic_bulboff.gif" style="width:100px">

    <button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>

  </body>
</html>
```
Link: https://www.w3schools.com/js/tryit.asp?filename=tryjs_intro_lightbulb        

### JavaScript Can Change HTML Styles (CSS)

Changing the style of an HTML element, is a variant of changing an HTML attribute:
                                  
```
document.getElementById("demo").style.fontSize = "35px";
```

### JavaScript Can Show / Hide HTML Elements

Showing/Hiding HTML elements can be done by changing the `display` style:

```
document.getElementById("demo").style.display = "none"; // hide
document.getElementById("demo").style.display = "block"; // show
```

## 3. Where To Add JavaScript?

### The `<script>` Tag

In HTML, JavaScript code is inserted between `<script></script>` tags.

### JavaScript Functions and Events

A JavaScript function is a block of JavaScript code, that can be executed when "called" for. For 
example, a function can be called when an event occurs, like when the user clicks a button.

### JavaScript in `<head>` or `<body>`

You can place any number of scripts in an HTML document. Scripts can be placed in the `<body>`, 
or in the `<head>` section of an HTML page, or in both.

### External JavaScript

Scripts can also be placed in external files. External scripts are practical when the same code 
is used in multiple web pages.

A JavaScript file has the file extension `.js`. To use an external script, put the name of the 
script file in the `src` (source) attribute of a `<script>` tag:

```
<script src="myScript.js"></script>
```

## 4. Document Object Model (DOM)


When a web page is loaded, the browser creates a `Document Object Model` of the page. The `HTML DOM` 
model is constructed as a tree of `Objects`. Elements are the tree of html tags. Elements can have 
attributes such as `href`, `id`, or `class`.

Dynamic web applications use JavaScript to access and manipulate objects in the DOM in different ways.
  
![HTML DOM](images/dom.png)

- JavaScript can change all the HTML elements in the page
- JavaScript can change all the HTML attributes in the page
- JavaScript can change all the CSS styles in the page
- JavaScript can remove existing HTML elements and attributes
- JavaScript can add new HTML elements and attributes
- JavaScript can react to all existing HTML events in the page
- JavaScript can create new HTML events in the page