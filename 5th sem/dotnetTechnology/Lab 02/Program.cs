
namespace Lab2
{
    class Lab2
    {

        static int ChoiceMenu()
        {
            System.Console.WriteLine("Choose an option: ");
            System.Console.WriteLine("1. Add");
            System.Console.WriteLine("2. Subtract");
            System.Console.WriteLine("3. Multiply");
            System.Console.WriteLine("4. Divide");
            System.Console.WriteLine("5. Exit");
            System.Console.Write("Enter your choice: ");
            int choice = Convert.ToInt32(System.Console.ReadLine());
            return choice;
        }
        static void Main()
        {
            Console.WriteLine("********** Basic Calculator **********");

            Console.Write("Enter the first number: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.Write("Enter the second number: ");
            int num2 = Convert.ToInt32(Console.ReadLine());

            Type num1Type = num1.GetType();

            Type num2Type = num2.GetType();

            if ((num1Type != System.Int32) && (num2Type != System.Int32))
            {
                Console.WriteLine("num1 and num2 is not an integer");
                return;
            }



            int choice = ChoiceMenu();

            // if (choice == 4 && num2 == 0)
            // {
            //     Console.WriteLine("Cannot divide by zero");
            //     return;
            // }

            switch (choice)
            {
                case 1:
                    Console.WriteLine("Sum = {0}", num1 + num2);
                    break;
                case 2:
                    Console.WriteLine("Subtract = {0}", num1 - num2);
                    break;
                case 3:
                    Console.WriteLine("Multiply = {0}", num1 * num2);
                    break;
                case 4:

                    if (num2 == 0)
                    {
                        Console.WriteLine("Cannot divide by zero");
                        break;
                    }
                    Console.WriteLine("Divide = {0}", num1 / num2);
                    break;
                case 5:
                    Console.WriteLine("Exit");
                    break;
                default:
                    Console.WriteLine("Invalid choice");
                    break;
            }

        }
    }
}

