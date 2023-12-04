
/**
    1. No need to create instance(object) of class
    2. All the properties and method with static keywork are binded to the class instead of object(level)
    3. Reuse of Code:
        - Static methods allow you to define a task once in the class and reuse it without the need to create an instance of the class. This promotes code reusability and avoids duplicating the same code in multiple places.
    4. Global Access:
    - Since static methods are associated with the class itself, they can be accessed globally without the need for an instance reference. This can be advantageous in scenarios where the task is common across different parts of the codebase.
**/
namespace StaticExample
{
    public class Logger
    {
        public static string logevel = "info";

        public static void log(string message)
        {
            System.Console.WriteLine($"{logevel} {message}");
        }
    }
    class StaticExample
    {
        public static void Main()
        {
            System.Console.WriteLine("hello wol");
            Logger.log("helo");
        }
    }
}