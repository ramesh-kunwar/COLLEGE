namespace Example2
{
    class Example2
    {
        public static void Main()
        {
            List<int> marks = new List<int>() { 10, 30, 50, 20, 5 };

            int max = marks.Max();
            int min = marks.Min();
            int sum = marks.Sum();
            int total = marks.Count();

            System.Console.WriteLine(max);
        }
    }
}