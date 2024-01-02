using System;

// Base class
class Animal
{
    public void Eat()
    {
        Console.WriteLine("Animal is eating");
    }
}

// Derived class 1
class Mammal : Animal
{
    public void GiveBirth()
    {
        Console.WriteLine("Mammal gives birth to young ones");
    }
}

// Derived class 2 (Multilevel inheritance)
class Dog : Mammal
{
    public void Bark()
    {
        Console.WriteLine("Dog is barking");
    }
}

class Program
{
    static void Main()
    {
        // Creating an instance of the derived class Dog
        Dog myDog = new Dog();

        // Accessing methods from the base class Animal
        myDog.Eat();  // Output: Animal is eating

        // Accessing methods from the intermediate class Mammal
        myDog.GiveBirth();  // Output: Mammal gives birth to young ones

        // Accessing methods from the derived class Dog
        myDog.Bark();  // Output: Dog is barking
    }
}