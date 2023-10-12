using System;

namespace SwitchLecture
{
    class SwitchLecture
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter number: ");
            int day = int.Parse(Console.ReadLine());

            // create a switch statement to print days of the week
            // based on the value of day
            switch (day)
            {
                case 1:
                    Console.WriteLine("Monday");
                    break;
                case 2:
                    Console.WriteLine("Tuesday");
                    break;
                case 3:
                    Console.WriteLine("Wednesday");
                    break;
                case 4:
                    Console.WriteLine("Thursday");
                    break;
                case 5:
                    Console.WriteLine("Friday");
                    break;
                case 6:
                    Console.WriteLine("Saturday");
                    break;
                case 7:
                    Console.WriteLine("Sunday");
                    break;
                default:
                    Console.WriteLine("Invalid day");
                    break;
            }
        }
    }
}
