using System;

namespace Conditionals
{
    class Conditionals
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter time");
            int time = int.Parse(Console.ReadLine());
            if (time < 18)
            {
                Console.WriteLine("Good day");
            }
            else if (time < 19)
            {
                System.Console.WriteLine("Very good day");
            }
            else
            {
                Console.WriteLine("Good evening");
            }


            
        }
    }
}
