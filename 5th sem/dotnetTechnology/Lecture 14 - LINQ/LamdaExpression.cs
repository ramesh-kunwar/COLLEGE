namespace LamdaExpression
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

            var result = stringList.Where(s => s.Contains("Tutorials"));


            foreach (string title in result)
            {
                System.Console.WriteLine(title + " ");
            }

        }
    }
}