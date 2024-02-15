namespace LamdaExpression3
{
    class Program
    {
        public static void Main(){

            List <string> names = new List<string>(){
                "Ram", "Shyam", "Hari", "Adam", "John"
            };

            var result = names.Where(s => s == "Ram" || s == "Shyam");
// 
            var myLinqQuery = from name in names where name.Contains("Ram") || name.Contains("Shyam") select name;


            foreach (string item in myLinqQuery)
            {
                System.Console.WriteLine(item );
            }
            System.Console.WriteLine("Hello");

        }
    }
}