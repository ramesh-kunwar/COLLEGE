class Program
{
    static int calc(int x) => 10 / x;

    public static void Main()
    {

        try
        {
            int y = calc(0);
            System.Console.WriteLine(y);
        }
        catch (DivideByZeroException ex)
        {
            // Catching specific exception
            Console.WriteLine("X cannot be zero: " + ex.Message);
        }
        System.Console.WriteLine("Program complete");
    }
}