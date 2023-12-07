# Multiple Inheritance

- To implement multiple inheritance we need to use Interfaces and abstract classes

## Interface

- Looks like a class but has no implementation
- Only things it contains are declaration of events, indexers, methods and properties
- Inherited class should define the implementation.

#### Importance of Interfaces

- Interfaces specifies what a class must do and how
- It's blueprint of the class.

## Abstract Class

- A class declared as abstract can never be instantiated.
- Only its concrete sub-class can be instantiated
- By the creation of the desired class object where an abstract class inherit from, we can call the method of the abstract class.

## Abstract Method

- An abstract method is a method without a body.
- The implementation of an abstract method is done by derived class.
- When the derived class inherits the abstracdt method from the abstract class, it must override the abstract method.
- This requirement is enforced at compile time and its also called dynamic polymorphism
- Abstract method are used to achieve total abstraction.

