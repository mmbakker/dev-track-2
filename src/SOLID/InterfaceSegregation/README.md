# Interface Segregation principle (the I in SOLID)
The Interface Segregation principle states that a client should never be foreces to implement an interface that it
doesn't use.

## Assignment
### Shapes
This time around, you get to create all files from scratch. All that's given is the `App.php` file.

> **Assignment:** Create the following shapes as classes.

## Assignment
### Game world
In the [`AssignmentFiles` folder](./AssignmentFiles) you'll find a very simple app that represents a game, containing a
number of game objects. It consists of three files:
* App.php – the main file that runs the example
* GameEntity.php – an abstract class that acts as a base model for entities in the game
* Enemy.php – an enemy game entity
* Player.php – the player game entity
* NonPlayableCharacter.php – a character game entity that cannot be controlled and cannot take damage, but can speak

To run the app, point your terminal to the folder, and run:

```shell
$ php App.php
```

Note it printing out a bunch of lines, simulating a fight between Player and Enemy. Also take note of the commented out
line, where `$player` hits the `$npc`.

### Applying the principle
Enable the commented out line. Note the exception that's throw.

> **Assignment A:** Change the app in such a way that it conforms to the Liskov Substitution principle, and prevents the
> exception that's thrown.

When done, discuss your solution with your coach. Make sure to motivate your design decisions.

> **Assignment B:** Add a new game entity, `Tree`, that _can_ take damange, but _cannot_ speak.

When done, return to your coach with your solution. This time, focus on how easy or difficult it was to add this new
game entity into the game.

> Pro-tip 1: take notes of the feedback you get.
> 
> Pro-tip 2: keep practicing the Liskov Substitution principle.

---

## Notes
As with almost all principles, there's more than one correct way to go about this. As when working on "real"
projects/apps, which one you pick is up to you and how you estimate the situation: some cases might be better suited for
one solution, while others might be better suited for a different solution.

The bottom line here is that, the more you practice, the better you develop your intuition on recognizing these
situations, and what approach to go for to follow the Liskov Substitution principle.
