/**
    Types of constructor
    1. Default Constructor -> takes no parameter
    2. Parameterized Constructor
    3. Chaining Constructor
**/
namespace ConstructorExample
{

    class Person
    {
        public string Name;
        public int Age;

        public string FirstName;


        // default constructor
        // public Person()
        // {
        //     Name = "unknown";
        //     Age = 0;
        //     System.Console.WriteLine("Default constructor called");
        // }

        public Person()
        {
            Name = "Unknow";
            Age = 0;
            System.Console.WriteLine("Default constructor called");
        }

        // paramaterized constructor

        public Person(string Name, int Age)
        {
            this.Name = Name;
            this.Age = Age;

            System.Console.WriteLine($"Parameterized constructor called {Name} {Age}");
        }


        // chaining constructor
        public Person(string Name) : this(Name, 20)
        {

            // first ma parameterized constructor call garxa 
            //  this(Name, 20 ) -> le constructor with 2 parameters call garxa :(Name variable chai parameter ma pass vako xa age chai afai define gareko xa)
            System.Console.WriteLine("Chaining constructor");
        }


    }
    class ConstructorExample
    {
        public static void Main()
        {

            Person defaultDemo = new Person();

            Person parameterized = new Person("Ramesh", 19);
            // System.Console.WriteLine(parameterized.Name);
            Person chainingExample = new Person("Ramesh");

            Person eg = new Person("Ramesh");



        }
    }
}