# Strategy Design Pattern in PHP

This small project demonstrates the usage of the strategy design 
using two behaviors of a dog: walking and speaking. 

The abstract Dog class is composed of two behaviors, 
both of which are interfaces:

1. Speaking - SpeakBehavior.php
2. Walking - WalkBehavior.php

Because the Dog class is composed of these behaviors, we define
the behavior implementation within the children of Dog. However,
if we choose to diverge from this behavior at runtime, the child 
dog object need only call the inherited setter methods 
for the behaviors.

Modifying the behavior of the Toy Labrador at runtime can be found 
in app/Demo.php.

##Advantages
###Favors composition over inheritance
This design patterns brings several advantages. For one, it favors
composition over inheritance (Dog is composed of behaviors). With 
inheritance, it's possibly that new implementations of Dog could
inherit unexpected Speaking or Walking behaviors. For example, a hot
dog doesn't speak or walk. 

###Favors Code Reuse
If each dog implementation were to implement their behaviors, then
it creates a maintenance issue. Example:

    class Labrador implements Walkable, Speakable { ... }
With this, each implementation of Dog would need to implement a 
version of `walk()` and `speak()` (no code reuse). 
Also, when a modification to a generic speak or walk behavior occurs, 
it will need to be changed across all classes.

## Reference
This project was based off of the Duck example given in the 
Head First Design Patterns book by Eric Freeman and Elisabeth Robson
