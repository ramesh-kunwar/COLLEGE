namespace ConstructorExample
{
    class Person
    {
        public string Name; public int Age;
        // default Constructor
        public Person()
        {
            Name = "unknown";
            Age = 0;
            System.Console.WriteLine("Default constructor called");
        }
        // Parameterized constructor
        public Person(string Name, int Age)
        {
            this.Name = Name;
            this.Age = Age;
        }


    }


    class PrivateConstructorExample
    {
        private int value;
        private PrivateConstructorExample(int value)
        {
            this.value = value;
            System.Console.WriteLine("private constructor called");
        }

        public int GetValue()
        {
            return value;
        }
    }
    class ConstructorExample
    {
        public static void Main()
        {
            PrivateConstructorExample privateCons = new PrivateConstructorExample(100);
            System.Console.WriteLine(privateCons.GetValue());
            // Person person = new Person("Ramesh", 19);
            // System.Console.WriteLine(person.Name);
            // System.Console.WriteLine(person.Age);

        }
    }
}