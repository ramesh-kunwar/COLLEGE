namespace InheritanceExample
{

    public class Person
    {
        public string Name;
        public int Age;

        public void Print()
        {
            System.Console.WriteLine($"Name: {Name}, Age: {Age} ");
        }

    }

    public class Student : Person
    {

        public string Subject;

        public void Print()
        {
            System.Console.WriteLine($"Name {Name} Age {Age} studies {Subject}");
        }
    }
    class Program
    {
        public static void Main()
        {
            System.Console.WriteLine("Hello World!");
            Student student = new Student();
            student.Name = "John";
            student.Age = 20;
            student.Subject = "Computer Science";
            student.Print();
        }
    }

}
