# Content Links

- Comments - https://www.w3schools.com/js/js_comments.asp
- Variables - https://www.w3schools.com/js/js_variables.asp
- Data Types - https://www.w3schools.com/js/js_datatypes.asp 
- Input (Prompt) - https://www.w3schools.com/jsref/met_win_prompt.asp 
- Output - https://www.w3schools.com/js/js_output.asp

# Content

## Comments

### Single Line Comments

Single line comments start with `//`. Any text between `//` and the end of the line will 
be ignored by JavaScript (will not be executed).
  
```
let x = 5;      // Declare x, give it the value of 5
let y = x + 2;  // Declare y, give it the value of x + 2
```

### Multi-line Comments

Multi-line comments start with `/*` and end with `*/`. Any text between `/*` and `*/` will 
be ignored by JavaScript.

 ```
/*
   The code below will change
   the heading with id = "myH"
   and the paragraph with id = "myP"
   in my web page:
*/
document.getElementById("myH").innerHTML = "My First Page";
document.getElementById("myP").innerHTML = "My first paragraph.";
 ```
               
Using comments to prevent execution of code is suitable for code testing.

### Variables

#### What are Variables?

Variables are containers for storing data (storing data values). In this example, 
x, y, and z, are variables, declared with the let keyword:
              
```
var x = 5;
var y = 6;
var z = x + y;
```

- x stores the value 5
- y stores the value 6
- z stores the value 11

#### Variables include 4 parts:

1. Declaration keyword (var, let, or const)
2. Identifier (variable name) - a unique name to refer to the variable
3. Assignment operator (=)
4. Initial value

#### Keywords 

- var - used in older browsers. Valid, but should avoid use.
- let - used in modern browsers to declare variables whose value can change. Use
- const - used with arrays or when the value held should not change.

#### Variable Names

The general rules for constructing names for variables (unique identifiers) are:

- Names can contain letters, digits, underscores, and dollar signs.
- Names must begin with a letter
- Names can also begin with $ and _ (but we will not use it in this tutorial)
- Names are case-sensitive (y and Y are different variables)
- Reserved words (like JavaScript keywords) cannot be used as names

#### The Assignment Operator

In JavaScript, the equal sign (=) is an "assignment" operator, not an "equal to" operator.
                       
![Anatomy of a Variable](images/variable.png "Anatomy of a Variable")

### Data Types

A JavaScript variable can hold numbers like 100 and text values like "John Doe". 
In programming, text values are called text strings.

JavaScript handles two basic data types: 

- **Strings** are written inside double or single quotes. 
- **Numbers** are written without quotes.

If you put a number in quotes, it will be treated as a text string.

***JavaScript is "Weakly Typed" or "Untyped" Language - What does that mean?*** 

The data type is not explicitly included when declaring variables. The type is 
inferred based on the value the variable holds:

- If the value is declared inside quotes it is treated as a string. 
- If the value is a number it is treated as a number. 

JavaScript will "try" figure out what type of data you have and make the necessary 
adjustments so that you don't have to redefine your different types of data.

**CAUTION**: This means that the same variable can be used to hold different data 
types:


