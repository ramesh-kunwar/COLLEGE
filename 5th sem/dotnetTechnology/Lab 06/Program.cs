namespace Lab6
{

    class Calculator
    {

        public void add(int a, int b)
        {
            int result = a + b;
            System.Console.WriteLine($"Add of int vlaue:  {result} ", result);
        }
        public void add(double a, double b)
        {
            double result = a + b;
            System.Console.WriteLine($"Add of double value:  {result} ", result);

        }
        public void sub(int a, int b)
        {
            int result = a - b;
            System.Console.WriteLine($"Sub of int vlaue:  {result} ", result);
        }

        public void sub(double a, double b)
        {
            double result = a - b;
            System.Console.WriteLine($"Sub of double value:  {result} ", result);

        }
    }
    class Program
    {
        public static void Main()
        {

            Calculator calc = new Calculator();
            calc.add(1, 2);
            calc.add(1.5, 4.3);
            calc.sub(1, 2);
            calc.sub(2.2, 1);
        }
    }
}