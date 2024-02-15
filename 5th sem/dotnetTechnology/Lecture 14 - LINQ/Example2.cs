namespace Example2
{
    class Program
    {
        public static void Main(){

            List <string> stringList = new List<string>(){
                "C# Tutorials",
                "VB.NET Tutorials",
                "Learn c#",
                "MVC Tutorial",
                "Java"
            };

            var myLinqQuery = from title in stringList where title.Contains("Tutorials") select title;

            foreach (string title in myLinqQuery)
            {
                System.Console.WriteLine(title + " ");
            }
            //  System.Console.WriteLine("hello");
        }
    }
}