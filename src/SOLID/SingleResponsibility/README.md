# Single responsibility principle (the S in SOLID)
The single responsibility principle is all about making sure that each part of our source code serves a single purpose.
This means that it must have one, and only one, reason to change.

## Assignment
### The pizza restaurant
In the [`AssignmentFiles` folder](./AssignmentFiles) you'll find a simple app that takes an order for making a pizza. It
consists of three files:
* App.php – the main file that runs the example
* Order.php – a model representing an order for a pizza
* Pizza.php – a model representing a pizza

To run it, point your terminal to the folder, and run:

```shell
$ php App.php
```

This will ask you a number of questions, simulating an order in a pizza restaurant. The end result is a pizza.

While this code is reasonably readable, it does violate the Single Responsibility principle.

### Improve the code

> **Assignment:** Make changes to the code to make it more in line with the Single Responsibility principle.

> When done, discuss your solution with your coach. Make sure to motivate your design decisions.

> Pro-tip 1: take notes of the feedback you get.
>
> Pro-tip 2: keep practicing the Single Responsibility principle.

---

## Notes
As with almost all principles, there's more than one correct way to go about this. As when working on "real"
projects/apps, how far you go depends on the person and the situation. In this assignment the goal is to go as far as
you can imagine; in reality you could also opt to group a thing or two.

The bottom line here is that, the more you practice, the easier it becomes to identify potential improvements.
