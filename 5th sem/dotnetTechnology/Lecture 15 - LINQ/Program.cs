namespace LINQExample
{
    class Program
    {
        public static void Main()
        {
            int[] numbers = { 5, 2, 8, 1, 9, 3 };
            var sortedNumbers = numbers.OrderByDescending(num => num);

            foreach (var num in sortedNumbers)
            {
                Console.WriteLine(num);
            }
        }
    }
}