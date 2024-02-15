namespace LamdaExpression2
{
    class Program
    {
        public static void Main(){

            List <int> list = new List<int>(){
                1,2,3,4,5,6,7
            };

            var result = list.Where(s => s%2 == 0);



            foreach (int item in result)
            {
                System.Console.WriteLine(item );
            }
            System.Console.WriteLine("Hello");

        }
    }
}