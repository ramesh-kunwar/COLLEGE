namespace LinqExample
{
    class Program
    {
        public static void Main(){

            string[] names = {"Bill", "Steve", "James", "Mohan", "Mohan"};

            var myLinqQuery = from name in names where name.Contains("Ja") select name;

            foreach (string name in myLinqQuery)
            {
                System.Console.WriteLine(name + " ");
            }
        }
    }
}