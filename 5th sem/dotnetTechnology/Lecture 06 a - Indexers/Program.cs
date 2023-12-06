namespace IndexerExample
{
    public class IndexerExample
    {
        private string[] names = new string[10];

        public string this[int i]
        {
            get
            {
                return names[i];
            }
            set
            {
                names[i] = value;
            }
        }
    }

    class Program
    {
        public static void Main()
        {
            IndexerExample test = new IndexerExample();
            test[0] = "Rocky";
            test[1] = "Ramesh";
            test[2] = "Nischal";
            test[3] = "Pramod";
            test[4] = "Sami";
            test[5] = "Rishav";
            test[6] = "Niraj";
            test[7] = "Bipin";
            test[8] = "Sagar";
            test[9] = "Suman";

            System.Console.WriteLine("Hello");
            System.Console.WriteLine(test[1]);
            for (int i = 0; i < 10; i++)
            {
                System.Console.WriteLine(test[i]);
            }
        }
    }
}
