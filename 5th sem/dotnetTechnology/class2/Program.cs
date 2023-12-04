using System;

namespace Class2
{
    class Class2
    {
        static void Main(string[] args)
        {

            // taking user name
            // System.Console.WriteLine("Enter first name: ");
            // string firstName = Console.ReadLine();

            // System.Console.WriteLine("Enter last name: ");
            // string lastName = Console.ReadLine();

            // System.Console.WriteLine("Your first name is {0} and your last name is {1}", firstName.ToUpper(), lastName.ToUpper());


            // taking operators from users
            System.Console.WriteLine("What type of operation you want to perform +, -, *, /");
            string operation = Console.ReadLine();


            System.Console.WriteLine("Enter first number: ");
            int firstNumber = int.Parse(Console.ReadLine());

            System.Console.WriteLine("Enter second number: ");
            int secondNumber = int.Parse(Console.ReadLine());

            int result;
            if (operation == "+")
            {

                result = firstNumber + secondNumber;
                System.Console.WriteLine("The result is {0}", result);

            }
            else if (operation == "-")
            {
                result = firstNumber - secondNumber;
                System.Console.WriteLine("The result is {0}", result);
            }
            else if (operation == "*")
            {
                result = firstNumber * secondNumber;
                System.Console.WriteLine("The result is {0}", result);
            }
            else if (operation == "/")
            {
                if (secondNumber == 0)
                {
                    System.Console.WriteLine("Denominator cannot be zero");
                    return;
                }
                result = firstNumber / secondNumber;
                System.Console.WriteLine("The result is {0}", result);
            }
            else
            {
                System.Console.WriteLine("Invalid operation");
            }


        }

    }
}