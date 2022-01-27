# Section 5 - Conditionals and More Loops

## Overview

Arrays and loops are an essential constructs in the majority of programing languages. The ability
to define a list of values and iterate over the list performing operations is a critical
skill to master.

## Content Links

- Conditionals (if/else) - <https://www.w3schools.com/js/js_if_else.asp>
- Boolean Expressions - <https://www.w3schools.com/js/js_booleans.asp>
- Comparisons (see Section 3) - <https://www.w3schools.com/js/js_comparisons.asp>
- While loop - <https://www.w3schools.com/js/js_loop_while.asp>
- Loops break and continue - <https://www.w3schools.com/js/js_break.asp>

## Conditional Expressions (if/else)

Very often when you write code, you want to perform different actions for different decisions.

You can use conditional statements in your code to do this.

In JavaScript, we have the following conditional statements:

- Use `if` to specify a block of code to be executed, if a specified condition is `true`.
- Use `else` to specify a block of code to be executed, if the same condition is `false`.
- Use `else if` to specify a new condition to test, if the first condition is `false`.   

### The `if` Statement

Use the `if` statement to specify a block of JavaScript code to be executed if a condition 
is `true`.

```
Syntax:

if (condition) {
  //  block of code to be executed if the condition is true
}
```
Make a "Good day" greeting if the hour is less than 18:00:
```
Example:

if (hour < 18) {
  greeting = "Good day";
}
```

### The `else` Statement

Use the `else` statement to specify a block of code to be executed if the condition is 
`false`. 

```
Syntax:

if (condition) {
  //  block of code to be executed if the condition is true
} else {
  //  block of code to be executed if the condition is false
}
```

If the hour is less than 18, create a "Good day" greeting, otherwise "Good evening":

```
Example:

if (hour < 18) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}
```

### The `else if` Statement

Use the `else if` statement to specify a new condition if the first condition is `false`.

```
Syntax:

if (condition1) {
  //  block of code to be executed if condition1 is true
} else if (condition2) {
  //  block of code to be executed if the condition1 is false and condition2 is true
} else {
  //  block of code to be executed if the condition1 is false and condition2 is false
}
```

If time is less than 10:00, create a "Good morning" greeting, if not, but time is less than 20:00, create a 
"Good day" greeting, otherwise a "Good evening":

```
Example:

if (time < 10) {
  greeting = "Good morning";
} else if (time < 20) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}
```

## Boolean Expressions (true/false)

Very often, in programming, you will need a data type that can only have one of two values, like

- YES / NO
- ON / OFF
- TRUE / FALSE

The `Boolean` value of an expression is the basis for all JavaScript comparisons and conditions.

Refer back to `03 - Comparison and Logical Operators` the examples below use comparison operators 
in `Boolean` expressions. The result of the expressions drive which statements in the program are 
executed.   

| Operator | Description | Example |
|---------|------|-----|
| `==`    | equal to | if (day == "Monday") |
| `>`     | greater than | if (salary > 9000) |
| `<`      | less than | if (age < 18) |


## Comparisons and Logical Operators

Comparison and Logical operators are used to test for `true` or `false`.

### Comparison Operators

Comparison operators are used in logical statements to determine equality or 
difference between variables or values.

Given that `x = 5`, the table below explains the comparison operators:                             

| Operator | Descrption                        | Example           | Result                          |
|-------|-----------------------------------|-------------------|---------------------------------|
| `==`  | equal to                          | `x == 8 ` <br> `x == 5` <br> `x == "5"` | `false` <br> `true` <br> `true` |
| `===`  | equal value and equal type        | `x === 5` <br> `x === "5"` | `true` <br> `false`             |
| `!=`   | not equal                         | `x != 8`          | `true`                          |
| `!==`  | not equal value or not equal type | `x !== 5` <br> `x !== "5"` <br> `x !== 8` | `false` <br> `true` <br> `true` |
| `>`    | greater than                      | `x > 8`           | `false`                         |
| `<`     | less than                         | `x < 8`           | `true`                          |
| `>=`    | greater than or equal to          | `x >= 8`          | `false`                         |
| `<=`    | less than or equal to             | `x <= 8`          | `true`                          |


### Logical Operators

Logical operators are used to determine the logic between variables or values.

Given that `x = 6` and `y = 3`, the table below explains the logical operators:

| Operator   | Descrption | Example             | Result  |
|------------|----------|---------------------|---------|
| `&&`         | and      | `(x < 10 && y > 1)` | `true`  |
| &#124;&#124; | or                  | `(x == 5 `&#124;&#124;` y == 5)` | `false` |
| `!`          | not      | `!(x == y)`         | `true`  |

## Loops: `break`, `continue` and nested loops

### `break` and `continue`

The `break` statement "jumps out" of a loop.

```
for (let i = 0; i < 10; i++) {
  if (i === 3) { break; }
  text += "The number is " + i + "<br>";
}
```

The `continue` statement "jumps over" one iteration in the loop.

```
for (let i = 0; i < 10; i++) {
  if (i === 3) { continue; }
  text += "The number is " + i + "<br>";
}
```
   
### Nested loops 

Loops can be nested (one loop inside another) as needed to process input or determine some business logic.
Consider the following string of fruits (delimited with semicolons `;`) with counts 
(delimited with commas `,`) in the following pattern:

```
fruit,count;fruit,count;fruit,count
```

A nested `for` loop can be used to `split()` the string multiple times.           

```
Example:

let input = "Apples,2;Bananas,12;Cherries,30";
const array1 = input.split(";");

for (let i=0; i<array1.length; i++) {
    const array2 = array1[i].split(",");
    for (let j=0; j<array2.length; j++) {
        document.write(`${i}{j}: ${array2[0]} = ${array2[1]}`);   
    }
}
```
