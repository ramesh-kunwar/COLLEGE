namespace Example
{

    public class Person
    {
        public string name;
        public int age;

        // constructor
        public Person(string myName, int myAge)
        {
            name = myName; // if class name and constructor name is same then we don't need to use this
            age = myAge;
        }

        public void DisplayInfo()
        {
            System.Console.WriteLine($"Name: {this.name} , Age: {this.age}");
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


            ramesh.DisplayInfo();
            ab.DisplayInfo();

            System.Console.ReadKey();
        }
    }

}
