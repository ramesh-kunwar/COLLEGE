namespace BinaryOperatorOverloading
{
    class Matrix
    {

        public int[,] values;
        public Matrix(int[,] values)
        {
            this.values = values;
        }
        // public static Matrix operator +(Matrix m1, Matrix m2)



        public static Matrix operator +(Matrix m1, Matrix m2)
        {

            int result = 0;
            for (int i = 0; i < 2; i++)
            {
                for (int j = 0; j < 3; j++)
                {
                    result = values1[i, j] + values2[i, j];
                    // System.Console.WriteLine(result);
                    // int result = values1[0, j] + values1[1, j];
                    // System.Console.Write("\t" + result);
                }
            }
            return result;
        }


        public void Display()
        {

        }



    }
    class Program
    {
        public static void Main()
        {
            System.Console.WriteLine("hello");
            int[,] values1 = { { 1, 2, 3 }, { 3, 4, 5 } };
            int[,] values2 = { { 2, 3, 4 }, { 5, 6, 7 } };

            Matrix matrix1 = new Matrix(values1);
            Matrix matrix2 = new Matrix(values2);



            // for (int i = 0; i < 2; i++)
            // {
            //     for (int j = 0; j < 3; j++)
            //     {
            //         int result = values1[i, j] + values2[i, j];
            //         System.Console.WriteLine(result);
            //         // int result = values1[0, j] + values1[1, j];
            //         // System.Console.Write("\t" + result);
            //     }
            // }

            // Matrix m1 = new Matrix(values1);
            // for (int i = 0; i < 2; i++)
            // {
            //     System.Console.WriteLine(values1[i, 1]);
            // }

            // foreach (var item in values1)
            // {
            //     System.Console.WriteLine(item);
            // }

            // Matrix matrix1 = new Matrix(values1);
            // System.Console.WriteLine(matrix1[]);



            // for (int i = 0; i < 2; i++)
            // {
            //     for (int j = 0; j < 3; j++)
            //     {
            //         System.Console.WriteLine(values1[i, j]);
            //     }
            // }
        }
    }
}