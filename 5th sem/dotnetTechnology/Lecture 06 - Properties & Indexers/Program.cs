namespace GettersAndSetters
{
    class Person
    {
        public string Name { get; set;  }
    }

    class Program
    {
        public static void Main()
        {
            Person person = new Person();
            person.Name = "Ramesh";
            System.Console.WriteLine(person.Name);

        }
    }

}
