# Encapsulation

Say we have a program. It has a few logically different objects which communicate with each other according to the rules defined in the program.

Encapsulation is achived when each object keeps its state private, inside a class. Other objects don’t have direct access to this state. Insteac, they can only call a list of public functions.

So, the object manages its own state via methods – and no other class can touch it unless explicitly allowed. If you want to communicate with the object, you should use the methods provided. But (by default), you can’t change the state.

Let’s say we’re building a tiny Sims game. There are people and there is a cat. They communicate with each other. We want to apply encapsulation, so we encapsulate all “cat” logic into `Cat` class. Here the “state” of the cat is private variables `mood`, `hungry` and `energy`. It also has a private method `meow()`. It can call it whenever it wants, the other classes can’t tell the cat when to meow. What they can do is defined in the public methods `sleep()`, `play()` and `feed()`. Each of them modifies the internal state somehow and may invoke `meow()`. Thus, the binding between the private state and public methods is made.
