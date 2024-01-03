using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        // Creating a dictionary with keys of type string and values of type int
        Dictionary<string, int> ageDictionary = new Dictionary<string, int>();

        // Adding key-value pairs to the dictionary
        ageDictionary.Add("John", 25);
        ageDictionary.Add("Jane", 30);
        ageDictionary["Mike"] = 22; // Another way to add or update a value

        // Accessing values using keys
        // Console.WriteLine("John's age: " + ageDictionary["John"]);


        // Iterating through all key-value pairs
        foreach (var pair in ageDictionary)
        {
            Console.WriteLine($"{pair.Key}'s age: {pair.Value}");
        }
    }
}
