namespace GenericDemo
{

    class Program
    {
        public static void Swap<T>(ref T a, ref T b)
        {
            T temp;
            temp = a;
            a = b;
            b = temp;

        }
    }
    class GenericDemo
    {
        public static void Main()
        {
            int a = 40, b = 60;
            System.Console.WriteLine($"Before swap : {a} ,{b}", a, b);

            Program.Swap<int>(ref a, ref b);
            System.Console.WriteLine($"After swap {a}, {b}", a, b);

            System.Console.WriteLine("*************************************");

            string firstName = "Ramesh", lastName = "Kunwar";
            System.Console.WriteLine($"Before swap : {firstName} ,{lastName}", firstName, lastName);

            Program.Swap<string>(ref firstName, ref lastName);
            System.Console.WriteLine($"After swap {firstName}, {lastName}", firstName, lastName);

        }
    }
}