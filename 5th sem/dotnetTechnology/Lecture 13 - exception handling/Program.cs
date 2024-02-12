namespace ExampleProgram
{
    class Example
    {
        static int calc(int x) => 10 / x;

        public static void Main(string[] args)
        {

            try
            {
                byte b = byte.Parse(args[0]);
                System.Console.WriteLine(b);
            }
            catch (IndexOutOfRangeException ex)
            {

                System.Console.WriteLine("Please provide at least one argument", ex.Message);
            }
            catch (FormatException ex)
            {
                System.Console.WriteLine("This is not a number", ex.Message);
            }
            catch (OverflowException ex)
            {
                System.Console.WriteLine("You've given no more than a byte", ex.Message);
            }
        }
    }
}