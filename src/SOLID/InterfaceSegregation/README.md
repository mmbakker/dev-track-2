# Interface Segregation principle (the I in SOLID)
The Interface Segregation principle states that a client should never be foreces to implement an interface that it
doesn't use.

## Assignment
### Shapes
In the [`AssignmentFiles` folder](./AssignmentFiles) you'll find the usual `App.php` file, as well as a range of classes
describing various shapes that can be drawn on a 2D plane:
* Circle
* Line
* Point
* Square

Next to that, there's a `ShapeInterface` that all shapes implement, indicating to the program that they are indeed a
shape.

### Applying the principle
Note that the `ShapeInterface` is pretty much empty.

> **Assignment A:** Your goal is to come up with a clean list of interfaces for all shapes, and give meaning to those
> interfaces (i.e. define their methods).

When done, discuss your solution with your coach. Make sure to motivate your design decisions.

> **Assignment B:** Add another shape: the triangle. How does that impact your result from assignment A?

When done, return to your coach with your solution. This time, focus on how easy or difficult it was to add this new
game entity into the game.

> Pro-tip 1: take notes of the feedback you get.
> 
> Pro-tip 2: keep practicing the Interface Segregation principle.

---

## Keep in mind
Contrary to most principles, there aren't many solutions to this particular assignment.

The bottom line here is that, the more you practice, the better you develop your intuition on recognizing situations
where you can (or should) apply the Interface Segregation principle.

Also note that, while this principle does generally lead to higher code quality, this shouldn't prevent you from being
pragmatic every once in a while. Not every situation is right for creating tens or hundreds of interfaces to tie
something together; sometimes being pragmatic is perfectly fine. The more time you spend on practicing and applying this
and other principles, the better you'll become in being able to separate situations where you can be pragmatic from
situations where you should apply the Interface Segregation principle.
