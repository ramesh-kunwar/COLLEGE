using System;

namespace Lecture3
{
    class Program
    {
        static void Main(string[] args)
        {

            System.Console.WriteLine("Enter first number");
            int firstNumber = int.Parse(Console.ReadLine());
            System.Console.WriteLine("Enter second number");
            int secondNumber = int.Parse(Console.ReadLine());

            System.Console.WriteLine("What operation do you want to perform (+, -, *, /)");
            string operation = Console.ReadLine();

            if (operation == "/" && secondNumber == 0)
            {
                System.Console.WriteLine("Cannot divide by zero");
                return;
            }

            switch (operation)
            {
                case "+":
                    System.Console.WriteLine(firstNumber + secondNumber);
                    break;
                case "-":
                    System.Console.WriteLine(firstNumber - secondNumber);
                    break;
                case "*":
                    System.Console.WriteLine(firstNumber * secondNumber);
                    break;
                case "/":
                    System.Console.WriteLine(firstNumber / secondNumber);
                    break;
                default:
                    System.Console.WriteLine("Invalid operation");
                    break;
            }
        }
    }
}
