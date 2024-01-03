using System.Collections.Generic;

namespace QueueExample
{
    class Program
    {
        public static void Main()
        {
            Queue<string> queue = new Queue<string>();
            queue.Enqueue("MCA");
            queue.Enqueue("MBA");
            queue.Enqueue("BCA");
            queue.Enqueue("BBA");

            queue.Dequeue();


            foreach (string s in queue)
            {
                System.Console.WriteLine(s);
            }
        }


    }
}