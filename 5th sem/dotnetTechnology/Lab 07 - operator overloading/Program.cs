// C# program to illustrate the
// unary operator overloading
using System;
namespace Lab07
{

    class Calculator
    {

        public int number1, number2;
        public Calculator(int num1, int num2)
        {
            number1 = num1;
            number2 = num2;
        }

        // Function to perform operation
        // By changing sign of integers
        public static Calculator operator -(Calculator c1)
        {
            c1.number1 = -c1.number1;
            c1.number2 = -c1.number2;
            return c1;
        }

        public static Calculator operator --(Calculator c2)
        {
            c2.number1 = --c2.number1;
            c2.number2 = --c2.number2;
            return c2;
        }

        // Function to print the numbers
        public void Print()
        {
            Console.WriteLine("Number1 = " + number1);
            Console.WriteLine("Number2 = " + number2);
        }
    }

    class Program
    {

        // Driver Code
        static void Main(String[] args)
        {

            // using overloaded - operator 
            // with the class object
            Calculator calc = new Calculator(15, -25);

            calc = -calc;

            // To display the result
            calc.Print();

            System.Console.WriteLine("***************");

            Calculator calc2 = new Calculator(15, -29);
            calc2 = --calc2;
            calc2.Print();
        }
    }
}