namespace lab3
{


    class Lab3
    {
        static void Add()
        {
            System.Console.WriteLine("Add Method without parameter");
        }
        static void Add(int x)
        {
            System.Console.WriteLine(x + 2);
        }

        static void Add(int x, int y)
        {
            System.Console.WriteLine(x + y);
        }
        static void Add(int x, int y, int z)
        {
            System.Console.WriteLine(x + y + z);
        }
        static void Main()
        {
            Add();
            Add(5);
            Add(5, 6);
            Add(5, 6, 7);


        }
    }
}