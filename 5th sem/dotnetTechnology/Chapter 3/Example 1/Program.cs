namespace Example
{



    public class Person
    {
        public string name;
        public int age;

        // static constructor gets called only once when the program is being run
        // public static Person()
        // {
        //     System.Console.WriteLine("static constructor");
        // }


        // constructor
        // normal constructor gets called every time when the object is beign called

        public Person(string myName, int myAge)
        {
            name = myName; // if class name and constructor name is same then we don't need to use this
            age = myAge;
        }

        public void DisplayInfo()
        {
            StaticDemo();
            System.Console.WriteLine($"Name: {this.name} , Age: {this.age}");
        }

        public static void StaticDemo()
        {

            System.Console.WriteLine("Static Demo");
        }
        ~Person()
        {
            System.Console.WriteLine($"Destructor called for {this.name}");
        }
    }
    class Program
    {
        static void Main()
        {
            Console.WriteLine("hello");
            Person ramesh = new Person("Ramesh Kunwar", 20);
            Person ab = new Person("ab", 20);

            Person.StaticDemo();


            // ab.StaticDemo();
            ramesh.DisplayInfo();
            // ab.DisplayInfo();

            System.Console.ReadKey();
        }
    }

}