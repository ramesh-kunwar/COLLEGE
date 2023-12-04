/**
    Console.ReadLine()
    Console.Read()
    Console.WriteLine()
    Console.Write()

**/


namespace Lab1
{


    class Lab1
    {
        static void PrintReadLine()
        {
            System.Console.Write("Enter full name: ");
            string fullName = System.Console.ReadLine();
            System.Console.WriteLine("Full name is " + fullName);


        }

        static void PrintRead()
        {
            System.Console.Write("Enter character: ");
            char character = (char)System.Console.Read();
            System.Console.WriteLine("Character is " + character);
        }

        static void PrintWriteLine()
        {
            Console.WriteLine("Example of write Line 1");
            Console.WriteLine("Example of write Line 2");
        }

        static void PrintWrite()
        {
            Console.Write("Example of write 1");
            Console.Write("Example of write 2");
        }
        static void Main(string[] args)
        {

            PrintReadLine();
            PrintRead();
            PrintWriteLine();
            PrintWrite();



        }
    }
}
