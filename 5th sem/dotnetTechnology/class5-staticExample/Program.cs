
/**
    1. No need to create instance(object) of class
    2. All the properties and method with static keywork are binded to the class instead of object(level)
**/
namespace StaticExample
{
    public class Logger{
        public static string logevel = "info";

        public static void log(string message){
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